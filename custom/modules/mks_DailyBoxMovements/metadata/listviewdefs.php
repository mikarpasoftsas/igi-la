<?php
$module_name = 'mks_DailyBoxMovements';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'BALANCE_C' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_BALANCE_C',
    'currency_format' => true,
    'width' => '10%',
  ),
  'DATE_BOX_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_DATE_BOX',
    'width' => '20%',
  ),
  'BOX_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_BOX',
    'id' => 'MKS_BOX_ID_C',
    'link' => true,
    'width' => '30%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '5%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
);
;
?>
