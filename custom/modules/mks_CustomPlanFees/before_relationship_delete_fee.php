<?php

    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

    class before_relationship_delete_fee
    {
        function before_relationship_delete_fee($bean, $event, $arguments)
        {
            
			$mks_CustomPaymentPlan = BeanFactory::getBean('mks_CustomPaymentPlan');
			$mks_CustomPaymentPlan->retrieve($bean->mks_customed0dentplan_ida); 

			$mks_Registration = BeanFactory::getBean('mks_Registration');
			$mks_Registration->retrieve($mks_CustomPaymentPlan->mks_custompaymentplan_mks_registrationmks_registration_ida); 

			if($mks_Registration->status_id=='Closed'){				
				$bean->id='-no permite';
			}
        }
    }

?>