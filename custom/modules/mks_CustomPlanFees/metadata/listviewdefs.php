<?php
$module_name = 'mks_CustomPlanFees';
$listViewDefs [$module_name] = 
array (
  'MKS_CUSTOMPAYMENTPLAN_MKS_CUSTOMPLANFEES_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MKS_CUSTOMPAYMENTPLAN_MKS_CUSTOMPLANFEES_FROM_MKS_CUSTOMPAYMENTPLAN_TITLE',
    'id' => 'MKS_CUSTOMED0DENTPLAN_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'N_FEE_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_N_FEE',
    'width' => '10%',
  ),
  'AMOUNT' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_AMOUNT',
    'width' => '10%',
    'default' => true,
  ),
  'EXPIRATION' => 
  array (
    'type' => 'date',
    'label' => 'LBL_EXPIRATION',
    'width' => '10%',
    'default' => true,
  ),
  'PAYMENT_STATUS_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_PAYMENT_STATUS',
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
