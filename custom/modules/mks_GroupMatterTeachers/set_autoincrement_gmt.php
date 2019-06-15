<?php
ini_set("display_errors",true);
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class set_autoincrement_gmt {
    	
	function set_autoincrement_gmt(&$bean, $event, $arguments)
	{
		require_once('custom/include/SugarFields/Fields/Autoincrement/SugarFieldAutoincrement.php');
						
		if($bean->id_autoincrement=='pending')
		{	
			$sfa =  new SugarFieldAutoincrement('Autoincrement');
			$sfa->save($bean,array(),'id_autoincrement',array('start_number'=>'00001','format'=>'{GMT}{-}{y}{-}{00000}{}{}'));			
		}		
		
	}	
	
}
