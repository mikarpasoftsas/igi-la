<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.detail.php');

class mks_RegistrationReceiptsViewDetail extends ViewDetail {
    
	
	public $pendingdebt   = 0;
	public $n_pendingdebt = 0;
	public $listDatePaid = array();
	public $next_expiration = '0000-00-00';
	
	public function time_ago( $timestamp = 0, $now = 0 ) {

    // Set up our variables.
    $minute_in_seconds = 60;
    $hour_in_seconds   = $minute_in_seconds * 60;
    $day_in_seconds    = $hour_in_seconds * 24;
    $week_in_seconds   = $day_in_seconds * 7;
    $month_in_seconds  = $day_in_seconds * 30;
    $year_in_seconds   = $day_in_seconds * 365;

    // Get the current time if a reference point has not been provided.
    if ( 0 === $now ) {
        $now = time();
    }

    // Make sure the timestamp to check is in the past.
    if ( $timestamp > $now ) {
        throw new Exception( 'Timestamp is in the future' );
    }

    // Calculate the time difference between the current time reference point and the timestamp we're comparing.
    $time_difference = (int) abs( $now - $timestamp );

    // Calculate the time ago using the smallest applicable unit.
    if ( $time_difference < $hour_in_seconds ) {

        $difference_value = round( $time_difference / $minute_in_seconds );
        $difference_label = 'minuto';

    } elseif ( $time_difference < $day_in_seconds ) {

        $difference_value = round( $time_difference / $hour_in_seconds );
        $difference_label = 'hora';

    } elseif ( $time_difference < $week_in_seconds ) {

        $difference_value = round( $time_difference / $day_in_seconds );
        $difference_label = 'día';

    } elseif ( $time_difference < $month_in_seconds ) {

        $difference_value = round( $time_difference / $week_in_seconds );
        $difference_label = 'minuto';

    } elseif ( $time_difference < $year_in_seconds ) {

        $difference_value = round( $time_difference / $month_in_seconds );
        $difference_label = 'mes';

    } else {

        $difference_value = round( $time_difference / $year_in_seconds );
        $difference_label = 'año';
    }

    if ( $difference_value <= 1 ) {
        $time_ago = sprintf( 'hace un %s',
            $difference_label
        );
    } else {
        $time_ago = sprintf( 'hace %s %ss',
            $difference_value,
            $difference_label
        );
    }

    return $time_ago;
}
	
	public function getValueRegistration()
	{
		
		
		$mks_CustomPaymentPlan = BeanFactory::getBean('mks_CustomPaymentPlan', $this->bean->mks_custom8555entplan_ida);
								
		return $mks_CustomPaymentPlan->amount;
		
	}
	
