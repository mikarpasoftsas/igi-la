<?php
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class fb_messages_reply {
    	
	
	function executeCurl($url, $jsonData=array()) {
		//Initiate cURL.
		$ch = curl_init($url);
		//Attach our encoded JSON string to the POST fields.
		if (is_array($jsonData) && count($jsonData) > 0) {
			//Tell cURL that we want to send a POST request.
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($jsonData));
			//Set the content type to application/json
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		}
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		return curl_exec($ch);
	}
	
	function fb_messages_reply(&$bean, $event, $arguments){
			error_log('fb_messages_reply ' . time());
			error_log('fb_messages_reply bean: ' . \json_encode($bean));
			if($bean->type=="sent"){
			$fillial = BeanFactory::getBean('SecurityGroups',$bean->recipient);
			$contact = BeanFactory::getBean('Accounts',$bean->sender);
					
			$url = 'https://graph.facebook.com/v2.6/me/messages?access_token=' . $fillial->fb_page_access_token_c;
			$jsonData = array(
				"recipient" => array("id" => $contact->fb_user_id_c),
				"message" => array("text" => html_entity_decode($bean->description))
			);
			$this->executeCurl($url, $jsonData);			
		}
	}
}