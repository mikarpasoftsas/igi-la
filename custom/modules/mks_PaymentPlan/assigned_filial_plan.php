<?php
ini_set("display_errors",true);
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class assigned_filial_plan {
    	
	function assigned_filial_plan(&$bean, $event, $arguments)
	{
		if($bean->load_relationship('mks_paymentplan_securitygroups_1')){		
			
			global $db;
						
			$query = "
					
				SELECT `securitygroup_id` FROM `securitygroups_users` WHERE `user_id` = '".$bean->assigned_user_id."'						
							
			";
			
			$result = $db->query($query);
						
			while( $row = $db->fetchByAssoc($result)){ 
						
				$bean->mks_paymentplan_securitygroups_1->add($row['securitygroup_id']);
						
			}
		}
		
	}	
	
}
