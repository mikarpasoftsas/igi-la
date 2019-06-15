<?php
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class reset_values_ref {
    	
	function reset_values_ref(&$bean, $event, $arguments)
	{
		$bean->debt_c 		 = 0;
		$bean->surcharge_c   = 0;
		$bean->discount_c 	 = 0;
		$bean->total_debt_c  = 0;
		$bean->advance_c 	 = 0;
		$bean->amount_fees_c = 0;	
		$bean->first_expiration_ref_c = '';	
	}	
	
}
