<?php
$page = (!empty($_REQUEST["page"]) ? $_REQUEST["page"] : 1);
?>
{
   "messages": [
   <?php if($page == 1){ ?>
		{
			 "id": "X999_Y999",
			 "from": {
				"name": "Diaz alberto", "avatar": "https://bootdey.com/img/Content/user_1.jpg"
			 },
			 "text": "IGI response lorem ipsu IGI response lorem ipsu.",
			 "created_at": "17/11/2018 15:00",
			 "type": "sent"
		}
	<?php 
	}
	if($page == 2){ ?>
		{
			 "id": "X999_Y998",
			 "from": {
				"name": "Del valle Maria", "avatar": "https://bootdey.com/img/Content/user_2.jpg"
			 },
			 "text": "Si, más info",
			 "created_at": "17/11/2018 15:00",
			 "type": "received"
		}
	<?php 
	}
	if($page == 3){ ?>
		{
			 "id": "X999_Y996",
			 "from": {
				"name": "Diaz alberto", "avatar": "https://bootdey.com/img/Content/user_1.jpg"
			 },
			 "text": "Tenemos el curso completo de pasteleria I, II, III. ¿Te interesa la carrera?",
			 "created_at": "17/11/2018 15:00",
			 "type": "sent"
		}
	<?php 
	}
	if($page == 4){ ?>
		{
			 "id": "X999_Y995",
			 "from": {
				"name": "Del valle Maria", "avatar": "https://bootdey.com/img/Content/user_2.jpg"
			 },
			 "text": "¿Tienen curso de pasteleria?",
			 "created_at": "12/10/2018 10:15",
			 "type": "received"
		}
	<?php } ?>
   ]
}