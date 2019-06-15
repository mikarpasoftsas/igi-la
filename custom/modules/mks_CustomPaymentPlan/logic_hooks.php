<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(2, 'set_autoincrement_cpp', 'custom/modules/mks_CustomPaymentPlan/set_autoincrement_cpp.php','set_autoincrement_cpp', 'set_autoincrement_cpp'); 

$hook_array['before_relationship_delete'][] = Array(
        //Processing index. For sorting the array.
        1,

        //Label. A string value to identify the hook.
        'before_relationship_delete_fee',

        //The PHP file where your class is located.
        'custom/modules/mks_CustomPaymentPlan/before_relationship_delete_fee.php',

        //The class the method is in.
        'before_relationship_delete_fee',

        //The method to call.
        'before_relationship_delete_fee'
    );
?>