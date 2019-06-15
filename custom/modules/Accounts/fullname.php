<?php
ini_set("display_errors",true);
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class fullname {
    	
	function fullname(&$bean, $event, $arguments)
	{
		$bean->name     = $bean->last_name_c . " " . $bean->first_name_c;
		$bean->sic_code = $bean->first_name_c;
		$bean->website  = $bean->id_local_c;
	}	
	
}
