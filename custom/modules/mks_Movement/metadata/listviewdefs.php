<?php
$module_name = 'mks_Movement';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'DATE_MOVEMENT' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_MOVEMENT',
    'width' => '10%',
    'default' => true,
  ),
  'ORIGIN_BOX' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ORIGIN_BOX',
    'id' => 'MKS_BOX_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'DESTINATION_BOX' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_DESTINATION_BOX',
    'id' => 'MKS_BOX_ID1_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'AMOUNT' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'CURRENCY_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CURRENCY',
    'width' => '10%',
  ),
  'TYPE_INCOME' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TYPE_INCOME',
    'width' => '10%',
    'default' => true,
  ),
  'WAY_PAY' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_WAY_PAY',
    'width' => '10%',
  ),
  'MOVTYPE' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_MOVTYPE',
    'id' => 'MKS_MOVEMENTTYPE_ID_C',
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
    'default' => true,
  ),
);
;
?>
