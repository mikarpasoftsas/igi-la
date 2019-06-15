<?php
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class process_record_refresh {
    	
	function process_record_refresh(&$bean, $event, $arguments)
	{
			//Check if the current URL contains ‘#’
$refresh = <<<EOT
<script>
if(document.URL.indexOf(“#”)==-1)
{
// Set the URL to whatever it was plus “#”.
url = document.URL+”#”;
location = “#”;
//Reload the page
location.reload(true);
}

</script>
EOT;
	}	
	
}
