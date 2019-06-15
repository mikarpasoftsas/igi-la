<?php
ini_set("display_errors",true);
$mks_Registration = BeanFactory::getBean('mks_Registration');
$mks_Registration->retrieve($_POST['registration_id']); 

$listcustompaymentplan = array();

if($mks_Registration->load_relationship('mks_custompaymentplan_mks_registration'))
{
	$listcustompaymentplans = $mks_Registration->mks_custompaymentplan_mks_registration->getBeans();	
	$cp = 0;
	foreach($listcustompaymentplans as $listcustompaymentplan){
	
		if($listcustompaymentplan->status_c!='closed')
  		   $cp++;	
	}
}

$arr = array(
				'count'				=>$cp,
				'status_id'			=>$mks_Registration->status_id,
				'course'			=>$mks_Registration->course,
				'course_id'			=>$mks_Registration->mks_courses_id_c,
				'grouptheory'		=>$mks_Registration->grouptheory,
				'grouptheory_id'	=>$mks_Registration->mks_academicgroups_id_c,
				'grouppractice'		=>$mks_Registration->grouppractice,
				'grouppractice_id'	=>$mks_Registration->mks_academicgroups_id1_c
	);

echo json_encode($arr);

exit;