<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(2, 'set_autoincrement_refinance', 'custom/modules/mks_Refinances/set_autoincrement_refinance.php','set_autoincrement_refinance', 'set_autoincrement_refinance'); 
$hook_array['before_save'][] = Array(1, 'update_registration', 'custom/modules/mks_Refinances/update_registration.php','update_registration', 'update_registration'); 
$hook_array['process_record'][] = Array(6, 'process_record_refresh', 'custom/modules/mks_Refinances/process_record_refresh.php','process_record_refresh', 'process_record_refresh');
?>