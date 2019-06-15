<?php
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

global $current_user;
$recipient = '';

if(!isset($_REQUEST["idcontacto"]) or empty($_REQUEST["idcontacto"]))
{

	if(!empty($_REQUEST["idpreinforme"])){
		$Opportunities = BeanFactory::getBean('Opportunities',$_REQUEST["idpreinforme"]);
		$idcontact     = $Opportunities->account_id;
		if ($Opportunities->load_relationship('SecurityGroups'))
		{
			$fillials = $Opportunities->SecurityGroups->getBeans();
			
			foreach ($fillials as $fillial)
			
			{
				$recipient = $fillial->id;
				
				continue;
			}
		}
		else{
			 $GLOBALS['log']->fatal('Load Rel securitygroups_opportunities');
		}		
	}
}
else
	$idcontact = $_REQUEST["idcontacto"];

if(!empty($idcontact)){
	
$mks_MessagesFb = BeanFactory::getBean('mks_MessagesFb');
$mks_MessagesFb->name = 'Chat Facebook';
$mks_MessagesFb->description = $_REQUEST["text"];
$mks_MessagesFb->type='sent';
$mks_MessagesFb->sender=$idcontact;
$mks_MessagesFb->recipient=$recipient;
$mks_MessagesFb->assigned_user_id = $current_user->id;

$mks_MessagesFb->save();

if(!empty($_REQUEST["idpreinforme"])){
	
	if ($mks_MessagesFb->load_relationship('mks_messagesfb_opportunities'))
	{
		$mks_MessagesFb->mks_messagesfb_opportunities->add($_REQUEST["idpreinforme"]);
	}
}
	if ($mks_MessagesFb->load_relationship('accounts_mks_messagesfb_1'))
	{
		$mks_MessagesFb->accounts_mks_messagesfb_1->add($idcontact);
	}
	
	if ($mks_MessagesFb->load_relationship('mks_messagesfb_securitygroups_1'))
	
		$mks_MessagesFb->mks_messagesfb_securitygroups_1->add($recipient);
	
	$avatar = "index.php?entryPoint=download&id=".$current_user->id."_photo&type=Users" ;
	
	$mks_MessagesFb2 = BeanFactory::getBean('mks_MessagesFb', $mks_MessagesFb->id);
	
	global $current_user;
	$timeDate = new TimeDate();
	$sampleDateTime = $mks_MessagesFb2->date_entered;
	$FormatedDateTime = $timeDate->to_display_date_time($sampleDateTime, true, true, $current_user);
	$arr["message"] = array(

		 "id"=>$mks_MessagesFb2->id,
		 "from"=>array(
				"name"  => $current_user->first_name . ' ' . $current_user->last_name,
				"avatar"=> $avatar
			),
		 "text"=> $mks_MessagesFb2->description,
		 "created_at"=> $FormatedDateTime,
		 "type"=> $mks_MessagesFb2->type

		);
}
else{
	$arr["message"] = array();
}

echo json_encode($arr);

exit;