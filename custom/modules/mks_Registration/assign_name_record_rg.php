<?php
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class assign_name_record_rg {
    	
	function assign_name_record_rg(&$bean, $event, $arguments)
	{
		if(isset($bean->accounts_mks_registration_1_name)){
			$bean->name =  $bean->reg_num_c ." / " . $bean->accounts_mks_registration_1_name;
			$bean->document_name = $bean->reg_num_c ." / " . $bean->accounts_mks_registration_1_name;
		}
	}	
	
}
