<?php
$module_name = 'mks_Refinances';
$listViewDefs [$module_name] = 
array (
  'ID_AUTOINCREMENT' => 
  array (
    'type' => 'autoincrement',
    'label' => 'LBL_ID_AUTOINCREMENT',
    'width' => '10%',
    'default' => true,
  ),
  'DEBT' => 
  array (
    'type' => 'float',
    'default' => true,
    'label' => 'LBL_DEBT',
    'width' => '10%',
  ),
  'SURCHARGE' => 
  array (
    'type' => 'float',
    'default' => true,
    'label' => 'LBL_SURCHARGE',
    'width' => '10%',
  ),
  'DISCOUNT' => 
  array (
    'type' => 'float',
    'default' => true,
    'label' => 'LBL_DISCOUNT',
    'width' => '10%',
  ),
  'TOTAL_DEBT' => 
  array (
    'type' => 'float',
    'default' => true,
    'label' => 'LBL_TOTAL_DEBT',
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
);
;
?>
