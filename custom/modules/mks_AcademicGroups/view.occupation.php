<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/moment@2.22.1/min/moment-with-locales.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-touchswipe@1.6.18/jquery.touchSwipe.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/eonasdan-bootstrap-datetimepicker@4.17.47/build/js/bootstrap-datetimepicker.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/arrobefr-jquery-calendar@1.0.12/dist/js/jquery-calendar.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/arrobefr-jquery-calendar@1.0.12/dist/css/jquery-calendar.min.css">
  <script src="https://cdn.jsdelivr.net/npm/pouchdb@6.4.3/dist/pouchdb.min.js"></script>
  <title>Calendar</title>
</head>
<body>
  <div class="container-fluid">
    <!-- A title ! -->
    <div class="row">
      <div class="col-xs-12">
        <h1>Ocupación<small></small></h1>        
      </div>
    </div>
    
    <!-- The calendar -->
    <div class="row">
      <div class="col-xs-12">
        <div id="calendar"></div>
      </div>
    </div>
  </div>
  <!-- Create modal -->
  <div id="modal-create" class="modal fade" tabindex="-1" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Crear Evento</h4>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xs-12">
                <!-- Create form -->
                <form id="form-create" class="form">
                  <input type="text" placeholder="From" class="start form-control dtp">
                  <input type="text" placeholder="To" class="end form-control dtp">
                  <input type="text" placeholder="Title" class="title form-control">
                  <textarea placeholder="Content" class="content form-control"></textarea>
                  <input type="text" placeholder="Category" class="category form-control">
                  <!-- Create button -->
                  <button type="submit" class="btn btn-success">
                    <i class="glyphicon glyphicon-plus"></i> Guardar
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Update and delete modal -->
  <div id="modal-update" class="modal fade" tabindex="-1" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Modificar Evento</h4>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xs-12">
                <!-- Update form -->
                <form id="form-update" class="form">
                  <input type="hidden" class="_id">
                  <input type="hidden" class="_rev">
                  <input type="text" placeholder="From" class="start form-control dtp">
                  <input type="text" placeholder="To" class="end form-control dtp">
                  <input type="text" placeholder="Title" class="title form-control">
                  <textarea placeholder="Content" class="content form-control"></textarea>
                  <input type="text" placeholder="Category" class="category form-control">
                  <!-- Update button -->
                  <button type="submit" class="btn btn-warning">
                    <i class="glyphicon glyphicon-pencil"></i> Modificar
                  </button>
                  <!-- Update button -->
                  <button type="button" class="btn btn-danger pull-right delete">
                    <i class="glyphicon glyphicon-trash"></i> Eliminar
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
  
		var record = "";
        var sPageURL = window.parent.location.search.substring(1);
		var sURLVariables = sPageURL.split('&');
		for (var i = 0; i < sURLVariables.length; i++) 
		{
			var sParameterName = sURLVariables[i].split('=');
			if (sParameterName[0] == 'record') 
			{
				var record = sParameterName[1];
			}
		}

		$(document).ready(function(){
		
	    $.post( "index.php?entryPoint=getOccupation", { 
		
		IdGroup: record, 
		
		},
			
		function(data) {
			
			moment.locale('es');		
				  
			var occupation = jQuery.parseJSON(data); 
			
			/**
			 * Many events
			*/
			  var events = [
				
			  ];
				
					
					for (var i=0; i<occupation.length;i++) {
						
						var days      = 0;	
						var start_day = occupation[i].start_date;
						var end_day   = occupation[i].end_date;
						var start     = moment(start_day);
						
						do{
						 
								post_array =  
								{
									  start: start.startOf('week').add(occupation[i].day, 'days').add(occupation[i].start, 'm').format('X'),
									  end: start.startOf('week').add(occupation[i].day, 'days').add(occupation[i].end, 'm').format('X'),
									  title: occupation[i].category,
									  content: occupation[i].content,
									  category: occupation[i].category
									
								}

								events.push(post_array);
								
								var new_date = new Date(start_day);
						
								var days = days + 8;
								
								new_date.setDate(new_date.getDate() + days);
								
								var a = new Date(new_date.getFullYear() + '-' + (new_date.getMonth() + 1) + '-' +  new_date.getDate());
								var b = new Date(end_day);	

								var start = moment(a);
							
							}while(a < b)	
					}
		
					
		
			  /**
			   * Init the calendar
			   */
			  var calendar = $('#calendar').Calendar({
				locale: 'es',
				weekday: {
				  timeline: {
					intervalMinutes: 30,
					fromHour: 9
				  }
				},
				events: events,
			  }).init();
			  /**
			   * Listening for events
			   */
			  $('#calendar').on('Calendar.init', function(event, instance, before, current, after){
				console.log('event : Calendar.init');
				console.log(instance);
				console.log(before);
				console.log(current);
				console.log(after);
			  });
			  $('#calendar').on('Calendar.daynote-mouseenter', function(event, instance, elem){
				console.log('event : Calendar.daynote-mouseenter');
				console.log(instance);
				console.log(elem);
			  });
			  $('#calendar').on('Calendar.daynote-mouseleave', function(event, instance, elem){
				console.log('event : Calendar.daynote-mouseleave');
				console.log(instance);
				console.log(elem);
			  });
			  $('#calendar').on('Calendar.event-mouseenter', function(event, instance, elem){
				console.log('event : Calendar.event-mouseenter');
				console.log(instance);
				console.log(elem);
			  });
			  $('#calendar').on('Calendar.event-mouseleave', function(event, instance, elem){
				console.log('event : Calendar.event-mouseleave');
				console.log(instance);
				console.log(elem);
			  });
			  $('#calendar').on('Calendar.daynote-click', function(event, instance, elem, evt){
				console.log('event : Calendar.daynote-click');
				console.log(instance);
				console.log(elem);
				console.log(evt);
			  });
			  $('#calendar').on('Calendar.event-click', function(event, instance, elem, evt){
				console.log('event : Calendar.event-click');
				console.log(instance);
				console.log(elem);
				console.log(evt);
			  });
			});	
					
				}	
	  
	  );	 

   </script>
</body>
</html>