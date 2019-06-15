$( document ).ready(function() {

	$("#btn_origin_box").prop("onclick", null).off("click");
	
	$("#btn_origin_box").click(function(){ 


	open_popup(
				"mks_Box", 
				600, 
				400, 
				"&type=origin",
				true, 
				false, 
				{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"mks_box_id_c","name":"origin_box"}}, 
				"single", 
				true
				);

	});
	
	$("#btn_destination_box").prop("onclick", null).off("click");
	
	$("#btn_destination_box").click(function(){ 


	open_popup(
				"mks_Box", 
				600, 
				400, 
				"&type=destination",
				true, 
				false, 
				{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"mks_box_id1_c","name":"destination_box"}}, 
				"single", 
				true
				);

	});
	
});


