<?php
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

	function getCurrentCustomPaymentPlan()
	{
		global $db;
	
		$query = "
		
			SELECT  mks_custompaymentplan.id
			FROM mks_custompaymentplan  
			LEFT JOIN mks_custompaymentplan_cstm ON mks_custompaymentplan.id = mks_custompaymentplan_cstm.id_c   
			LEFT JOIN  mks_custompaymentplan_mks_registration_c jtl0 ON mks_custompaymentplan.id=jtl0.mks_custompaymentplan_mks_registrationmks_custompaymentplan_idb AND jtl0.deleted=0
			LEFT JOIN  mks_registration jt0 ON jt0.id=jtl0.mks_custompaymentplan_mks_registrationmks_registration_ida AND jt0.deleted=0 AND jt0.deleted=0 
			WHERE ((jt0.id = '".$_REQUEST['IdRegistration']."' ) AND ( mks_custompaymentplan_cstm.status_c IN ('valid'))) AND mks_custompaymentplan.deleted=0 
			ORDER BY mks_custompaymentplan.id_autoincrement ASC
					
		";
		$res = $db->query($query);
		
		$row = $db->fetchByAssoc($res);

		$idcustompaymentplan = '';
		
		if(isset($row['id']))	
					
			$idcustompaymentplan = $row['id'];
		
		return $idcustompaymentplan;		
	}
	
	function getSummaryPlanFees()
	{
		$pendingdebt   = 0;
		
		$mks_CustomPaymentPlan = BeanFactory::getBean('mks_CustomPaymentPlan', getCurrentCustomPaymentPlan());
	
		if ($mks_CustomPaymentPlan->load_relationship('mks_custompaymentplan_mks_customplanfees'))
		{
			$Fees = $mks_CustomPaymentPlan->mks_custompaymentplan_mks_customplanfees->getBeans(
						
						array(
							
							'order_by' => array(array('n_fee_c', 'ASC'))
						)
					
					);			
			
			foreach($Fees as $Fees){
						
				
				$mks_CustomPlanFees = BeanFactory::getBean('mks_CustomPlanFees', $Fees->id);			
				
				if($mks_CustomPlanFees->payment_status_c == 'pending' || $mks_CustomPlanFees->payment_status_c == 'partial' )
				{
					$pendingdebt += $mks_CustomPlanFees->calculate_payment_detail_only_surcharge($mks_CustomPlanFees);					
				}  
			}				
		}
		else
		{
			die("Not load Rel mks_custompaymentplan_mks_customplanfees");
		}	
		
		return $pendingdebt;
		
	}

$arr = array("total"=>number_format(getSummaryPlanFees(), 2, '.', ''));
echo json_encode($arr);
exit;