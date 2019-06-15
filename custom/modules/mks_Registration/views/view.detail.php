<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.detail.php');

class mks_RegistrationViewDetail extends ViewDetail {
    
	
	public $pendingdebt   = 0;
	public $n_pendingdebt = 0;
	public $listDatePaid = array();
	
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
	public function getCurrentCustomPaymentPlan()
	{
		global $db;
	
		$query = "
		
			SELECT  mks_custompaymentplan.id
			FROM mks_custompaymentplan  
			LEFT JOIN mks_custompaymentplan_cstm ON mks_custompaymentplan.id = mks_custompaymentplan_cstm.id_c   
			LEFT JOIN  mks_custompaymentplan_mks_registration_c jtl0 ON mks_custompaymentplan.id=jtl0.mks_custompaymentplan_mks_registrationmks_custompaymentplan_idb AND jtl0.deleted=0
			LEFT JOIN  mks_registration jt0 ON jt0.id=jtl0.mks_custompaymentplan_mks_registrationmks_registration_ida AND jt0.deleted=0 AND jt0.deleted=0 
			WHERE ((jt0.id = '".$this->bean->id."' ) AND ( mks_custompaymentplan_cstm.status_c IN ('valid'))) AND mks_custompaymentplan.deleted=0 
			ORDER BY mks_custompaymentplan.id_autoincrement ASC
					
		";
		$res = $db->query($query);
		
		$row = $db->fetchByAssoc($res);

		$idcustompaymentplan = '';
		
		if(isset($row['id']))	
					
			$idcustompaymentplan = $row['id'];
		
		return $idcustompaymentplan;		
	}
	
		
	public function getValueRegistration()
	{
		
		
		$mks_CustomPaymentPlan = BeanFactory::getBean('mks_CustomPaymentPlan', $this->getCurrentCustomPaymentPlan());
								
		return $mks_CustomPaymentPlan->amount;
		
	}
		
