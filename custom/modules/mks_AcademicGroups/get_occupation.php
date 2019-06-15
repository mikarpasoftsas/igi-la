<?php
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

ini_set('display_errors',true);

$idGroup = $_POST['IdGroup'];

global $db,$current_user; 


	$query = " 

			SELECT mks_groupschedule.id, 
				   mks_groupschedule.mks_classroom_id_c, 
				   mks_groupschedule.id_autoincrement, 
				   jt0.NAME mks_academicgroups_mks_groupschedule_name, 
				   jtl0.mks_academicgroups_mks_groupschedulemks_academicgroups_ida 
							mks_academicgroups_mks_groupschedulemks_academicgroups_ida,
				   jt0.start_date,						
				   jt0.end_date,
				   mks_groupschedule.day, 
				   mks_groupschedule.start_time, 
				   mks_groupschedule.end_time, 
				   jt1.NAME classroom, 
				   mks_groupschedule.assigned_user_id 
			FROM   mks_groupschedule 
				   LEFT JOIN mks_academicgroups_mks_groupschedule_c jtl0 
						  ON 
			mks_groupschedule.id = jtl0.mks_academicgroups_mks_groupschedulemks_groupschedule_idb 
			AND jtl0.deleted = 0 
			LEFT JOIN mks_academicgroups jt0 
				   ON 
			jt0.id = jtl0.mks_academicgroups_mks_groupschedulemks_academicgroups_ida 
			AND jt0.deleted = 0 
			AND jt0.deleted = 0 
			LEFT JOIN mks_classroom jt1 
				   ON mks_groupschedule.mks_classroom_id_c = jt1.id 
					  AND jt1.deleted = 0 
			WHERE  mks_groupschedule.deleted = 0 ";
			
			if($current_user->id!='1')
			{	
				$query .= " and ( ( jt1.assigned_user_id ='".$current_user->id."'  or  EXISTS (SELECT  1
					  FROM    securitygroups secg
							  INNER JOIN securitygroups_users secu
								ON secg.id = secu.securitygroup_id
								   AND secu.deleted = 0
								   AND secu.user_id = '".$current_user->id."'
							  INNER JOIN securitygroups_records secr
								ON secg.id = secr.securitygroup_id
								   AND secr.deleted = 0
								   AND secr.module = 'mks_Classroom'
						   WHERE   secr.record_id = jt1.id
								   AND secg.deleted = 0) ) ) ";
			}
			$query .= " ORDER  BY jt0.start_date ASC"; 
			
			
	$result = $db->query($query);
	
	$arr=array();
	
	while (($row = $db->fetchByAssoc($result)) != null){
			
			$horaEntrada 	   = $row['start_time'];	
 			$v_HorasPartes     = explode(":", $horaEntrada);
			if(count($v_HorasPartes)>1){
				$minutosTotales	   = ($v_HorasPartes[0] * 60) + $v_HorasPartes[1];
				$row['start_time'] = $minutosTotales;
			}
			else
			{
				$minutosTotales	   = ($v_HorasPartes[0] * 60);
				$row['start_time'] = $minutosTotales;
			}
				
			
			$horaEntrada 	   = $row['end_time'];	
 			$v_HorasPartes     = explode(":", $horaEntrada);
			if(count($v_HorasPartes)>1){
				$minutosTotales	   = ($v_HorasPartes[0] * 60) + $v_HorasPartes[1];
				$row['end_time'] = $minutosTotales;
			}
			else
			{
				$minutosTotales	   = ($v_HorasPartes[0] * 60);
				$row['end_time'] = $minutosTotales;
			}
			
			$arr[] = array(
			
				  'day'       =>  $row['day'],
				  'start'	  =>  $row['start_time'],
				  'end'		  =>  $row['end_time'],
				  'title'	  =>  $row['id_autoincrement'],
				  'content'	  =>  $row['mks_academicgroups_mks_groupschedule_name'],
				  'category'  =>  $row['classroom'],
				  'start_date'=>  $row['start_date'],	
				  'end_date'  =>  $row['end_date'],
				  '$sql'      =>  $query
			);
	}

echo json_encode($arr);
exit;