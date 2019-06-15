<?php
$module_name = 'mks_GroupSchedule';
$listViewDefs [$module_name] = 
array (
  'ID_AUTOINCREMENT' => 
  array (
    'type' => 'autoincrement',
    'label' => 'LBL_ID_AUTOINCREMENT',
    'width' => '10%',
    'default' => true,
	'link'=>true,
  ),
  'DAY' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_DAY',
    'width' => '10%',
    'default' => true,
  ),
  'START_TIME' => 
  array (
    'type' => 'int',
    'label' => 'LBL_START_TIME',
    'width' => '10%',
    'default' => true,
  ),
  'END_TIME' => 
  array (
    'type' => 'int',
    'label' => 'LBL_END_TIME',
    'width' => '10%',
    'default' => true,
  ),
  'CLASSROOM' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_CLASSROOM',
    'id' => 'MKS_CLASSROOM_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => false,
    'link' => true,
  ),
);
;
?>