	public function getSummaryPlanFees($separator="<br>")
	{
		global $app_list_strings, $mod_strings,$timedate;
		$mks_CustomPaymentPlan = BeanFactory::getBean('mks_CustomPaymentPlan', $this->getCurrentCustomPaymentPlan());
		$FeesSummary = array();
		if ($mks_CustomPaymentPlan->load_relationship('mks_custompaymentplan_mks_customplanfees'))
		{
			$Fees = $mks_CustomPaymentPlan->mks_custompaymentplan_mks_customplanfees->getBeans(
						
						array(
							
							'order_by' => array(array('n_fee_c', 'ASC'))
						)
					
					);
			
			$FeesSummary = array();
			
			$FeesSummary[0] = $mod_strings['LBL_TITLE_DEBT_SUMMARY_TABLE'] . $separator;
			
			foreach($Fees as $Fees){
						
				
				$mks_CustomPlanFees = BeanFactory::getBean('mks_CustomPlanFees', $Fees->id);
			
				$diffday = $mks_CustomPlanFees->getDiffDay(date("Y-m-d H:i:s"),$mks_CustomPlanFees->expiration);
				
				if(($mks_CustomPlanFees->payment_status_c == 'pending' || $mks_CustomPlanFees->payment_status_c == 'partial'))
				{
					$amount_with_surcharge = $mks_CustomPlanFees->calculate_payment_detail_only_surcharge($mks_CustomPlanFees) ;
					
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
		$FeesSummary2 = '';
		foreach($FeesSummary as $key=>$value){
			
			$FeesSummary2.= $separator . $value;
		}
		
		return $FeesSummary2;
		
	}
	
	public function getSummaryPlanFeesToPDF($separator="<br>")
	{
		global $app_list_strings, $mod_strings,$timedate;
		$mks_CustomPaymentPlan = BeanFactory::getBean('mks_CustomPaymentPlan', $this->getCurrentCustomPaymentPlan());
		$FeesSummary = array();
		if ($mks_CustomPaymentPlan->load_relationship('mks_custompaymentplan_mks_customplanfees'))
		{
			$Fees = $mks_CustomPaymentPlan->mks_custompaymentplan_mks_customplanfees->getBeans(
						
						array(
							
							'order_by' => array(array('n_fee_c', 'ASC'))
						)
					
					);
			
			$FeesSummary = array();
			
			$FeesSummary[0] = $mod_strings['LBL_TITLE_DEBT_SUMMARY_TABLE_1'] . $separator;
			
			foreach($Fees as $Fees){
						
				$mks_CustomPlanFees = BeanFactory::getBean('mks_CustomPlanFees', $Fees->id);				
				
				if(($mks_CustomPlanFees->payment_status_c == 'pending' || $mks_CustomPlanFees->payment_status_c == 'partial'))
				{
					$amount_with_surcharge = $mks_CustomPlanFees->calculate_payment_detail_only_surcharge($mks_CustomPlanFees) ;
					$FeesSummary[$timedate->to_db($mks_CustomPlanFees->expiration)] = $mks_CustomPlanFees->n_fee_c . " | " . str_pad(currency_format_number($amount_with_surcharge), 15, "_", STR_PAD_LEFT) . " | " . $mks_CustomPlanFees->expiration; 
								
				}  
			}
				
		}
		else
		{
			die("Not load Rel mks_custompaymentplan_mks_customplanfees");
		}
		
		ksort($FeesSummary);
		$FeesSummary2 = '';
		foreach($FeesSummary as $key=>$value){
			
			$FeesSummary2.= $separator . $value;
		}
		
		return $FeesSummary2;
		
	}
	
	public function getPendingDebt($color=true)
	{
		global $current_user, $mod_strings;
		$timeDate = new TimeDate();
		$sampleDateTime = date('Y-m-d');
		$FormatedDateTime = $timeDate->to_display_date($sampleDateTime, true, true, $current_user);

		
		if($this->pendingdebt==0)
		
			return $mod_strings['LBL_PENDING_DEBIT_1'] . " " . $FormatedDateTime . " " . $mod_strings['LBL_PENDING_DEBIT_2'];
			
		else if ($color)

				return $mod_strings['LBL_PENDING_DEBIT_1'] . " " . $FormatedDateTime . $mod_strings['LBL_PENDING_DEBIT_3'] . $this->n_pendingdebt . $mod_strings['LBL_PENDING_DEBIT_4'] . " <font color='red'>".currency_format_number($this->pendingdebt)."</font>";	
			else	
				return $mod_strings['LBL_PENDING_DEBIT_1'] . " " . $FormatedDateTime . $mod_strings['LBL_PENDING_DEBIT_3'] . $this->n_pendingdebt . $mod_strings['LBL_PENDING_DEBIT_4'] . currency_format_number($this->pendingdebt);	
	}
	
	public function getLastPaymentDays($idreg)
	{
		
	global $db,$mod_strings, $current_user;
	
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
	
	public function display()
    {
       	global $mod_strings;
		
		$this->populateRegistrationReceiptsTemplates();
		
		$this->displayPopupHtml();
		
		if($this->bean->freeze_plan_c=='not')
			
			$this->bean->description = "<b>".$mod_strings['LBL_REGISTER']."<b>: " . currency_format_number($this->getValueRegistration()) . "<br><br>" . $this->getSummaryPlanFees() . "<br><br>" . $this->getPendingDebt() . "<br><br>" . $this->getLastPaymentDays($this->bean->id);

		else
			
			$this->bean->description =htmlspecialchars_decode($this->bean->freeze_plan_des_c);
		
		$mks_Registration = BeanFactory::getBean(
							'mks_Registration', 
							$this->bean->id
		);
		
		if($this->bean->freeze_plan_c=='not')
		{
			$mks_Registration->description     = "\n\n" . $mod_strings['LBL_REGISTER'].": " . currency_format_number($this->getValueRegistration()) . "\n\n" . $this->getSummaryPlanFeesToPDF("\n") . "\n\n";
			$mks_Registration->freeze_plan_c   = 'yes';
			$mks_Registration->freeze_plan_des_c = $this->bean->description;
		}
		
		$mks_Registration->detail_paymen_plan_c = $this->getRulesTexPlain();
		
		$mks_Registration->save();
		
        parent::display();
    }
	
	function getRulesTexPlain($separator="\n")
	{
		global $app_list_strings, $mod_strings,$timedate;
		
		$mks_CustomPaymentPlan = BeanFactory::getBean('mks_CustomPaymentPlan', $this->getCurrentCustomPaymentPlan());
				
		if ($mks_CustomPaymentPlan->load_relationship('mks_customdiscountrules_mks_custompaymentplan'))
		{
			$Fees = $mks_CustomPaymentPlan-> mks_customdiscountrules_mks_custompaymentplan->getBeans(
						
						array(
							
							'order_by' => array(array('date_create', 'ASC'))
						)
					
					);
			
			$FeesSummary = array();
			
			foreach($Fees as $Fees){
				$FeesSummary[] = $Fees->name; 
			}
				
		}
		else
		{
			die("Not load Rel mks_customdiscountrules_mks_custompaymentplan");
		}
		
		return implode($FeesSummary,$separator);
	}
	
	function populateRegistrationReceiptsTemplates(){
		global $app_list_strings;

		$sql = "SELECT id, name FROM aos_pdf_templates WHERE deleted = 0 AND type='mks_Registration' AND active = 1";

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