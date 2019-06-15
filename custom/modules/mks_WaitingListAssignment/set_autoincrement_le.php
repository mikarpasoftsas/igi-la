<?php
ini_set("display_errors",true);
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class set_autoincrement_le {
    	
	function set_autoincrement_le(&$bean, $event, $arguments)
	{
		require_once('custom/include/SugarFields/Fields/Autoincrement/SugarFieldAutoincrement.php');
		
		$sfa =  new SugarFieldAutoincrement('Autoincrement');
				
		if($bean->id_autoincrement_c=='pending')
		{	
			$sfa->save($bean,array(),'id_autoincrement_c',array('start_number'=>'00001','format'=>'{LE}{-}{y}{-}{00000}{}{}'));			
		}	
		
		$bean->name = $bean->id_autoincrement_c;
	}	
	
}
