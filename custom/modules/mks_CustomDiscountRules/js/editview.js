$(document).ready(function(){	
	var idplan = $('mks_custom2713entplan_ida').val();
	if(idplan!=''){
		$( "#mks_customdiscountrules_mks_custompaymentplan_name" ).prop( "disabled", true );
		$( "#btn_mks_customdiscountrules_mks_custompaymentplan_name" ).prop( "disabled", true );
		$( "#btn_clr_mks_customdiscountrules_mks_custompaymentplan_name" ).prop( "disabled", true );		
		$( "#mks_CustomDiscountRules_subpanel_full_form_button" ).remove();
		$( "#mks_CustomDiscountRules_subpanel_full_form_button" ).remove();
		
	}
});