	public function getSummaryPlanFees()
	{
		global $app_list_strings, $mod_strings, $timedate;
		$mks_CustomPaymentPlan = BeanFactory::getBean('mks_CustomPaymentPlan', $this->bean->mks_custom8555entplan_ida);
		if ($mks_CustomPaymentPlan->load_relationship('mks_custompaymentplan_mks_customplanfees'))
		{
			$Fees = $mks_CustomPaymentPlan->mks_custompaymentplan_mks_customplanfees->getBeans(
						
						
							array(
							'order_by' => 'date_entered ASC'
						)
					
					);
				
						$FeesSummary = array();
			
			$FeesSummary[0] = $mod_strings['LBL_TITLE_DEBT_SUMMARY_TABLE'] ."<br>";
			
			foreach($Fees as $Fees){
						
				
				$mks_CustomPlanFees = BeanFactory::getBean('mks_CustomPlanFees', $Fees->id);
			
				$diffday = $mks_CustomPlanFees->getDiffDay(date("Y-m-d H:i:s"),$mks_CustomPlanFees->expiration);
				
				if(($mks_CustomPlanFees->payment_status_c == 'pending' || $mks_CustomPlanFees->payment_status_c == 'partial') && $diffday < 0 )
				{
					$amount_with_surcharge = $mks_CustomPlanFees->calculate_payment_detail_only_surcharge($mks_CustomPlanFees) ;
					//$FeesSummary[$timedate->to_db($mks_CustomPlanFees->expiration)] = $mks_CustomPlanFees->n_fee_c . " | " . currency_format_number($amount_with_surcharge) . " | " . $mks_CustomPlanFees->expiration . " | " . $app_list_strings['payment_status_list'][$mks_CustomPlanFees->payment_status_c]; 
					$FeesSummary[$timedate->to_db($mks_CustomPlanFees->expiration)] = $mks_CustomPlanFees->n_fee_c . " | " . str_pad(currency_format_number($amount_with_surcharge), 15, "_", STR_PAD_LEFT) . " | " . $mks_CustomPlanFees->expiration . " | " . $app_list_strings['payment_status_list'][$mks_CustomPlanFees->payment_status_c]; 
					$this->pendingdebt += $amount_with_surcharge;
					$this->n_pendingdebt++;
				}  
			}
				
		}
		else
		{
			die("Not load Rel mks_custompaymentplan_mks_customplanfees");
		}
		
		
		ksort($FeesSummary);
		$np = 0;
		$FeesSummary2 = "";
		foreach($FeesSummary as $key=>$value){	
			if($np==1)
			{   $s = explode('|',$value);
				$this->next_expiration = $s[2];		
			}
			$FeesSummary2.= "<br>" . $value;
			$np++;
		}
		
		return $FeesSummary2;
	}	
	
	public function getSummaryConcepts()
	{
		global $app_list_strings;
		
		$ConceptsSummary = array();
		$ConceptsSummaryVal = array();
		
		$mks_RegistrationReceipts = BeanFactory::getBean('mks_RegistrationReceipts', $this->bean->id);
		
		if ($mks_RegistrationReceipts->load_relationship('mks_registrationreceipts_mks_collectionconcepts_1'))
		{
			$concepts = $mks_RegistrationReceipts->mks_registrationreceipts_mks_collectionconcepts_1->getBeans(
						
						
							array(
							'order_by' => 'date_entered ASC'
						)
					
					);
				
			
			
			foreach($concepts as $concept){
							
				if($concept->name='Cuotas')
				{
					$array  = array();
					$array2 = array();
					$sum    = 0;
					
					if ($mks_RegistrationReceipts->load_relationship('mks_registrationreceipts_mks_customplanfees_1'))
					{
						$fees = $mks_RegistrationReceipts->mks_registrationreceipts_mks_customplanfees_1->getBeans(
							
							array(
							
								'order_by' => 'date_entered ASC'
							)
						
						);
						
						foreach($fees as $fee){

							 $array[$fee->n_fee_c]  = "\nCuota " . $fee->n_fee_c . " _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _";
							 $array2[$fee->n_fee_c] = "\n".currency_format_number($fee->last_paid_value_c);
							 $sum+=$fee->last_paid_value_c;
						}
					ksort($array);	
					ksort($array2);
					$a	= implode('',$array);
					$b  = implode('',$array2);						
					}
				}
				
				$ConceptsSummary[]     = $a;
				$ConceptsSummary2[]    = $b;
				$ConceptsSummaryVal[]  = currency_format_number($sum); 
				
			}
				
		}
		else
		{
			die("Not load Rel mks_registrationreceipts_mks_collectionconcepts_1");
		}
		
		return array(
			
				$ConceptsSummary,
				$ConceptsSummary2,
				$ConceptsSummaryVal
						
			); 
		
	}	
	
	public function getPendingDebt()
	{
		global $current_user, $mod_strings;
		$timeDate = new TimeDate();
		$sampleDateTime = date('Y-m-d');
		$FormatedDateTime = $timeDate->to_display_date($sampleDateTime, true, true, $current_user);

		
		if($this->pendingdebt==0)
		
			return $mod_strings['LBL_PENDING_DEBIT_1'] . " " . $FormatedDateTime . " " . $mod_strings['LBL_PENDING_DEBIT_2'];
			
		else

			return $mod_strings['LBL_PENDING_DEBIT_1'] . " " . $FormatedDateTime . $mod_strings['LBL_PENDING_DEBIT_3'] . $this->n_pendingdebt . $mod_strings['LBL_PENDING_DEBIT_4'] . " <font color='red'>".currency_format_number($this->pendingdebt)."</font>";	
		
	}
	
