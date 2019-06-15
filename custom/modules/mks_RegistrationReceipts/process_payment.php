<?php
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

global $db;

if(isset($_REQUEST['record']) && !empty($_REQUEST['record']))
{
	$record = $_REQUEST['record'];
	
	$mks_RegistrationReceipts = BeanFactory::getBean(
							'mks_RegistrationReceipts', 
							$record
						);
						
	
	$query = "					
			
		SELECT securitygroup_id, key_autoincrement_c
		FROM `securitygroups_records` 
		INNER JOIN securitygroups_cstm ON id_c = securitygroup_id
		WHERE `module` = 'mks_Registration' AND `record_id` = '".$record."' AND `deleted` = 0
		LIMIT 1												
	";
			
	$result = $db->query($query);
						
	$row = $db->fetchByAssoc($result);	
	
	if(empty($mks_RegistrationReceipts->mks_receiptype_id_c))
	{	
		SugarApplication::redirect('index.php?module=mks_RegistrationReceipts&action=DetailView&record=' . $record);
	}
		
	$mks_RegistrationReceipts->save();
		
	if($mks_RegistrationReceipts->status_registration_receipts_c=='draft')
	{
		$query = "	

					
			SELECT 
			(
				(SELECT COALESCE((SELECT SUM(mks_paymentscash_cstm.amount_c * exchange_rate_c) AS total0
				FROM mks_paymentscash 
				INNER JOIN mks_paymentscash_cstm ON mks_paymentscash.id = mks_paymentscash_cstm.id_c 
				LEFT JOIN mks_registrationreceipts_mks_paymentscash_1_c jtl1 ON mks_paymentscash.id=jtl1.mks_registrationreceipts_mks_paymentscash_1mks_paymentscash_idb AND jtl1.deleted=0 
				LEFT JOIN mks_registrationreceipts jt1 ON jt1.id=jtl1.mks_regist1c49eceipts_ida AND jt1.deleted=0 AND jt1.deleted=0 
				WHERE ((jt1.id = '".$record."')) AND mks_paymentscash.deleted=0),0)
				) +
				(
				SELECT COALESCE((SELECT  SUM(mks_paymentstransfer_cstm.amount_c * exchange_rate_c)  AS total1
				FROM mks_paymentstransfer  
				INNER JOIN mks_paymentstransfer_cstm ON mks_paymentstransfer.id = mks_paymentstransfer_cstm.id_c   
				LEFT JOIN  mks_registrationreceipts_mks_paymentstransfer_1_c jtl2 ON mks_paymentstransfer.id=jtl2.mks_regist887cransfer_idb AND jtl2.deleted=0
				LEFT JOIN  mks_registrationreceipts jt2 ON jt2.id=jtl2.mks_regist09e2eceipts_ida AND jt2.deleted=0 AND jt2.deleted=0 
				WHERE ((jt2.id = '".$record."')) AND mks_paymentstransfer.deleted=0),0)
				) +
				(
				SELECT COALESCE((SELECT  SUM(mks_paymentscheck_cstm.amount_c * exchange_rate_c)  AS total2
				FROM mks_paymentscheck  
				INNER JOIN mks_paymentscheck_cstm ON mks_paymentscheck.id = mks_paymentscheck_cstm.id_c   
				LEFT JOIN  mks_registrationreceipts_mks_paymentscheck_1_c jtl1 ON mks_paymentscheck.id=jtl1.mks_registf5b2tscheck_idb AND jtl1.deleted=0
				LEFT JOIN  mks_registrationreceipts jt1 ON jt1.id=jtl1.mks_regista5a7eceipts_ida AND jt1.deleted=0 AND jt1.deleted=0  
				WHERE ((jt1.id = '".$record."')) AND mks_paymentscheck.deleted=0),0)
				) +
				(
				SELECT COALESCE((SELECT  SUM(mks_paymentscard_cstm.amount_c * exchange_rate_c)  AS total3
				FROM mks_paymentscard  
				INNER JOIN mks_paymentscard_cstm ON mks_paymentscard.id = mks_paymentscard_cstm.id_c   
				LEFT JOIN  mks_registrationreceipts_mks_paymentscard_1_c jtl1 ON mks_paymentscard.id=jtl1.mks_registrationreceipts_mks_paymentscard_1mks_paymentscard_idb AND jtl1.deleted=0
				LEFT JOIN  mks_registrationreceipts jt1 ON jt1.id=jtl1.mks_registfefbeceipts_ida AND jt1.deleted=0 AND jt1.deleted=0 
				WHERE ((jt1.id = '".$record."')) AND mks_paymentscard.deleted=0),0)
				) 	
				
			) AS total
						
		";				
        
		$result = $db->query($query);
		
		$row = $db->fetchByAssoc($result);

		$totalDiscount    = 0;
		
		$totalSurcharge   = 0;
		
		$totalStandard    = 0;
		
		$amount_available = 0;
		
		if(isset($row['total']))
			
			$amount_available = $row['total'];
		
		$query_d = "	

			SELECT mks_collectionconcepts_cstm.id_c 
			FROM mks_collectionconcepts_cstm
			INNER JOIN mks_collectionconcepts ccc ON ccc.id = mks_collectionconcepts_cstm.id_c 
			INNER JOIN mks_registrationreceipts_mks_collectionconcepts_1_c jtl4 ON ccc.id=jtl4.mks_registf2c4oncepts_idb AND jtl4.deleted=0 
			INNER JOIN mks_registrationreceipts jt4 ON jt4.id=jtl4.mks_regist10ebeceipts_ida AND jt4.deleted=0 AND jt4.deleted=0 
			INNER JOIN mks_paymentconcepts_mks_collectionconcepts_1_c ON mks_paymen56b5oncepts_idb = ccc.id and mks_paymentconcepts_mks_collectionconcepts_1_c.deleted = 0 
			INNER JOIN mks_paymentconcepts ON mks_paymentconcepts.id = mks_paymen2b29oncepts_ida 
			INNER JOIN mks_paymentconcepts_cstm ON mks_paymentconcepts_cstm.id_c = mks_paymentconcepts.id 
			WHERE ((jt4.id = '".$record."')) AND ccc.deleted=0 and mks_paymentconcepts_cstm.type_concept_c in ('discount')	
					
		";				
        
		$result_d = $db->query($query_d);
		
		while (($row_d = $db->fetchByAssoc($result_d)) != null)
		{
			$mks_CollectionConcepts = BeanFactory::getBean(
							'mks_CollectionConcepts', 
							$row_d['id_c']
						);
			$mks_CollectionConcepts->status_payment_c = 'paid';
			
			$mks_CollectionConcepts->save();
			
			$totalDiscount = $totalDiscount + $mks_CollectionConcepts->amount_c;
		}
		
		$amount_available = $amount_available + $totalDiscount;
		
		$query_s = "	

			SELECT mks_collectionconcepts_cstm.id_c 
			FROM mks_collectionconcepts_cstm
			INNER JOIN mks_collectionconcepts ccc ON ccc.id = mks_collectionconcepts_cstm.id_c 
			INNER JOIN mks_registrationreceipts_mks_collectionconcepts_1_c jtl4 ON ccc.id=jtl4.mks_registf2c4oncepts_idb AND jtl4.deleted=0 
			INNER JOIN mks_registrationreceipts jt4 ON jt4.id=jtl4.mks_regist10ebeceipts_ida AND jt4.deleted=0 AND jt4.deleted=0 
			INNER JOIN mks_paymentconcepts_mks_collectionconcepts_1_c ON mks_paymen56b5oncepts_idb = ccc.id and mks_paymentconcepts_mks_collectionconcepts_1_c.deleted = 0 
			INNER JOIN mks_paymentconcepts ON mks_paymentconcepts.id = mks_paymen2b29oncepts_ida 
			INNER JOIN mks_paymentconcepts_cstm ON mks_paymentconcepts_cstm.id_c = mks_paymentconcepts.id 
			WHERE ((jt4.id = '".$record."')) AND ccc.deleted=0 and mks_paymentconcepts_cstm.type_concept_c in ('surcharge')	
					
		";				
        
		$result_s = $db->query($query_s);
		
		while (($row_s = $db->fetchByAssoc($result_s)) != null)
		{
			$mks_CollectionConcepts = BeanFactory::getBean(
							'mks_CollectionConcepts', 
							$row_s['id_c']
						);
			$mks_CollectionConcepts->status_payment_c = 'paid';
			
			$mks_CollectionConcepts->save();
			
			$totalSurcharge = $totalSurcharge + $mks_CollectionConcepts->amount_c;
		}
		
		$amount_available = $amount_available - $totalSurcharge;
		
		$query_std = "	

			SELECT mks_collectionconcepts_cstm.id_c 
			FROM mks_collectionconcepts_cstm
			INNER JOIN mks_collectionconcepts ccc ON ccc.id = mks_collectionconcepts_cstm.id_c 
			INNER JOIN mks_registrationreceipts_mks_collectionconcepts_1_c jtl4 ON ccc.id=jtl4.mks_registf2c4oncepts_idb AND jtl4.deleted=0 
			INNER JOIN mks_registrationreceipts jt4 ON jt4.id=jtl4.mks_regist10ebeceipts_ida AND jt4.deleted=0 AND jt4.deleted=0 
			INNER JOIN mks_paymentconcepts_mks_collectionconcepts_1_c ON mks_paymen56b5oncepts_idb = ccc.id and mks_paymentconcepts_mks_collectionconcepts_1_c.deleted = 0 
			INNER JOIN mks_paymentconcepts ON mks_paymentconcepts.id = mks_paymen2b29oncepts_ida 
			INNER JOIN mks_paymentconcepts_cstm ON mks_paymentconcepts_cstm.id_c = mks_paymentconcepts.id 
			WHERE ((jt4.id = '".$record."')) AND ccc.deleted=0 and mks_paymentconcepts_cstm.type_concept_c in ('standard')	
					
		";				
        
		$result_std = $db->query($query_std);
		
		while (($row_std = $db->fetchByAssoc($result_std)) != null)
		{
			$mks_CollectionConcepts = BeanFactory::getBean(
							'mks_CollectionConcepts', 
							$row_std['id_c']
						);
			$mks_CollectionConcepts->status_payment_c = 'paid';
			
			$mks_CollectionConcepts->save();
			
			$totalStandard = $totalStandard + $mks_CollectionConcepts->amount_c;
		}
		
		$amount_available = $amount_available - $totalStandard;
		
		$query_fee = "	

			SELECT sum(mks_collectionconcepts_cstm.amount_c) as totalamount
			FROM mks_collectionconcepts_cstm
			INNER JOIN mks_collectionconcepts ccc ON ccc.id = mks_collectionconcepts_cstm.id_c 
			INNER JOIN mks_registrationreceipts_mks_collectionconcepts_1_c jtl4 ON ccc.id=jtl4.mks_registf2c4oncepts_idb AND jtl4.deleted=0 
			INNER JOIN mks_registrationreceipts jt4 ON jt4.id=jtl4.mks_regist10ebeceipts_ida AND jt4.deleted=0 AND jt4.deleted=0 
			INNER JOIN mks_paymentconcepts_mks_collectionconcepts_1_c ON mks_paymen56b5oncepts_idb = ccc.id and mks_paymentconcepts_mks_collectionconcepts_1_c.deleted = 0 
			INNER JOIN mks_paymentconcepts ON mks_paymentconcepts.id = mks_paymen2b29oncepts_ida 
			INNER JOIN mks_paymentconcepts_cstm ON mks_paymentconcepts_cstm.id_c = mks_paymentconcepts.id 
			WHERE ((jt4.id = '".$record."')) AND ccc.deleted=0 and mks_paymentconcepts_cstm.type_concept_c in ('fee')	
					
		";				
        
		$result_fee = $db->query($query_fee);
		
		$row_fee = $db->fetchByAssoc($result_fee);
		
		$dispfee = $row_fee['totalamount'];	
		
		$original_available = $amount_available;
		
		if($amount_available > $dispfee)
		{
			
			$amount_available   = $dispfee;
		}
		
		if ($mks_RegistrationReceipts->load_relationship('mks_registrationreceipts_mks_collectionconcepts_1'))
			{
				
				$listObjs = $mks_RegistrationReceipts->mks_registrationreceipts_mks_collectionconcepts_1->getBeans(
				
					array(
								
								'order_by' => array(array('date_entered', 'ASC'))
						)
				
				);
				
				$totalPayment = 0;
				
				foreach($listObjs as $mks_CollectionConcepts)
				{
					
					$mks_PaymentConcepts = BeanFactory::getBean(
							'mks_PaymentConcepts', 
							$mks_CollectionConcepts->mks_paymen2b29oncepts_ida
					);
				  
					if($amount_available>0 && $mks_CollectionConcepts->status_payment_c == 'pending' && $mks_PaymentConcepts->type_concept_c=='fee')
					{
							$query_fee = "	

									SELECT  mks_customplanfees.id , mks_customplanfees_cstm.payment_status_c, mks_customplanfees.amount , mks_customplanfees_cstm.partial_mount_c
									FROM mks_customplanfees  
									LEFT JOIN mks_customplanfees_cstm ON mks_customplanfees.id = mks_customplanfees_cstm.id_c   
									LEFT JOIN  mks_custompaymentplan_mks_customplanfees_c jtl0 ON mks_customplanfees.id=jtl0.mks_custompaymentplan_mks_customplanfeesmks_customplanfees_idb AND jtl0.deleted=0
									LEFT JOIN  mks_custompaymentplan jt0 ON jt0.id=jtl0.mks_customed0dentplan_ida AND jt0.deleted=0 AND jt0.deleted=0
									LEFT JOIN  users jt1 ON mks_customplanfees.assigned_user_id=jt1.id AND jt1.deleted=0 AND jt1.deleted=0 
									WHERE  jt0.id LIKE '".$mks_RegistrationReceipts->mks_custom8555entplan_ida."' 
									AND  mks_customplanfees_cstm.payment_status_c IN ('pending','partial') 
									AND mks_customplanfees.deleted=0 
									ORDER BY mks_customplanfees.expiration ASC

							";				
							
							
							$result_fee = $db->query($query_fee);
							
							while (($row_fee = $db->fetchByAssoc($result_fee)) != null)							{
											
								$mks_CustomPlanFees = BeanFactory::getBean('mks_CustomPlanFees', $row_fee['id']);
								
								$saldo = $mks_CustomPlanFees->calculate_payment_detail($mks_CustomPlanFees);							
																
								if($mks_CustomPlanFees->payment_status_c != 'Paid' && $amount_available>0)
								{
									
								    if($amount_available >= $saldo)
 								    {
										$mks_CustomPlanFees->payment_status_c = 'Paid';
										$mks_CustomPlanFees->partial_mount_c+= $saldo;
										$mks_CustomPlanFees->last_paid_value_c= $saldo;
										$mks_CustomPlanFees->save();
										$amount_available-=$saldo;
										$totalPayment+=$saldo;
									}	
									else{
									    $mks_CustomPlanFees->payment_status_c = 'partial';
										$mks_CustomPlanFees->partial_mount_c+= $amount_available;
										$mks_CustomPlanFees->last_paid_value_c= $amount_available;
										$mks_CustomPlanFees->save();
										$totalPayment+=$amount_available;
										$amount_available=0;
									}
									
									if ($mks_CustomPlanFees->load_relationship('mks_registrationreceipts_mks_customplanfees_1'))
									{
										$mks_CustomPlanFees->mks_registrationreceipts_mks_customplanfees_1->add($record);										
									}
									else
									{
										die("Not load Rel mks_registrationreceipts_mks_customplanfees_1");
									}
									
								}   
							}									
							
						$mks_CollectionConcepts->status_payment_c = 'paid';						
						$mks_CollectionConcepts->save();

												
					}				
				}				
			}
			else
			{
				die("Not Load Rel mks_registrationreceipts_mks_collectionconcepts_1");
			}
		
		$mks_RegistrationReceipts->balance_c 						= $original_available - $totalPayment;
		
		$mks_RegistrationReceipts->total_paid_fees_c				= $totalPayment;
		
		$mks_ReceipType = BeanFactory::getBean(
							'mks_ReceipType', 
							$mks_RegistrationReceipts->mks_receiptype_id_c
						);
						
		$mks_ReceipType->consecutive+=1;
		$mks_ReceipType->save();
		
		$mks_RegistrationReceipts->name = $mks_ReceipType->consecutive;
		$mks_RegistrationReceipts->status_registration_receipts_c   = 'confirmed';
		$mks_RegistrationReceipts->photo_description_c = $mks_RegistrationReceipts->description;
		$mks_RegistrationReceipts->save();
		$mks_RegistrationReceipts->payment_date_c = $mks_RegistrationReceipts->date_modified;
		$mks_RegistrationReceipts->save();
		
		$mks_RegistrationReceipts->saveDailyBoxMovement($mks_RegistrationReceipts);
	}
	
	SugarApplication::redirect('index.php?module=mks_RegistrationReceipts&action=DetailView&record=' . $record);
}


	
