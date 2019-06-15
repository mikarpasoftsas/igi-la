$( document ).ready(function() {
	
	var registration_id = $("#mks_custompaymentplan_mks_registrationmks_registration_ida").attr("data-id-value");
	if(registration_id!='')
		$.post( "index.php?entryPoint=getCustomPaymentPlan", { 
			registration_id: registration_id 
		}, function( data ) {
			if (data.status_id=='Closed'){						
				$("#mks_custompaymentplan_mks_customplanfees_nuevo_button").remove();	
				$("#mks_customdiscountrules_mks_custompaymentplan_nuevo_button").remove();
				$("#edit_button").remove();	 				
			}			
		},"json"); 			
});