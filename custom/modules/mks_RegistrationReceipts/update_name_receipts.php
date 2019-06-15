<?php
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class update_name_receipts {
    	
	function update_name_receipts(&$bean, $event, $arguments)
	{
		
		global $db,$app_list_strings;
		
		$query = "					
			
			SELECT securitygroup_id, key_autoincrement_c
			FROM `securitygroups_records` 
			INNER JOIN securitygroups_cstm ON id_c = securitygroup_id
			WHERE `module` = 'mks_Registration' AND `record_id` = '".$bean->tmp_reg_c."' AND `deleted` = 0
			LIMIT 1													
		";
		
		$result = $db->query($query);
						
		$row = $db->fetchByAssoc($result); 
		
		if(empty($bean->type_rr_c))
		
			return;
	
		else		
		{		
		
			if(isset($row['key_autoincrement_c']))
				
				$key2 = $row['key_autoincrement_c'].$bean->type_rr_c ;
			else
				$key2 = 'id_autoincrement_c';
				
			$bean->name = $bean->$key2;
			
		}
	
	}	
	
}
