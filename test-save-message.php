<?php
$text = $_REQUEST["text"];
?>
{
   "message":
		{
			 "id": "X999_z1",
			 "from": {
				"name": "Me", "avatar": "https://bootdey.com/img/Content/user_1.jpg"
			 },
			 "text": "<?php echo $text;?>",
			 "created_at": "<?php echo date('d/m/Y h:i');?>",
			 "type": "sent"
		}
}