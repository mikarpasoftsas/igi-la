<?php
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class get_current_payment_plan {
    	
	function get_current_payment_plan(&$bean, $event, $arguments)
	{
		$id_reg = '';
		
		if(!is_object($bean->mks_registration_mks_registrationreceipts_1mks_registration_ida) && !empty($bean->mks_registration_mks_registrationreceipts_1mks_registration_ida))
		{
			$id_reg = $bean->mks_registration_mks_registrationreceipts_1mks_registration_ida;
		}
		else
			$id_reg = $bean->tmp_reg_c;
		
		if(!empty($id_reg))
		{
			
			$mks_Registration = BeanFactory::getBean(
							'mks_Registration', 
							$id_reg
						);
			
			if ($mks_Registration->load_relationship('mks_custompaymentplan_mks_registration'))
			{
					
				
				$PaymentPlans = $mks_Registration->mks_custompaymentplan_mks_registration->getBeans(
						
						array(
							
							'order_by' => array(array('date_entered', 'ASC'))
						)
					
					);
					
				foreach($PaymentPlans as $PaymentPlan){
						
					$mks_CustomPaymentPlan = BeanFactory::getBean('mks_CustomPaymentPlan', $PaymentPlan->id);
					
					if($mks_CustomPaymentPlan->status_c=='valid')
					{
					
						if ($bean->load_relationship('mks_custompaymentplan_mks_registrationreceipts_1'))
						{
							$bean->mks_custompaymentplan_mks_registrationreceipts_1->add($mks_CustomPaymentPlan->id);
						}
						
					}				
				}		
			}
			else
			{
				die("Not load rel mks_custompaymentplan_mks_registration");
			}				
		}					
	
	}	
	
}
