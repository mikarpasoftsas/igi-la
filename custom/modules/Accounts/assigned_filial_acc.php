<?php
ini_set("display_errors",true);
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class assigned_filial_acc {
    	
	function assigned_filial_acc(&$bean, $event, $arguments)
	{
		global $db,$current_user;	
		
		if($bean->origin_fb_c == '0'){		
									
			$query = "					
				SELECT `securitygroup_id` FROM `securitygroups_users` WHERE `user_id` = '".$bean->assigned_user_id."' AND deleted=0													
			";
				
			$result = $db->query($query);
						
			while( $row = $db->fetchByAssoc($result)){ 
							
				$id = create_guid();		
				$query1 = "	

					INSERT INTO `securitygroups_records` (`id`,`securitygroup_id`,`record_id`,`module`,`date_modified`,`modified_user_id`,`created_by`,`deleted`) 
					VALUES ('$id','".$row['securitygroup_id']."','".$bean->id."','Accounts',now(),'".$current_user->id."','".$current_user->id."',0);	
					
				";				
				$result = $db->query($query1);
							
			}		
		}
		else{
			
			$id = create_guid();		
			
			$query1 = "	

					INSERT INTO `securitygroups_records` (`id`,`securitygroup_id`,`record_id`,`module`,`date_modified`,`modified_user_id`,`created_by`,`deleted`) 
					VALUES ('$id','".$bean->origin_fb_c."','".$bean->id."','Accounts',now(),'".$current_user->id."','".$current_user->id."',0);	
					
			";				
			
			$result = $db->query($query1);
		}		
		
	}	
	
}
