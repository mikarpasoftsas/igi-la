<?php

    //add the job key to the list of job strings
    array_push($job_strings, 'defaulters_job');

    function defaulters_job()
    {
        //custom job code
		
		global $db;
		
		$query = "
			TRUNCATE `mks_defaulters_audit`;
		";
		
		$db->query($query);
		
		$query = "
			TRUNCATE `mks_defaulters_cstm`;
		";
		
		$db->query($query);
		
		$query = "
			TRUNCATE `mks_defaulters`;
		";
		
		$db->query($query);
				
		$query = "		
		
		SELECT  COUNT(mks_customplanfees.id) n_fees,
				SUM(mks_customplanfees.amount) balance_c,
				r.id registration_id,
				r.document_name,
				r.mks_academicgroups_id_c academicgroups_id,
				r.mks_academicgroups_id1_c,
				a.id account_id, 
				a.name,
				ac.phone_mobile_c,
				jt0.`id_autoincrement`,
				mks_customplanfees.id,
				mks_customplanfees_cstm.n_fee_c,
				mks_customplanfees_cstm.payment_status_c,
				mks_customplanfees.assigned_user_id,
				jt0.name mks_custompaymentplan_mks_customplanfees_name,
				jtl0.mks_customed0dentplan_ida mks_customed0dentplan_ida,
				mks_customplanfees.name,
				mks_customplanfees.amount,
				mks_customplanfees.expiration,
				jt1.id assigned_user_id,
				jt1.created_by assigned_user_name_owner,
				'Users' assigned_user_name_mod, 
				mks_customplanfees.created_by  
		FROM mks_customplanfees
		LEFT JOIN mks_customplanfees_cstm ON mks_customplanfees.id = mks_customplanfees_cstm.id_c   
		LEFT JOIN  mks_custompaymentplan_mks_customplanfees_c jtl0 ON mks_customplanfees.id=jtl0.mks_custompaymentplan_mks_customplanfeesmks_customplanfees_idb AND jtl0.deleted=0
		LEFT JOIN  mks_custompaymentplan jt0 ON jt0.id=jtl0.mks_customed0dentplan_ida AND jt0.deleted=0 AND jt0.deleted=0  
		LEFT JOIN  mks_custompaymentplan_cstm jt0_c ON jt0_c.id_c = jt0.id
		LEFT JOIN  users jt1 ON mks_customplanfees.assigned_user_id=jt1.id AND jt1.deleted=0 AND jt1.deleted=0
		INNER JOIN `mks_custompaymentplan_mks_registration_c` cm ON cm.`mks_custompaymentplan_mks_registrationmks_custompaymentplan_idb` = jt0.id
		INNER JOIN `mks_registration` r ON r.id = cm.`mks_custompaymentplan_mks_registrationmks_registration_ida`
		INNER JOIN `accounts_mks_registration_1_c` c ON c.`accounts_mks_registration_1mks_registration_idb`= r.id
		INNER JOIN `accounts` a ON a.id = c.`accounts_mks_registration_1accounts_ida`
		LEFT JOIN  `accounts_cstm` ac ON ac.id_c = a.id 
		WHERE ((mks_customplanfees_cstm.payment_status_c IN ('pending'))) AND jt0_c.status_c='valid' AND r.status_id = 'Draft'
		AND mks_customplanfees.deleted=0 
		GROUP BY jt0.`id_autoincrement`
		ORDER BY r.document_name DESC	
		
		";
		
		$result = $db->query($query);
		
		while($row = $db->fetchByAssoc($result)){
			
			$mks_Defaulters = BeanFactory::getBean('mks_Defaulters');			
			
			$mks_Defaulters->account_id_c 			= $row['account_id'];
			$mks_Defaulters->telephone_c			= $row['phone_mobile_c'];
			
			
			
			$query_teacher = "
			
				SELECT t.id 
				FROM `mks_teacher` t
				INNER JOIN`mks_academicgroups_mks_teacher_1_c` tg ON tg.`mks_academicgroups_mks_teacher_1mks_teacher_idb` = t.id AND tg.`mks_academicgroups_mks_teacher_1mks_academicgroups_ida` = '".$row['academicgroups_id']."' AND tg.deleted = 0
				WHERE t.deleted = 0
			
			";
			
			$result_teacher = $db->query($query_teacher);
			
			if($row_teacher = $db->fetchByAssoc($result_teacher)){
			
				$mks_Defaulters->mks_teacher_id_c = $row_teacher['id'];
			}
			
			$mks_Defaulters->mks_academicgroups_id_c= $row['academicgroups_id'];
			$mks_Defaulters->amount_fees_c			= $row['n_fees'];
			$mks_Defaulters->classes_without_c		= 0;
			$mks_Defaulters->mks_registration_id_c	= $row['registration_id'];
			
			
			$query_action = "
			
					SELECT * FROM `mks_management` WHERE `date_modified` = (
						SELECT MAX(m0.date_modified)
						FROM `mks_management` m0 
						INNER JOIN `mks_registration_mks_management_1_c` rm ON rm.`mks_registration_mks_management_1mks_management_idb` = m0.id 
						INNER JOIN `mks_registration` r ON r.id = rm.`mks_registration_mks_management_1mks_registration_ida`
						WHERE r.id = '".$row['registration_id']."' AND m0.deleted = 0
					)
			
			";
			
				
			$result_action = $db->query($query_action);
			
			if($row_action = $db->fetchByAssoc($result_action)){
			
				$mks_Defaulters->last_action_c			= $row_action['date_modified'];
				$mks_Defaulters->description	        = $row_action['description'];	
			}
						
			$mks_Defaulters->balance_c				= $row['balance_c'];
			$mks_Defaulters->assigned_user_id       = $row['assigned_user_id'];	
			
			
			$mks_Defaulters->save();	
				
		}
	
        //return true for completed
        return true;
    }