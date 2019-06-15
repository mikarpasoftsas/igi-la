<?php
$module_name = 'mks_PaymentsTransfer';
$listViewDefs [$module_name] = 
array (
  'MKS_REGISTRATIONRECEIPTS_MKS_PAYMENTSTRANSFER_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_PAYMENTSTRANSFER_1_FROM_MKS_REGISTRATIONRECEIPTS_TITLE',
    'id' => 'MKS_REGIST09E2ECEIPTS_IDA',
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
  'AMOUNT_C' => 
  array (
    'type' => 'float',
    'default' => true,
    'label' => 'LBL_AMOUNT',
    'width' => '10%',
  ),
  'EXCHANGE_RATE_C' => 
  array (
    'type' => 'float',
    'default' => true,
    'label' => 'LBL_EXCHANGE_RATE',
    'width' => '10%',
  ),
  'MKS_BOX_MKS_PAYMENTSTRANSFER_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MKS_BOX_MKS_PAYMENTSTRANSFER_1_FROM_MKS_BOX_TITLE',
    'id' => 'MKS_BOX_MKS_PAYMENTSTRANSFER_1MKS_BOX_IDA',
    'width' => '10%',
    'default' => true,
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
