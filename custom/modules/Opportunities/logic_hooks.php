<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1, 'Opportunities push feed', 'modules/Opportunities/SugarFeeds/OppFeed.php','OppFeed', 'pushFeed'); 
$hook_array['before_save'][] = Array(2, 'set_autoincrement', 'custom/modules/Opportunities/set_autoincrement.php','set_autoincrement', 'set_autoincrement'); 
$hook_array['before_save'][] = Array(3, 'assigned_filial_op', 'custom/modules/Opportunities/assigned_filial_op.php','assigned_filial_op', 'assigned_filial_op'); 
$hook_array['after_relationship_delete'] = Array(); 
$hook_array['after_relationship_delete'][] = Array(77, 'deleteRelationship', 'modules/Opportunities/OpportunitiesJjwg_MapsLogicHook.php','OpportunitiesJjwg_MapsLogicHook', 'deleteRelationship'); 
$hook_array['after_relationship_add'] = Array(); 
$hook_array['after_relationship_add'][] = Array(77, 'addRelationship', 'modules/Opportunities/OpportunitiesJjwg_MapsLogicHook.php','OpportunitiesJjwg_MapsLogicHook', 'addRelationship'); 
$hook_array['after_save'] = Array(); 
$hook_array['after_save'][] = Array(78, 'updateRelatedProjectGeocodeInfo', 'modules/Opportunities/OpportunitiesJjwg_MapsLogicHook.php','OpportunitiesJjwg_MapsLogicHook', 'updateRelatedProjectGeocodeInfo'); 
$hook_array['before_save'][] = Array(3, 'create_registration', 'custom/modules/Opportunities/create_registration.php','create_registration', 'create_registration'); 
$hook_array['process_record'] = Array();
$hook_array['process_record'][] = Array(1, 'see_availability', 'custom/modules/Opportunities/see_courses_of_interest.php', 'see_courses_of_interest', 'see_courses_of_interest');

?>