	public function getPendingDebtTextPlain()
	{
		global $current_user, $mod_strings;
		$timeDate = new TimeDate();
		$sampleDateTime = date('Y-m-d');
		$FormatedDateTime = $timeDate->to_display_date($sampleDateTime, true, true, $current_user);

		
		if($this->pendingdebt==0)
		
			return $mod_strings['LBL_PENDING_DEBIT_1'] . " " . $FormatedDateTime . " " . $mod_strings['LBL_PENDING_DEBIT_2'];			
			
		else

			return $mod_strings['LBL_PENDING_DEBIT_1'] . " " . $FormatedDateTime . $mod_strings['LBL_PENDING_DEBIT_3'] . $this->n_pendingdebt . $mod_strings['LBL_PENDING_DEBIT_4'] . currency_format_number($this->pendingdebt);	
		
	}
	
	public function getLastPaymentDays($idreg)
	{
		
		
		global $db,$mod_strings;
	
		$query = "
		
			SELECT  MAX(`payment_date_c`) AS most_recent_date, total_charge_c, count(*) as cont
			FROM mks_registrationreceipts  
			LEFT JOIN mks_registrationreceipts_cstm ON mks_registrationreceipts.id = mks_registrationreceipts_cstm.id_c   
			LEFT JOIN  mks_registration_mks_registrationreceipts_1_c jtl0 ON mks_registrationreceipts.id=jtl0.mks_regist608feceipts_idb AND jtl0.deleted=0
			LEFT JOIN  mks_registration jt0 ON jt0.id=jtl0.mks_registration_mks_registrationreceipts_1mks_registration_ida AND jt0.deleted=0 AND jt0.deleted=0
			LEFT JOIN  mks_custompaymentplan_mks_registrationreceipts_1_c jtl1 ON mks_registrationreceipts.id=jtl1.mks_custom1743eceipts_idb AND jtl1.deleted=0
			LEFT JOIN  mks_custompaymentplan jt1 ON jt1.id=jtl1.mks_custom8555entplan_ida AND jt1.deleted=0 AND jt1.deleted=0
			LEFT JOIN  users jt2 ON mks_registrationreceipts.assigned_user_id=jt2.id AND jt2.deleted=0 AND jt2.deleted=0 
			WHERE ((jt0.id = '".$idreg."')) AND mks_registrationreceipts.deleted=0 AND mks_registrationreceipts_cstm.status_registration_receipts_c = 'confirmed'
			AND mks_registrationreceipts_cstm.refinancing_process_c='not'
			
		";

		$res = $db->query($query);
		$row = $db->fetchByAssoc($res);
		
		//recent amount
		$query2 = "
		
			SELECT  total_charge_c
			FROM mks_registrationreceipts  
			INNER JOIN mks_registrationreceipts_cstm ON mks_registrationreceipts.id = mks_registrationreceipts_cstm.id_c 
			WHERE payment_date_c = '".$row['most_recent_date']."'	
		
		";
		
		$res2 = $db->query($query2);
		$row2 = $db->fetchByAssoc($res2);

		$total_charge_c = $row2['total_charge_c'];

		$days = 0;
		
		if(isset($row['most_recent_date'])&&!empty($row['most_recent_date']))	
		{			
			$mks_CustomPlanFees = BeanFactory::getBean('mks_CustomPlanFees');
			$days = $mks_CustomPlanFees->getDiffDay(date("Y-m-d H:i:s"),$row['most_recent_date']);
		}	
			
		if($days<0)	
		{
			$str = $this->time_ago(strtotime($row['most_recent_date']));
			
			$timeDate = new TimeDate();
			$FormatedDate = $timeDate->to_display_date($row['most_recent_date'], true, true, $current_user);
				
			return $mod_strings['LBL_PENDING_DEBIT_5'] . $FormatedDate . $mod_strings['LBL_PENDING_DEBIT_8'] . currency_format_number($total_charge_c) . " , " . $str;
		}	
		else if ($row['cont']>0)
		{
			return $mod_strings['LBL_PENDING_DEBIT_6'] . $mod_strings['LBL_PENDING_DEBIT_8'] . currency_format_number($total_charge_c);
		}
		else
			
			return $mod_strings['LBL_PENDING_DEBIT_7'];
	}
	
