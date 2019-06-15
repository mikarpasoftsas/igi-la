<?php
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class assign_name_record_gmt {
    	
	function assign_name_record_gmt(&$bean, $event, $arguments)
	{
		$bean->name = $bean->id_autoincrement;		
	}	
	
}
