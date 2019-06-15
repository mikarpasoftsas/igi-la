$(document).ready(function(){	
	var idplan = $('mks_customed0dentplan_ida').val();
	if(idplan!=''){		
		$( "#mks_custompaymentplan_mks_customplanfees_name" ).prop( "disabled", true );
		$( "#btn_mks_custompaymentplan_mks_customplanfees_name" ).prop( "disabled", true );
		$( "#btn_clr_mks_custompaymentplan_mks_customplanfees_name" ).prop( "disabled", true );	
		$( "#mks_CustomPlanFees_subpanel_full_form_button" ).remove();
		$( "#mks_CustomPlanFees_subpanel_full_form_button" ).remove();		
	}
});