	public function getTotalEffective()
	{
		global $db;
	
		$query = "
		
			SELECT  SUM(mks_paymentscash_cstm.amount_c * mks_paymentscash_cstm.exchange_rate_c) AS total
			FROM mks_paymentscash  
			INNER JOIN mks_paymentscash_cstm ON mks_paymentscash.id = mks_paymentscash_cstm.id_c 
			LEFT JOIN  mks_registrationreceipts_mks_paymentscash_1_c jtl1 ON mks_paymentscash.id=jtl1.mks_registrationreceipts_mks_paymentscash_1mks_paymentscash_idb AND jtl1.deleted=0
			LEFT JOIN  mks_registrationreceipts jt1 ON jt1.id=jtl1.mks_regist1c49eceipts_ida AND jt1.deleted=0 AND jt1.deleted=0  
			WHERE ((jt1.id = '".$this->bean->id."')) AND mks_paymentscash.deleted=0
		
		";
		$res = $db->query($query);
		$row = $db->fetchByAssoc($res);

		$totalEffective = 0;
		
		if(isset($row['total']))	
					
			$totalEffective = $row['total'];
		
		return $totalEffective;
	}
	
	public function getTotalTransfers()
	{
		
		global $db;
	
		$query = "
		
			SELECT  SUM(mks_paymentstransfer_cstm.amount_c * mks_paymentstransfer_cstm.exchange_rate_c) AS total 
			FROM mks_paymentstransfer  
			INNER JOIN mks_paymentstransfer_cstm ON mks_paymentstransfer.id = mks_paymentstransfer_cstm.id_c   
			LEFT JOIN  mks_registrationreceipts_mks_paymentstransfer_1_c jtl2 ON mks_paymentstransfer.id=jtl2.mks_regist887cransfer_idb AND jtl2.deleted=0
			LEFT JOIN  mks_registrationreceipts jt2 ON jt2.id=jtl2.mks_regist09e2eceipts_ida AND jt2.deleted=0 AND jt2.deleted=0 
			WHERE ((jt2.id = '".$this->bean->id."')) AND mks_paymentstransfer.deleted=0 
		
		";
		$res = $db->query($query);
		$row = $db->fetchByAssoc($res);

		$totalTransfers = 0;
		
		if(isset($row['total']))
		
				$totalTransfers = $row['total'];
		
		return $totalTransfers;
	}
	
	public function getTotalChecks()
	{
		
		global $db;
	
		$query = "
		
			SELECT  SUM(mks_paymentscheck_cstm.amount_c * mks_paymentscheck_cstm.exchange_rate_c) AS total
			FROM mks_paymentscheck  
			INNER JOIN mks_paymentscheck_cstm ON mks_paymentscheck.id = mks_paymentscheck_cstm.id_c   
			LEFT JOIN  mks_registrationreceipts_mks_paymentscheck_1_c jtl1 ON mks_paymentscheck.id=jtl1.mks_registf5b2tscheck_idb AND jtl1.deleted=0
			LEFT JOIN  mks_registrationreceipts jt1 ON jt1.id=jtl1.mks_regista5a7eceipts_ida AND jt1.deleted=0 AND jt1.deleted=0  
			WHERE ((jt1.id = '".$this->bean->id."')) AND mks_paymentscheck.deleted=0	
			
		";
		$res = $db->query($query);
		$row = $db->fetchByAssoc($res);

		$totalChecks = 0;
		
		if(isset($row['total']))
		
				$totalChecks = $row['total'];
				
		return $totalChecks;
	}
	
