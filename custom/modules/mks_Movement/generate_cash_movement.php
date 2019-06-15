<?php
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class generate_cash_movement {    	
		
	function generate_cash_movement(&$bean, $event, $arguments)
	{
		    //Only execute on new rows
			
			//if (true) {		
			if ($bean->fetched_row == false) {		
			
				$mks_Box_Origin = BeanFactory::getBean(
							'mks_Box', 
							$bean->mks_box_id_c
						);
						
				$mks_Box_Destination = BeanFactory::getBean(
							'mks_Box', 
							$bean->mks_box_id1_c
						);		
						
				$mks_RegistrationReceipts = BeanFactory::getBean('mks_RegistrationReceipts');								
				
				$ObjBox  =  $mks_RegistrationReceipts->getOpenMovementByBox($bean->mks_box_id_c,$bean);
				
				if ($ObjBox->load_relationship('mks_dailyboxmovements_mks_movement_1'))
				{	
					
					if(empty($bean->mks_box_id1_c)){						
						
						$ObjBox->mks_dailyboxmovements_mks_movement_1->add($bean->id);
						
						if($bean->type_income == 'Ingreso'){
							
							$ObjBox->balance_c+=$bean->amount * $bean->exchange_rate_c;
							$mks_Box_Origin->balance_c+=$bean->amount * $bean->exchange_rate_c;
							
						}	
						else
						{
							$ObjBox->balance_c-=$bean->amount * $bean->exchange_rate_c;
							$mks_Box_Origin->balance_c-=$bean->amount * $bean->exchange_rate_c;
							
						}	
						
						$ObjBox->save();					
						$mks_Box_Origin->save();		
					}
					else{
						if($bean->type_income == 'Salida'){
							
							$ObjBoxD =  $mks_RegistrationReceipts->getOpenMovementByBox($bean->mks_box_id1_c,$bean);
							
							if ($ObjBoxD->load_relationship('mks_dailyboxmovements_mks_movement_1')){
								$ObjBoxD->mks_dailyboxmovements_mks_movement_1->add($bean->id);
								$ObjBox->balance_c-=$bean->amount * $bean->exchange_rate_c;
								$ObjBoxD->balance_c+=$bean->amount * $bean->exchange_rate_c;
								$mks_Box_Origin->balance_c-=$bean->amount * $bean->exchange_rate_c;
								$mks_Box_Destination->balance_c+=$bean->amount * $bean->exchange_rate_c;
								$ObjBox->save();	
								$ObjBoxD->save();								
								$mks_Box_Origin->save();
								$mks_Box_Destination->save();
							}
							
						}
					}
				}
			}
	}	
	
}
