<?php
// Facebook APP configuration.
define('VERIFY_TOKEN', 'dRsflkj3242Ofajklsfa#j239842lasf!A');
/**
* Execute CURL
* @param string $url
* @param array 	$jsonData OPTIONAL
* @return mixed
*/
function executeCurl($url, $jsonData=array()) {
	//Initiate cURL.
	$ch = curl_init($url);
	//Attach our encoded JSON string to the POST fields.
	if (is_array($jsonData) && count($jsonData) > 0) {
		//Tell cURL that we want to send a POST request.
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($jsonData));
		//Set the content type to application/json
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
	}
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	return curl_exec($ch);
}

/**
* Find or create user.
* @param string $PAGE_ACCESS_TOKEN
* @param string $FB_USER_ID
* @return object Suite CRM User.
*/
function findOrCreateUser($PAGE_ACCESS_TOKEN, $FB_USER_ID, $FILIAL_ID){
	
	global $db;
	
	$user = BeanFactory::getBean('Accounts');
    $user->retrieve_by_string_fields(array('fb_user_id_c'=>$FB_USER_ID,'deleted'=>0));
	
		$url = "https://graph.facebook.com/".$FB_USER_ID."?fields=first_name,last_name,profile_pic&access_token=" . $PAGE_ACCESS_TOKEN;
		$fbUserData = executeCurl($url);
		$fbUserData = json_decode($fbUserData);
		if(is_object($fbUserData))
		{
			$user->first_name_c 	  = $fbUserData->first_name;
			$user->last_name_c  	  = $fbUserData->last_name;
			$user->fb_user_id_c 	  = $FB_USER_ID;
			$user->profile_pic_fbk_c  = $fbUserData->profile_pic;
			$user->origin_fb_c		  = $FILIAL_ID;
			
			if(empty($user->id_autoincrement_c))
				
				$user->id_autoincrement_c='pending';
			
			$user->save();
			
			$query_u = "	

					UPDATE accounts 
					SET 
						created_by = 1,
						modified_user_id = 1,
						assigned_user_id = 1						
					
					WHERE id = '".$user->id."'
						
			";				
			
			$result = $db->query($query_u);
		}
		
	
	// E.g.
		// {"first_name":"Pedro","last_name":"Suarez","profile_pic":"https:\/\/platform-lookaside.fbsbx.com\/platform\/profilepic\/?psid=1852631734814752&width=1024&ext=1542565085&hash=AeTZ0xTXVq1eOVvK","id":"1852631734814753"}
		// save in internal database and relationship the FB User Id.
		// $user = ...
	return $user;
}

/**
* Get Fillial Configuration.
* @param string $page_id
* @return object Suite CRM FillialConfiguration.
*/
function findFillialConfig($page_id){
	
	$fillial = BeanFactory::getBean('SecurityGroups');
    $fillial->retrieve_by_string_fields(array('page_id_c'=>$page_id,'deleted'=>0));
	return $fillial;
	
}

/**
* Find or create opportunity.
* @param object $userCrm
* @return object Suite CRM Opportunity.
*/
function findOrCreateOpportunity($userCrm,$FILIAL_ID){
	
	global $db;
	
	$query = "
	
		SELECT opportunities.id FROM opportunities 
		INNER JOIN `accounts_opportunities` ON opportunities.id = `opportunity_id`
		WHERE `account_id`='$userCrm->id' AND `accounts_opportunities`.`deleted` = 0 AND (`sales_stage` = 'Prospecting' or `sales_stage` = 'Qualification')
		ORDER BY opportunities.`date_entered` DESC
		LIMIT 1
	";
	$res = $db->query($query);
	$row = $db->fetchByAssoc($res);
	if(isset($row['id']) && !empty($row['id']))	
		$opp = BeanFactory::getBean('Opportunities',$row['id']);
	else
	{
		$opp = BeanFactory::getBean('Opportunities');
		$opp->account_id = $userCrm->id;
		$opp->name 		 = "Preinforme / " . $userCrm->last_name_c . " " . $userCrm->first_name_c;
		$opp->mks_meansnotice_id_c = '89e73c11-165d-79a7-9b5d-5baa4c47e79d';
		$opp->id_autoincrement_c='pending';
		$opp->origin_fb_c	  = $FILIAL_ID;
		$opp->save();
		
		$query_op = "	

					UPDATE opportunities 
					SET 
						created_by = 1,
						modified_user_id = 1,
						assigned_user_id = 1						
					
					WHERE id = '".$opp->id."'
						
		";				
			
		$result = $db->query($query_op);
		
		if ($opp->load_relationship('accounts_opportunities'))
		{
			$opp->accounts_opportunities->add($userCrm->id);
		}
	}
		
	
    
	return $opp;
}

