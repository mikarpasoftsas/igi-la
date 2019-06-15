<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
$hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array(); 
$hook_array['after_save'] = Array(); 
$hook_array['after_relationship_add'] = Array();
$hook_array['after_save'][] = Array(1, 'loading_matters', 'custom/modules/mks_AcademicGroups/loading_matters.php','loading_matters', 'loading_matters'); 
$hook_array['after_relationship_add'][] = Array(1, 'after_relationship_add_teacher', 'custom/modules/mks_AcademicGroups/after_relationship_add_teacher.php','after_relationship_add_teacher', 'after_relationship_add_assigned_teacher'); 
$hook_array['process_record'] = Array();
$hook_array['process_record'][] = Array(1, 'see_availability', 'custom/modules/mks_AcademicGroups/see_availability.php', 'see_availability', 'see_availability');
?>