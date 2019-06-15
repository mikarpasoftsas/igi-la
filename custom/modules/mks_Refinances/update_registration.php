<?php
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class update_registration {
    	
	function update_registration(&$bean, $event, $arguments)
	{
		if($bean->update_registration_c==1){
			if(is_object($bean->mks_refinances_mks_registrationmks_registration_ida))
					foreach ($bean->mks_refinances_mks_registrationmks_registration_ida->beans as $key => $value) {
						$IdReg = $key;	
						continue;
					}
			else
					$IdReg=$bean->mks_refinances_mks_registrationmks_registration_ida;
			
			$mks_Registration = BeanFactory::getBean('mks_Registration',$IdReg);
			
			
			$mks_Registration->mks_courses_id_c 		= $bean->mks_courses_id_c;
			
			$mks_Registration->mks_academicgroups_id_c  = $bean->mks_academicgroups_id_c;
			
			$mks_Registration->mks_academicgroups_id1_c	= $bean->mks_academicgroups_id1_c;
			
			$mks_Registration->save();	

			if ($mks_Registration->load_relationship('mks_custompaymentplan_mks_registration'))
			{
					
					$custompaymentplans = $mks_Registration->mks_custompaymentplan_mks_registration->getBeans(
							
							array(
								
								'order_by' => array(array('date_entered', 'ASC'))
							)
						
						);	
						
					foreach($custompaymentplans as $custompaymentplan )	
					{
						if($custompaymentplan->status_c=='valid'){
							$custompaymentplan->status_c    = 'closed';
							$custompaymentplan->description = 'Matricula refinanciada.';
							$custompaymentplan->save();
						}
					}
			}
			
			global $db;
			
			$query = "
			
				UPDATE `mks_registrationreceipts_cstm` SET mks_registrationreceipts_cstm.refinancing_process_c = 'yes' where mks_registrationreceipts_cstm.id_c IN (SELECT mks_registrationreceipts.id
				FROM mks_registrationreceipts  
				LEFT JOIN  mks_registration_mks_registrationreceipts_1_c jtl0 ON mks_registrationreceipts.id=jtl0.mks_regist608feceipts_idb AND jtl0.deleted=0
				LEFT JOIN  mks_registration jt0 ON jt0.id=jtl0.mks_registration_mks_registrationreceipts_1mks_registration_ida AND jt0.deleted=0 AND jt0.deleted=0
				WHERE ((jt0.id = '".$IdReg."'))
				)
			";
			
			$db->query($query);
			
			
			$mks_CustomPaymentPlan = BeanFactory::getBean('mks_CustomPaymentPlan');
			$mks_CustomPaymentPlan->name='Plan Refinanciado a ' . $bean->amount_fees_c . " cuotas";
			$mks_CustomPaymentPlan->mks_paymentplan_mks_coursesmks_courses_ida = $bean->mks_courses_id_c;
			$mks_CustomPaymentPlan->amount = 0;
			$mks_CustomPaymentPlan->id_autoincrement='pending';
			$mks_CustomPaymentPlan->assigned_user_id = $bean->assigned_user_id;
			$mks_CustomPaymentPlan->save();
			
			if ($mks_CustomPaymentPlan->load_relationship('mks_custompaymentplan_mks_registration'))
			{
					$mks_CustomPaymentPlan->mks_custompaymentplan_mks_registration->add($IdReg);
			}
			
			$n=0;
			$m=1;
			if($bean->advance_c>0)
			{
				$n = 1;
				$m = 0;
				$mks_CustomPlanFees 		 = BeanFactory::getBean('mks_CustomPlanFees');
				$mks_CustomPlanFees->name    = $n . " de " . $bean->amount_fees_c;
				$mks_CustomPlanFees->n_fee_c = $n;
				$mks_CustomPlanFees->amount  = $bean->advance_c;	
				$mks_CustomPlanFees->assigned_user_id = $bean->assigned_user_id;
				$mks_CustomPlanFees->expiration = $bean->first_expiration_c;
				$m++;
				$mks_CustomPlanFees->save();

				if ($mks_CustomPlanFees->load_relationship('mks_custompaymentplan_mks_customplanfees'))
				{
					$mks_CustomPlanFees->mks_custompaymentplan_mks_customplanfees->add($mks_CustomPaymentPlan->id);
				}	
			}			
				
			$valfee = ($bean->total_debt - $bean->advance_c) / $bean->amount_fees_c;
			
			for($i=1;$i<=$bean->amount_fees_c;$i++){
				
				$mks_CustomPlanFees = BeanFactory::getBean('mks_CustomPlanFees');
				$mks_CustomPlanFees->name    = ($i + $n) . " de " . $bean->amount_fees_c;
				$mks_CustomPlanFees->n_fee_c = ($i + $n);
				$mks_CustomPlanFees->amount  = $valfee;
				$dateDB = $GLOBALS['timedate']->fromString($bean->first_expiration_c);
				$dateDBformatDate = new DateTime($dateDB);
				$dateDBformatDate->add(new DateInterval("P".$m++."M"));
				$mks_CustomPlanFees->expiration = $dateDBformatDate->format('Y-m-d');
				$mks_CustomPlanFees->assigned_user_id = $bean->assigned_user_id;
				$mks_CustomPlanFees->save();

				if ($mks_CustomPlanFees->load_relationship('mks_custompaymentplan_mks_customplanfees'))
				{
					$mks_CustomPlanFees->mks_custompaymentplan_mks_customplanfees->add($mks_CustomPaymentPlan->id);
				}										
			}	

			$bean->update_registration_c = 0;		
		}
		
	}	
	
}
