<?php
$module_name = 'mks_Articles';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'CURRENCY_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CURRENCY',
    'width' => '10%',
  ),
  'AMOUNT_C' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_AMOUNT',
    'width' => '10%',
	'currency_format' => true,
  ),
  'EXCHANGE_RATE_C' => 
  array (
    'type' => 'float',
    'default' => true,
    'label' => 'LBL_EXCHANGE_RATE_C',
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