// 1) FB calls this page for verify token.
$challenge 		= (!empty($_REQUEST['hub_challenge']) ? $_REQUEST['hub_challenge'] : '');
$verify_token 	= (!empty($_REQUEST['hub_verify_token']) ? $_REQUEST['hub_verify_token'] : '');
if ($verify_token === VERIFY_TOKEN) {
	echo $challenge;
	exit();
}

// 2) POST values
$request = trim(file_get_contents('php://input'));
if(!empty($request)){
	$input = json_decode($request, true);
	// Verify object is page.
	if (!empty($input['object']) && $input['object'] == 'page' ) {
		// Get the Senders Graph ID
		$sender = $input['entry'][0]['messaging'][0]['sender']['id'];
		// Get the returned message
		$message = $input['entry'][0]['messaging'][0]['message']['text'];
		// Get the Page Graph ID
		$page_id = $input['entry'][0]['messaging'][0]['recipient']['id'];
		//$page_id = $input['page_id'];
		// 3) Search in internal database the access token from $page_id.
		$fillialConfigCrm = findFillialConfig($page_id);
		// set var with page access token
		$PAGE_ACCESS_TOKEN = $fillialConfigCrm->fb_page_access_token_c;
		
		// 4) Search in internal database if users exists with $sender value.
		$userCrm = findOrCreateUser($PAGE_ACCESS_TOKEN, $sender, $fillialConfigCrm->id);
		
		if (!empty($userCrm->id)) {
		
			// 5) Search in internal database if Opportunity exists for user CRM.
			$opportunityCrm = findOrCreateOpportunity($userCrm, $fillialConfigCrm->id);
			
			if (!empty($opportunityCrm->id)) {
			
				// 5) Create a message in internal database.
				// E.g.
					// INSERT INTO messages (sender_user_id, recipient_user_id, filial_id, opportunity_id, created_at, sender, recipient, text, type)
					// VALUES ($userCrm->id, null, $fillialConfigCrm->fillial_id, $opportunityCrm->id, now(), $sender, $page_id, $message, 'received');
				
				if(!empty($message)){
				
					$mks_MessagesFb = BeanFactory::getBean('mks_MessagesFb');
					$mks_MessagesFb->name = 'Chat Facebook';
					$mks_MessagesFb->description = $message;
					$mks_MessagesFb->type='received';
					$mks_MessagesFb->sender=$userCrm->id;
					$mks_MessagesFb->recipient=$fillialConfigCrm->id;
					$mks_MessagesFb->assigned_user_id = 1;
					$mks_MessagesFb->json_c = $request;
					$mks_MessagesFb->save();
					
					if ($mks_MessagesFb->load_relationship('mks_messagesfb_opportunities'))		
						$mks_MessagesFb->mks_messagesfb_opportunities->add($opportunityCrm->id);
					
					if ($mks_MessagesFb->load_relationship('accounts_mks_messagesfb_1'))	
						$mks_MessagesFb->accounts_mks_messagesfb_1->add($userCrm->id);
						
					if ($mks_MessagesFb->load_relationship('mks_messagesfb_securitygroups_1'))	
						$mks_MessagesFb->mks_messagesfb_securitygroups_1->add($fillialConfigCrm->id);
					
				}
			
			}
		}	
	}
}
exit();