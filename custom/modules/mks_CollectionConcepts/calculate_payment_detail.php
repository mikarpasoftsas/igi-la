<?php
ini_set("display_errors",true);
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class calculate_payment_detail {
    	
	
	function getRuleCharge($idCustomPlanFees,$diff_days)
	{
			
		global $db;
	
		$query = "
		
			SELECT  mks_customdiscountrules.id, mks_customdiscountrules_cstm.`type_c`, `value`
			FROM mks_customdiscountrules  
			LEFT JOIN mks_customdiscountrules_cstm ON mks_customdiscountrules.id = mks_customdiscountrules_cstm.id_c   
			LEFT JOIN  mks_customdiscountrules_mks_custompaymentplan_c jtl0 ON mks_customdiscountrules.id=jtl0.mks_custom34c2ntrules_idb AND jtl0.deleted=0
			LEFT JOIN  mks_custompaymentplan jt0 ON jt0.id=jtl0.mks_custom2713entplan_ida AND jt0.deleted=0 AND jt0.deleted=0 
			LEFT JOIN  users jt1 ON mks_customdiscountrules.assigned_user_id=jt1.id AND jt1.deleted=0 AND jt1.deleted=0 
			 WHERE ((jt0.id = '".$idCustomPlanFees."')) 
				AND mks_customdiscountrules.deleted=0 
				AND `discountrule` = 'surcharge'
				AND ".$diff_days." BETWEEN `initial_day` AND `final_day`
			ORDER BY mks_customdiscountrules.id_autoincrement ASC
					
		";
	     
		$res = $db->query($query);
		
		$row = $db->fetchByAssoc($res);

		$idrule = array("id"=>"","type_c"=>"","value"=>0.00);
		
		if(isset($row['id']))	
					
			$idrule = $row;
		
		return $idrule;
		
	}
	
	function getRuleDiscount($idCustomPlanFees,$diff_days)
	{
			
		global $db;
	
		$query = "
		
			SELECT  mks_customdiscountrules.id, mks_customdiscountrules_cstm.`type_c`, `value`
			FROM mks_customdiscountrules  
			LEFT JOIN mks_customdiscountrules_cstm ON mks_customdiscountrules.id = mks_customdiscountrules_cstm.id_c   
			LEFT JOIN  mks_customdiscountrules_mks_custompaymentplan_c jtl0 ON mks_customdiscountrules.id=jtl0.mks_custom34c2ntrules_idb AND jtl0.deleted=0
			LEFT JOIN  mks_custompaymentplan jt0 ON jt0.id=jtl0.mks_custom2713entplan_ida AND jt0.deleted=0 AND jt0.deleted=0 
			LEFT JOIN  users jt1 ON mks_customdiscountrules.assigned_user_id=jt1.id AND jt1.deleted=0 AND jt1.deleted=0 
			 WHERE ((jt0.id = '".$idCustomPlanFees."')) 
				AND mks_customdiscountrules.deleted=0 
				AND `discountrule` = 'discount'
				AND ".$diff_days." BETWEEN `initial_day` AND `final_day`
			ORDER BY mks_customdiscountrules.id_autoincrement ASC
					
		";
	     
		$res = $db->query($query);
		
		$row = $db->fetchByAssoc($res);

		$idrule = array("id"=>"","type_c"=>"","value"=>0.00);
		
		if(isset($row['id']))	
					
			$idrule = $row;
			
		return $idrule;
		
	}
	
	
	function getSurcharge($idCustomPlanFees,$amount)
	{
	
	    $mks_CustomPlanFees = BeanFactory::getBean(
							'mks_CustomPlanFees', 
							$idCustomPlanFees
						);
						
		$date1 = new DateTime(date("Y-m-d"));
		$date2 = new DateTime($mks_CustomPlanFees->expiration);
		$diff = $date1->diff($date2);
		
		if ( $diff->days > 0 )
		{
			 $rule = $this->getRuleCharge($mks_CustomPlanFees->mks_customed0dentplan_ida,$diff->days);
			 
			 if (!empty($rule['id']))
			 {	 
				 if($rule['type_c']=='valor')
					 
					return $rule['value'];
					
				 else
					 
					return $amount * ($rule['value'] / 100);
			 }				
		}
		
		return 0.00;
	}
	
	function getDiscount($idCustomPlanFees,$amount)
	{
		
		$mks_CustomPlanFees = BeanFactory::getBean(
							'mks_CustomPlanFees', 
							$idCustomPlanFees
						);
						
		$date1 = new DateTime(date("Y-m-d"));
		$date2 = new DateTime($mks_CustomPlanFees->expiration);
		$diff = $date1->diff($date2);
		
		if ( $diff->days > 0 )
		{
			 $rule = $this->getRuleDiscount($mks_CustomPlanFees->mks_customed0dentplan_ida,$diff->days);
			 if (!empty($rule['id']))
			 {
				 if($rule['type_c']=='valor')
					 
					return $rule['value'];
					
				 else
					 
					return $amount * ($rule['value'] / 100);
			 }
		}
		
		return 0.00;
	}
	
	function calculate_payment_detail(&$bean, $event, $arguments)
	{
		if($bean->status_payment_c == 'pending'){
			
			if(!empty($bean->mks_collec6580lanfees_idb))
				$bean->surcharge_c = $this->getSurcharge($bean->mks_collec6580lanfees_idb,$bean->amount_c);
			else
				$bean->surcharge_c = 0.00;
			
			if(!empty($bean->mks_collec6580lanfees_idb))
				$bean->discount_c  = $this->getDiscount($bean->mks_collec6580lanfees_idb,$bean->amount_c);	
			else
				$bean->discount_c  = 0.00;
			
			$bean->subtotal_c  = $bean->amount_c + $bean->surcharge_c - $bean->discount_c;	
			$bean->total_c	   = $bean->subtotal_c;	
			$bean->on_account_c= $bean->subtotal_c;	
		}
	}	
	
}
