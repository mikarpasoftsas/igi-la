$( document ).ready(function() {	
	
	$("#btn_matter").removeAttr("onclick");		
	$("#matter").attr('readonly',true);
				
	$("#btn_matter").click(function(){ 
	
	var course = $("#mks_courses_id_c").text();
	
	open_popup(
				"mks_SubjectMatter", 
				600, 
				400, 
				"&mks_courses_mks_subjectmatter_1_name_advanced="+course,
				true, 
				false, 
				{"call_back_function":"set_return","form_name":"form_SubpanelQuickCreate_mks_GroupMatters","field_to_name_array":{"id":"mks_subjectmatter_id_c","name":"matter"}}, 
				"multiple", 
				true
				);

	});	
	
});

