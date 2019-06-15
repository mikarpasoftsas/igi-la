<?php
$popupMeta = array (
    'moduleMain' => 'mks_Defaulters',
    'varName' => 'mks_Defaulters',
    'orderBy' => 'mks_defaulters.name',
    'whereClauses' => array (
  'registration_c' => 'mks_defaulters.registration_c',
  'teacher_c' => 'mks_defaulters.teacher_c',
  'group_students_c' => 'mks_defaulters.group_students_c',
  'student_c' => 'mks_defaulters.student_c',
  'assigned_user_id' => 'mks_defaulters.assigned_user_id',
),
    'searchInputs' => array (
  4 => 'registration_c',
  5 => 'teacher_c',
  6 => 'group_students_c',
  7 => 'student_c',
  8 => 'assigned_user_id',
),
    'searchdefs' => array (
  'registration_c' => 
  array (
    'type' => 'relate',
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
    'width' => '10%',
  ),
),
    'listviewdefs' => array (
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'description',
  ),
  'STUDENT_C' => 
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
  'TELEPHONE_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_TELEPHONE',
    'width' => '10%',
    'name' => 'telephone_c',
  ),
  'REGISTRATION_C' => 
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
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
  'TEACHER_C' => 
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
  'GROUP_STUDENTS_C' => 
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
  'BALANCE_C' => 
  array (
    'type' => 'float',
    'default' => true,
    'label' => 'LBL_BALANCE',
    'width' => '10%',
    'name' => 'balance_c',
  ),
  'AMOUNT_FEES_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_AMOUNT_FEES',
    'width' => '10%',
    'name' => 'amount_fees_c',
  ),
  'CLASSES_WITHOUT_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_CLASSES_WITHOUT',
    'width' => '10%',
    'name' => 'classes_without_c',
  ),
),
);
