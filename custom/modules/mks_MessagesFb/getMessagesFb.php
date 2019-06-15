<?php
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

global $current_user,$db;

if(!isset($_REQUEST["idcontacto"]) or empty($_REQUEST["idcontacto"]))
{
	if(isset($_REQUEST["idpreinforme"]) && !empty($_REQUEST["idpreinforme"])){
		$Opportunities = BeanFactory::getBean('Opportunities',$_REQUEST["idpreinforme"]);
		$idcontact     = $Opportunities->account_id;
	}
}
else
	$idcontact = $_REQUEST["idcontacto"];

$Contact = BeanFactory::getBean('Accounts',$idcontact);

if($Contact->load_relationship('accounts_mks_messagesfb_1'))
{
	$msgbypage = 6;
	
	if($_REQUEST["messagesPage"]==1){
		$start = 0;
		$end   = $_REQUEST["messagesPage"] * $msgbypage ;
	}
	else if ($_REQUEST["messagesPage"]>1)
	{
		$start = ($_REQUEST["messagesPage"]-1) * $msgbypage;
		$end   =  $_REQUEST["messagesPage"] * $msgbypage ;
	}
	
	$query = "
	
				SELECT mfb.* 
				FROM mks_messagesfb mfb
				INNER JOIN `accounts_mks_messagesfb_1_c` mfbbyacc ON mfbbyacc.`accounts_mks_messagesfb_1mks_messagesfb_idb` = mfb.id
				WHERE mfb.deleted = 0 AND `accounts_mks_messagesfb_1accounts_ida` = '".$idcontact."' AND mfb.description != ''
				ORDER BY date_entered desc
				limit $start,$end
						
	";
					
	$result = $db->query($query);
	
	$arr["messages"] = array();
					
	while( $row = $db->fetchByAssoc($result)){ 	
						
		$mks_MessagesFb = BeanFactory::getBean('mks_MessagesFb', $row['id']);
		
		if($mks_MessagesFb->type=='sent')
		{
				$User     = BeanFactory::getBean('Users', $mks_MessagesFb->assigned_user_id);
				$fullname = $User->first_name .' '.$User->last_name;
				$avatar = "index.php?entryPoint=download&id=".$User->id."_photo&type=Users" ;
		}
		else
		{
			    $fullname = $Contact->first_name_c.' '.$Contact->last_name_c;
				if(!empty($Contact->avatar_c))
					$avatar = "index.php?entryPoint=download&id=".$Contact->id."_avatar_c&type=Accounts" ;			
				else
					$avatar = $Contact->profile_pic_fbk_c;
					
		}		
		
		$arr["messages"][]=array(
		 "id"=>$mks_MessagesFb->id,
		 "from"=>array(
				"name"  => $fullname,
				"avatar"=> $avatar,
			),
		 "text"=> $mks_MessagesFb->description,
		 "created_at"=> $mks_MessagesFb->date_entered,
		 "type"=> $mks_MessagesFb->type
		);
		
	}						
}

echo json_encode($arr);

exit;

