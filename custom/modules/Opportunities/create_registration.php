<?php
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class create_registration {
    	
	function create_registration(&$bean, $event, $arguments)
	{		
			
		
		if ($bean->sales_stage == "Closed Won" && 
		
				( 
				
				 $bean->fetched_row['sales_stage'] != "Closed Won" || empty($bean->fetched_row)
				
				)
			) {
			
			$mks_Registration = BeanFactory::getBean('mks_Registration');
			$mks_Registration->id_autoincrement='pending';
			$mks_Registration->opportunity_id_c = $bean->id;
			$mks_Registration->accounts_mks_registration_1accounts_ida = $bean->account_id;
			$mks_Registration->assigned_user_id = $bean->assigned_user_id;
			$mks_Registration->save();
		
			if ($mks_Registration->load_relationship('mks_registration_securitygroups_1')){
			
					
					global $db, $current_user;
					
					$query = "
				
						select * 
						from securitygroups_records 
						where module = 'Opportunities' 
						and deleted = 0 and 
						record_id = '".$bean->id."'
						
					";
					
					$result = $db->query($query);
					
					require_once('modules/SecurityGroups/SecurityGroup.php');
					$groupFocus = new SecurityGroup();
					while( $row = $db->fetchByAssoc($result)){ 
					
						$mks_Registration->mks_registration_securitygroups_1->add($row['securitygroup_id']);
						$groupFocus->addGroupToRecord('mks_Registration', $mks_Registration->id,$row['securitygroup_id']);
					
					}
					
					$query1= "
					
					
						UPDATE opportunities 
						SET 
							sales_stage = 'Closed Won',
							modified_user_id = '".$current_user->id."',
							date_closed = '".$bean->date_closed."',
							date_modified = now()
						WHERE id = '".$bean->id."'
					
					";
					
					$result = $db->query($query1);
			}
			else
			{
				die("not load rel mks_registration_securitygroups_1");
			}
						
			$queryParams = array(
				'module' => 'mks_Registration',
				'action' => 'EditView',
				'record' => $mks_Registration->id			
			);
			
			SugarApplication::redirect('index.php?' . http_build_query($queryParams));
		
		}
	}		
}
