<?php
$module_name = 'mks_Courses';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'THEORY' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_THEORY',
    'width' => '10%',
  ),
  'PRACTICE' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_PRACTICE',
    'width' => '10%',
  ),
  'TYPE_COURSE' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TYPE_COURSE',
    'width' => '10%',
    'default' => true,
  ),
  'STATUS_COURSE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS_COURSE',
    'width' => '10%',
  ),
  'NUMBER_CLASSES' => 
  array (
    'type' => 'int',
    'label' => 'LBL_NUMBER_CLASSES',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
);
;
?>
