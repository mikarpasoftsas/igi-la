<?php
ini_set("display_errors",true);
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class set_autoincrement {
    	
	function set_autoincrement(&$bean, $event, $arguments)
	{
		require_once('custom/include/SugarFields/Fields/Autoincrement/SugarFieldAutoincrement.php');
						
		if($bean->id_autoincrement_c=='pending')
		{	
			$sfa =  new SugarFieldAutoincrement('Autoincrement');
			$sfa->save($bean,array(),'id_autoincrement_c',array('start_number'=>'00001','format'=>'{PI}{-}{y}{-}{00000}{}{}'));			
		}	
		
		if(empty($bean->amout))
			
		   $bean->amout = 0;
		   
		if(empty($bean->name))
			
			$bean->name = "Preinforme / " . $bean->account_name;		
	}	
	
}
