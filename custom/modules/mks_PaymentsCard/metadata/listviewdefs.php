<?php
$module_name = 'mks_PaymentsCard';
$listViewDefs [$module_name] = 
array (
  'CARD_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_CARD',
    'width' => '10%',
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
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
