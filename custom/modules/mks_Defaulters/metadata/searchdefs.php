<?php
$module_name = 'mks_Defaulters';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'last_action_c' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_LAST_ACTION',
        'width' => '10%',
        'name' => 'last_action_c',
      ),
      'registration_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_REGISTRATION',
        'id' => 'MKS_REGISTRATION_ID_C',
        'link' => true,
        'width' => '10%',
        'name' => 'registration_c',
      ),
      'teacher_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TEACHER',
        'id' => 'MKS_TEACHER_ID_C',
        'link' => true,
        'width' => '10%',
        'name' => 'teacher_c',
      ),
      'group_students_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_GROUP_STUDENTS',
        'id' => 'MKS_ACADEMICGROUPS_ID_C',
        'link' => true,
        'width' => '10%',
        'name' => 'group_students_c',
      ),
      'student_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_STUDENT',
        'id' => 'ACCOUNT_ID_C',
        'link' => true,
        'width' => '10%',
        'name' => 'student_c',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'registration_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_REGISTRATION',
        'link' => true,
        'width' => '10%',
        'id' => 'MKS_REGISTRATION_ID_C',
        'name' => 'registration_c',
      ),
      'teacher_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TEACHER',
        'link' => true,
        'width' => '10%',
        'id' => 'MKS_TEACHER_ID_C',
        'name' => 'teacher_c',
      ),
      'group_students_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_GROUP_STUDENTS',
        'link' => true,
        'width' => '10%',
        'id' => 'MKS_ACADEMICGROUPS_ID_C',
        'name' => 'group_students_c',
      ),
      'student_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_STUDENT',
        'link' => true,
        'width' => '10%',
        'id' => 'ACCOUNT_ID_C',
        'name' => 'student_c',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
