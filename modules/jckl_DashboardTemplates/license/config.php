<?php
global $sugar_version;
 if(preg_match( "/^6.*/", $sugar_version) ) {
     $url = 'index.php?module=jckl_DashboardTemplates&action=index';
 } else {
     $url = '#bwc/index.php?module=jckl_DashboardTemplates&action=index';
 }
$outfitters_config = array(
    'name' => 'DashboardCopyManager', //The matches the id value in your manifest file. This allow the library to lookup addon version from upgrade_history, so you can see what version of addon your customers are using
    'shortname' => 'dashboard-deployer',
    'public_key' => '5a8b12a9f4fb9bb5bb741475a400e496,0b0d8ec448b5c7298af2d56991041f58',
    'api_url' => 'https://www.sugaroutfitters.com/api/v1',
    'validate_users' => false,
    'manage_licensed_users' => false,
    'validation_frequency' => 'weekly',
    'continue_url' => $url,
);

