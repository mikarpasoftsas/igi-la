function mks_registrationreceipts_mks_paymentscash_1_inlineSave_onComplete(){
    console.log('mks_registrationreceipts_mks_paymentscash_1_inlineSave_onComplete is called. Then redirect');
    document.location.reload(true);
}
function mks_registrationreceipts_mks_paymentstransfer_1_inlineSave_onComplete(){
    console.log('mks_registrationreceipts_mks_paymentstransfer_1_inlineSave_onComplete is called. Then redirect');
    document.location.reload(true);
}
function mks_registrationreceipts_mks_paymentscheck_1_inlineSave_onComplete(){
    console.log('mks_registrationreceipts_mks_paymentscheck_1_inlineSave_onComplete is called. Then redirect');
    document.location.reload(true);
}
function mks_registrationreceipts_mks_paymentscard_1_inlineSave_onComplete(){
    console.log('mks_registrationreceipts_mks_paymentscard_1_inlineSave_onComplete is called. Then redirect');
    document.location.reload(true);
}
function mks_registrationreceipts_mks_collectionconcepts_1_inlineSave_onComplete(){
    console.log('mks_registrationreceipts_mks_collectionconcepts_1_inlineSave_onComplete is called. Then redirect');
    document.location.reload(true);
}
function removeElements(){
		$("#mks_registrationreceipts_mks_paymentscash_1_nuevo_button").remove();
		$("#mks_registrationreceipts_mks_paymentstransfer_1_nuevo_button").remove();
		$("#mks_registrationreceipts_mks_paymentscheck_1_nuevo_button").remove();
		$("#mks_registrationreceipts_mks_paymentscard_1_nuevo_button").remove();
		$("#mks_registrationreceipts_mks_collectionconcepts_1_nuevo_button").remove();
		$("#securitygroups_mks_registrationreceipts_select_button").remove();
		$("#processpayment_x").remove();
		//$("#processpayment_a").remove();		
		$(".listViewTdToolsS1").remove();
		$(".sugar_action_button").remove();
		
	return true;	
}


$( document ).ready(function() {
	
	$("#whole_subpanel_mks_registrationreceipts_mks_customplanfees_1").remove();
	
	
	if($("#status_registration_receipts_c").val()=='confirmed')
	{
		
		removeElements();

	}
	
});
