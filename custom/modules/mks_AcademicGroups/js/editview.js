function clearType()
{
  $('#type').find('option').remove();
}

$( document ).ready(function() {
    
});
/*
$(function(){
    var Y = YUI().use('node', 'event', function (Y) {
        // node and event modules are loaded.
    });    
    var container = Y.one('#courses 	');
    container.on('change', function (e) {
        var mks_courses_id_c = Y.one('#mks_courses_id_c').get('value');
        clearType();
		$.post( "index.php?entryPoint=getCourseById", { 
			mks_courses_id_c: mks_courses_id_c 
		}, function( data ) {
			
			$('#type').append($('<option>', {value:'', text:''}));
			
			if(data.theory==1)
				
				$('#type').append($('<option>', {value:'theory', text:'Teoria'}));
				
			if(data.practice==1)

				$('#type').append($('<option>', {value:'practice', text:'Practica'}));
			
		},"json"); 	
    });
});
*/