	public function getTotalDiscount()
	{
		
		global $db;
	
		$query = "
		
		 SELECT SUM(mks_collectionconcepts_cstm.amount_c) AS total
		 FROM mks_collectionconcepts  
		 INNER JOIN  mks_collectionconcepts_cstm ON mks_collectionconcepts.id = mks_collectionconcepts_cstm.id_c
		 INNER JOIN  mks_registrationreceipts_mks_collectionconcepts_1_c jtl4 ON mks_collectionconcepts.id=jtl4.mks_registf2c4oncepts_idb AND jtl4.deleted=0
		 INNER JOIN  mks_registrationreceipts jt4 ON jt4.id=jtl4.mks_regist10ebeceipts_ida AND jt4.deleted=0 AND jt4.deleted=0 
		 
		 INNER JOIN mks_paymentconcepts_mks_collectionconcepts_1_c ON  mks_paymen56b5oncepts_idb = mks_collectionconcepts.id and mks_paymentconcepts_mks_collectionconcepts_1_c.deleted = 0
		 INNER JOIN mks_paymentconcepts ON mks_paymentconcepts.id  = mks_paymen2b29oncepts_ida
		 INNER JOIN mks_paymentconcepts_cstm ON mks_paymentconcepts_cstm.id_c = mks_paymentconcepts.id
	
		 
		 WHERE ((jt4.id = '".$this->bean->id."')) AND mks_collectionconcepts.deleted=0 and mks_paymentconcepts_cstm.type_concept_c in ('discount')		
	
		";
		$res = $db->query($query);
		$row = $db->fetchByAssoc($res);

		$totalDiscount = 0;
		
		if(isset($row['total']))
		
				$totalDiscount = $row['total'];
				
		return $totalDiscount;
	}
	
	public function getTotalCards()
	{
		
		global $db;
	
		$query = "
		
			SELECT  SUM(mks_paymentscard_cstm.amount_c * mks_paymentscard_cstm.exchange_rate_c) AS total
			FROM mks_paymentscard  
			INNER JOIN mks_paymentscard_cstm ON mks_paymentscard.id = mks_paymentscard_cstm.id_c   
			LEFT JOIN  mks_registrationreceipts_mks_paymentscard_1_c jtl1 ON mks_paymentscard.id=jtl1.mks_registrationreceipts_mks_paymentscard_1mks_paymentscard_idb AND jtl1.deleted=0
			LEFT JOIN  mks_registrationreceipts jt1 ON jt1.id=jtl1.mks_registfefbeceipts_ida AND jt1.deleted=0 AND jt1.deleted=0 
			WHERE ((jt1.id = '".$this->bean->id."')) AND mks_paymentscard.deleted=0 ORDER BY mks_paymentscard_cstm.amount_c ASC		
		
		";
		$res = $db->query($query);
		$row = $db->fetchByAssoc($res);

		$totalCards = 0;
		
		if(isset($row['total']))
		
				$totalCards = $row['total'];
				
		return $totalCards;
	}
	
	public function getTotalCharge()
	{
		
		global $db;
	
		$query = "		

		 SELECT SUM(mks_collectionconcepts_cstm.amount_c) AS total
		 FROM mks_collectionconcepts  
		 INNER JOIN  mks_collectionconcepts_cstm ON mks_collectionconcepts.id = mks_collectionconcepts_cstm.id_c
		 INNER JOIN  mks_registrationreceipts_mks_collectionconcepts_1_c jtl4 ON mks_collectionconcepts.id=jtl4.mks_registf2c4oncepts_idb AND jtl4.deleted=0
		 INNER JOIN  mks_registrationreceipts jt4 ON jt4.id=jtl4.mks_regist10ebeceipts_ida AND jt4.deleted=0 AND jt4.deleted=0 
		 
		 INNER JOIN mks_paymentconcepts_mks_collectionconcepts_1_c ON  mks_paymen56b5oncepts_idb = mks_collectionconcepts.id and mks_paymentconcepts_mks_collectionconcepts_1_c.deleted = 0
		 INNER JOIN mks_paymentconcepts ON mks_paymentconcepts.id  = mks_paymen2b29oncepts_ida
		 INNER JOIN mks_paymentconcepts_cstm ON mks_paymentconcepts_cstm.id_c = mks_paymentconcepts.id
	
		 
		 WHERE ((jt4.id = '".$this->bean->id."')) 	 
		 AND mks_collectionconcepts.deleted=0 
		 AND mks_paymentconcepts_cstm.type_concept_c in ('fee','surcharge','standard')		
			
		";
		$res = $db->query($query);
		$row = $db->fetchByAssoc($res);

		$totalCharge = 0;
		
		if(isset($row['total']))
		
				$totalCharge = $row['total'];
				
		return $totalCharge;
	}
	
