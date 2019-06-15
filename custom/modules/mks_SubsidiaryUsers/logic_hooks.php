<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(77, 'create_user_system', 'custom/modules/mks_SubsidiaryUsers/create_user_system.php','create_user_system', 'create_user_system'); 
$hook_array['before_relationship_add'] = Array();
$hook_array['before_relationship_add'][] = Array(1,'before_relationship_add_group','custom/modules/mks_SubsidiaryUsers/before_relationship_add_group.php','before_relationship_add_group','before_relationship_add_group');
$hook_array['after_relationship_add'] = Array();
$hook_array['after_relationship_add'][] = Array(1,'after_relationship_add_rol','custom/modules/mks_SubsidiaryUsers/after_relationship_add_rol.php','after_relationship_add_rol','after_relationship_add_rol');

?>