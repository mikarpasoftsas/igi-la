<?php
ini_set("display_errors",true);
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class set_name_discountrules {
    	
	function set_name_discountrules(&$bean, $event, $arguments)
	{
		global $app_list_strings;
		
		$bean->name = $bean->initial_day .' a '. $bean->final_day .' '. $app_list_strings['discountrule_list'][$bean->discountrule];	
		
		if($bean->type_c=='Valor')
			
			$bean->name = $bean->name .' $'.$bean->value;
		else
			$bean->name = $bean->name .' '.$bean->value .'%';
				
	}
	
}
