<?php
$module_name = 'mks_Defaulters';
$listViewDefs [$module_name] = 
array (
  'LAST_ACTION_C' => 
  array (
    'type' => 'datetimecombo',
    'default' => true,
    'label' => 'LBL_LAST_ACTION_C',
    'width' => '10%',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
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
  ),
  'TELEPHONE_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_TELEPHONE',
    'width' => '10%',
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
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
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
  ),
  'BALANCE_C' => 
  array (
    'type' => 'float',
    'default' => true,
    'label' => 'LBL_BALANCE',
    'width' => '10%',
  ),
  'AMOUNT_FEES_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_AMOUNT_FEES',
    'width' => '10%',
  ),
  'CLASSES_WITHOUT_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_CLASSES_WITHOUT',
    'width' => '10%',
  ),
);
;
?>
