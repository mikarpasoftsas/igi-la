<?php
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class assign_name_record_cdr {
    	
	function assign_name_record_cdr(&$bean, $event, $arguments)
	{
		global $app_list_strings;
		
		$initial_day = (string)$bean->initial_day;
		$final_day   = (string)$bean->final_day;
		
		$bean->name = (!empty($initial_day))? $initial_day : '-';
		$bean->name.= " a ";
		$bean->name.= (!empty($final_day))? $final_day : '-';
		$bean->name.= " " . $app_list_strings['discountrule_list'][$bean->discountrule] . " " ;
		$bean->name.= ($bean->type_c=='Valor')? '$' : '';
		$bean->name.= $bean->value;	
		$bean->name.= ($bean->type_c=='percentage')? '%' : '';
	}	
	
}
