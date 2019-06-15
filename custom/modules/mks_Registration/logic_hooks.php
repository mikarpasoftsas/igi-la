<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
$hook_version = 1; 
$hook_array = Array(); 
// position, file, function 

$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(0, 'set_autoincrement_registration', 'custom/modules/mks_Registration/set_autoincrement_registration.php','set_autoincrement_registration', 'set_autoincrement_registration'); 
$hook_array['before_save'][] = Array(1, 'create_new_registration', 'custom/modules/mks_Registration/create_new_registration.php','create_new_registration', 'create_new_registration'); 
$hook_array['before_save'][] = Array(2, 'consecutive_per_subsidiary', 'custom/modules/mks_Registration/consecutive_per_subsidiary.php','consecutive_per_subsidiary', 'consecutive_per_subsidiary'); 
$hook_array['before_save'][] = Array(3, 'assign_name_record_rg', 'custom/modules/mks_Registration/assign_name_record_rg.php','assign_name_record_rg', 'assign_name_record_rg'); 
$hook_array['before_save'][] = Array(4, 'copy_payment_plan', 'custom/modules/mks_Registration/copy_payment_plan.php','copy_payment_plan', 'copy_payment_plan'); 
$hook_array['before_save'][] = Array(5, 'reset_values_ref', 'custom/modules/mks_Registration/reset_values_ref.php','reset_values_ref', 'reset_values_ref');
//$hook_array['before_save'][] = Array(2, 'assigned_filial_reg', 'custom/modules/mks_Registration/assigned_filial_reg.php','assigned_filial_reg', 'assigned_filial_reg'); 
//$hook_array['process_record'][] = Array(6, 'process_record_refresh', 'custom/modules/mks_Registration/process_record_refresh.php','process_record_refresh', 'process_record_refresh');


?>