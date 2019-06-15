<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
$hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array();
$hook_array['after_save'] = Array(); 
$hook_array['after_retrieve '] = Array();
$hook_array['before_save'][] = Array(0, 'set_autoincrement_rr', 'custom/modules/mks_RegistrationReceipts/set_autoincrement_rr.php','set_autoincrement_rr', 'set_autoincrement_rr'); 
//$hook_array['before_save'][] = Array(1, 'update_name_receipts', 'custom/modules/mks_RegistrationReceipts/update_name_receipts.php','update_name_receipts', 'update_name_receipts'); 
$hook_array['after_save'][] = Array(1, 'get_current_payment_plan', 'custom/modules/mks_RegistrationReceipts/get_current_payment_plan.php','get_current_payment_plan', 'get_current_payment_plan'); 

?>