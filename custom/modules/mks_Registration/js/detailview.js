function mks_refinances_mks_registration_inlineSave_onComplete(){
    console.log('mks_refinances_mks_registration_inlineSave_onComplete is called. Then redirect');
    document.location.reload(true);
    showSubPanel('mks_custompaymentplan_mks_registration',null,true);
}
$( document ).ready(function() {
	
	
	$("#duplicate_button").val('Reinscripción');
	$("#duplicate_button").attr('title','Generar una reinscripción')
	
	var registration_id = $("[name='record']").val();
	
	if(registration_id!='')
	{
			$.post( "index.php?entryPoint=getCustomPaymentPlan", { 
			registration_id: registration_id 
				}, function( data ) {
					
					var status_id = $("#status_id").val();
					if (data.count>0||status_id=='Closed'){
						 $("#mks_custompaymentplan_mks_registration_nuevo_button").remove();
						if(status_id=='Closed')
							for (i = 1; i <= data.count; i++) { 
								$("#mks_custompaymentplan_mks_registration_edit_"+i).remove();	
						}
					}					
				},"json"); 	
	}
	
});