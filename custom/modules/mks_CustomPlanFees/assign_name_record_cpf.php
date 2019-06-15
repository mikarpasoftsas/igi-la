<?php
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class assign_name_record_cpf {
    	
	function assign_name_record_cpf(&$bean, $event, $arguments)
	{
		if(empty($bean->name))
			
			$bean->name = $bean->n_fee_c;
	}	
	
}