	public function display()
    {
       	
		global $mod_strings;
		
		$this->populateRegistrationReceiptsTemplates();
		$this->displayPopupHtml();
		
		
			$this->bean->total_effective_c = $this->getTotalEffective();
			$this->bean->total_transfers_c = $this->getTotalTransfers();
			$this->bean->total_checks_c    = $this->getTotalChecks();
			$this->bean->total_cards_c     = $this->getTotalCards();		
			$this->bean->total_charge_c    = $this->getTotalCharge();
			$this->bean->total_discount_c  = $this->getTotalDiscount();
			
			$this->bean->total_amount_c = $this->bean->total_effective_c + $this->bean->total_transfers_c + $this->bean->total_checks_c + $this->bean->total_cards_c + $this->bean->total_discount_c;
				
			$this->bean->description = "<b>".$mod_strings['LBL_REGISTER']."<b>: $" . $this->getValueRegistration() . "<br><br>" . $this->getSummaryPlanFees() . "<br><br>" . $this->getPendingDebt() . "<br><br>" . $this->getLastPaymentDays($this->bean->mks_registration_mks_registrationreceipts_1mks_registration_ida);
			
			
			
			$mks_RegistrationReceipts = BeanFactory::getBean(
								'mks_RegistrationReceipts', 
								$this->bean->id
			);
			
			
				$mks_RegistrationReceipts->total_effective_c	=	$this->bean->total_effective_c;
				$mks_RegistrationReceipts->total_transfers_c	=	$this->bean->total_transfers_c;
				$mks_RegistrationReceipts->total_checks_c		=	$this->bean->total_checks_c;
				$mks_RegistrationReceipts->total_cards_c		=	$this->bean->total_cards_c;
				$mks_RegistrationReceipts->total_discount_c		=	$this->bean->total_discount_c;		
				$mks_RegistrationReceipts->total_amount_c		=	$this->bean->total_amount_c;
				$mks_RegistrationReceipts->total_charge_c		=   $this->bean->total_charge_c;
				$mks_RegistrationReceipts->description			=   $this->bean->description;
				
				//if($mks_RegistrationReceipts->status_registration_receipts_c !='confirmed')
					
					$mks_RegistrationReceipts->description_to_pdf_c	=	$this->getPendingDebtTextPlain();
							
						
				$mks_Registration= BeanFactory::getBean(
									'mks_Registration', 
									$this->bean->mks_registration_mks_registrationreceipts_1mks_registration_ida
				);
				
				$Accounts = BeanFactory::getBean(
									'Accounts', 
									$mks_Registration->accounts_mks_registration_1accounts_ida
				);
				
				$mks_RegistrationReceipts->address_contact_c		=	$Accounts->primary_address_home_c;
				$mks_RegistrationReceipts->telephone_contact_c		=	$Accounts->phone_mobile_c;
				$mks_RegistrationReceipts->next_expiration_c		=   $this->next_expiration;
				require_once("convert.php");
				$mks_RegistrationReceipts->total_letters_c			=   ucfirst(convertir(number_format($mks_RegistrationReceipts->total_charge_c, 0, '', '')));
				$sc = $this->getSummaryConcepts();
				$mks_RegistrationReceipts->consolidated_concepts_c	      = implode('',$sc[0]);
				$mks_RegistrationReceipts->consolided_concept_values_c	  = implode('',$sc[1]);				
				$mks_RegistrationReceipts->save();	
			
			
			
				
			
			
        parent::display();
    }
	
