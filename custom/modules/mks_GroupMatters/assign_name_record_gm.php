<?php
ini_set("display_errors",true);
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class assign_name_record_gm {
    	
	function assign_name_record_gm(&$bean, $event, $arguments)
	{
		$bean->name = $bean->id_autoincrement;		
	}	
	
}
