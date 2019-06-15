

function calculate_total_debt()
{
	var total;
	var debt      = $( "#debt" ).val(); parseFloat(debt);
	var surcharge = $( "#surcharge" ).val();parseFloat(surcharge);
	var discount  = $( "#discount" ).val();parseFloat(discount);
	
	var rest = (debt * surcharge) / 100; parseFloat(rest);
	
	total = parseFloat(debt) + parseFloat(rest) - parseFloat(discount);
	
	$( "#total_debt" ).val(total);
	
}

$( "#surcharge" ).keyup(function() {
  calculate_total_debt();
});

$( "#discount" ).keyup(function() {
  calculate_total_debt();
});

$( "#debt" ).keyup(function() {
  calculate_total_debt();
});

$( document ).ready(function() {
	
	 $.post( "index.php?entryPoint=geDebt", { 
		
			IdRegistration: $("#mks_refinances_mks_registrationmks_registration_ida").val(), 
		
	},function(data) {
						  
			var arr = jQuery.parseJSON(data); 

			$('input[name="debt"]').val(arr.total);	

			calculate_total_debt();			
			
	});	
	
	$( "#mks_refinances_mks_registration_name" ).prop( "disabled", true );
	$( "#btn_mks_refinances_mks_registration_name" ).prop( "disabled", true );
	$( "#btn_clr_mks_refinances_mks_registration_name" ).prop( "disabled", true );	
	
	$("#btn_grouptheory_c").removeAttr("onclick");	
	$("#btn_grouppractice_c").removeAttr("onclick");
	$("#grouptheory_c").attr('readonly',true);
	$("#grouppractice_c").attr('readonly',true);
	
		
	$("#btn_grouptheory_c").click(function(){ 
	var course = $( "#course_c" ).val();
	open_popup(
				"mks_AcademicGroups", 
				600, 
				400, 
				"&type_advanced=theory&courses_advanced="+course,
				true, 
				false, 
				{"call_back_function":"set_return","form_name":"form_SubpanelQuickCreate_mks_Refinances","field_to_name_array":{"id":"mks_academicgroups_id_c","name":"grouptheory_c"}}, 
				"multiple", 
				true
				);

	});
	
	$("#btn_grouppractice_c").click(function(){ 
	var course = $( "#course_c" ).val();
	open_popup(
				"mks_AcademicGroups", 
				600, 
				400, 
				"&type_advanced=practice&courses_advanced="+course,
				true, 
				false, 
				{"call_back_function":"set_return","form_name":"form_SubpanelQuickCreate_mks_Refinances","field_to_name_array":{"id":"mks_academicgroups_id1_c","name":"grouppractice_c"}}, 
				"single", 
				true
				);

	});	
	
	var registration_id = $("#mks_refinances_mks_registrationmks_registration_ida").val();
	
	if(registration_id!='')
	{  
		$.post( "index.php?entryPoint=getCustomPaymentPlan", { 
		registration_id: registration_id 
			}, function( data ) {
				
				if( data.count > 0 )
				{
					
					if(data.course!='')
						$("#course_c").val(data.course);
					
					if(data.course_id!='')
						$("input[name=mks_courses_id_c]").val(data.course_id);										
					
					if(data.grouptheory!='')
						$("#grouptheory_c").val(data.grouptheory);
					
					if(data.grouptheory_id!='')
						$("input[name=mks_academicgroups_id_c]").val(data.grouptheory_id);
					
					if(data.grouppractice!='')
						$("#grouppractice_c").val(data.grouppractice);
					
					if(data.grouppractice_id!='')
						$("input[name=mks_academicgroups_id1_c]").val(data.grouppractice_id);
					
				}
				
			},"json"); 	
    }
});

function validateGroups(mks_courses_id_c)
{
		
		$.post( "index.php?entryPoint=getCourseById", { 
			mks_courses_id_c: mks_courses_id_c 
		}, function( data ) {
			
					
			if(data.theory=="1")
			{					
				$( "#grouptheory_c" ).prop( "disabled", false );
				$( "#btn_grouptheory_c" ).prop( "disabled", false );
				$( "#btn_clr_grouptheory_C" ).prop( "disabled", false );						
			}
			else{
				$( "#grouptheory_c" ).prop( "disabled", true );
				$( "#btn_grouptheory_c" ).prop( "disabled", true );
				$( "#btn_clr_grouptheory_c" ).prop( "disabled", true );
			}			
			if(data.practice=="1")				
			{	
				$( "#grouppractice_c" ).prop( "disabled", false );
				$( "#btn_grouppractice_c" ).prop( "disabled", false );
				$( "#btn_clr_grouppractice_c" ).prop( "disabled", false );
			}
			else{
				$( "#grouppractice_c" ).prop( "disabled", true );
				$( "#btn_grouppractice_c" ).prop( "disabled", true );
				$( "#btn_clr_grouppractice_c" ).prop( "disabled", true );
			}			
			
		},"json"); 	
}

$(function(){      
  
	setTimeout(function(){
		var Y = YUI().use('node', 'event', function (Y) {
        // node and event modules are loaded.
		});  
		var container = Y.one('#course_c');
		container.on('change', function (e) {  
		var mks_courses_id_c = Y.one('#mks_courses_id_c').get('value');	
		if(mks_courses_id_c!=''){
			$("#grouptheory_c").val('');
			$("input[name=mks_academicgroups_id_c]").val('');
			$("#grouppractice_c").val('');
			$("input[name=mks_academicgroups_id1_c]").val('');
			validateGroups(mks_courses_id_c);	
		}	
    });
	
	}, 3000);

    
});