	public function getNexExpiration()
	{
		
	}	
	

	function populateRegistrationReceiptsTemplates(){
		global $app_list_strings;

		$sql = "SELECT id, name FROM aos_pdf_templates WHERE deleted = 0 AND type='mks_RegistrationReceipts' AND active = 1";

		$res = $this->bean->db->query($sql);
        $app_list_strings['template_ddown_c_list'] = array();
		while($row = $this->bean->db->fetchByAssoc($res)){
			$app_list_strings['template_ddown_c_list'][$row['id']] = $row['name'];
		}
	}

	function displayPopupHtml(){
		global $app_list_strings,$app_strings, $mod_strings;
        $templates = array_keys($app_list_strings['template_ddown_c_list']);
        if($templates){

		echo '	<div id="popupDiv_ara" style="display:none;position:fixed;top: 39%; left: 41%;opacity:1;z-index:9999;background:#FFFFFF;">
				<form id="popupForm" action="index.php?entryPoint=generatePdf" method="post">
 				<table style="border: #000 solid 2px;padding-left:40px;padding-right:40px;padding-top:10px;padding-bottom:10px;font-size:110%;" >
					<tr height="20">
						<td colspan="2">
						<b>'.$app_strings['LBL_SELECT_TEMPLATE'].':-</b>
						</td>
					</tr>';
			foreach($templates as $template){
				$template = str_replace('^','',$template);
				$js = "document.getElementById('popupDivBack_ara').style.display='none';document.getElementById('popupDiv_ara').style.display='none';var form=document.getElementById('popupForm');if(form!=null){form.templateID.value='".$template."';form.submit();}else{alert('Error!');}";
				echo '<tr height="20">
				<td width="17" valign="center"><a href="#" onclick="'.$js.'"><img src="themes/default/images/txt_image_inline.gif" width="16" height="16" /></a></td>
				<td><b><a href="#" onclick="'.$js.'">'.$app_list_strings['template_ddown_c_list'][$template].'</a></b></td></tr>';
			}
		echo '	<input type="hidden" name="templateID" value="" />
				<input type="hidden" name="task" value="pdf" />
				<input type="hidden" name="module" value="'.$_REQUEST['module'].'" />
				<input type="hidden" name="uid" value="'.$this->bean->id.'" />
				</form>
				<tr style="height:10px;"><tr><tr><td colspan="2"><button style=" display: block;margin-left: auto;margin-right: auto" onclick="document.getElementById(\'popupDivBack_ara\').style.display=\'none\';document.getElementById(\'popupDiv_ara\').style.display=\'none\';return false;">Cancel</button></td></tr>
				</table>
				</div>
				<div id="popupDivBack_ara" onclick="this.style.display=\'none\';document.getElementById(\'popupDiv_ara\').style.display=\'none\';" style="top:0px;left:0px;position:fixed;height:100%;width:100%;background:#000000;opacity:0.5;display:none;vertical-align:middle;text-align:center;z-index:9998;">
				</div>
				<script>
					function showPopup(task){
						var form=document.getElementById(\'popupForm\');
						var ppd=document.getElementById(\'popupDivBack_ara\');
						var ppd2=document.getElementById(\'popupDiv_ara\');
						if('.count($templates).' == 1){
							form.task.value=task;
							form.templateID.value=\''.$template.'\';
							form.submit();
						}else if(form!=null && ppd!=null && ppd2!=null){
							ppd.style.display=\'block\';
							ppd2.style.display=\'block\';
							form.task.value=task;
						}else{
							alert(\'Error!\');
						}
					}
				</script>';
		}
		else{
			echo '<script>
				function showPopup(task){
				alert(\''.$mod_strings['LBL_NO_TEMPLATE'].'\');
				}
			</script>';
		}
	}
	
}
?> 