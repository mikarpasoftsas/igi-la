<?php
$module_name = 'mks_PaymentsCheck';
$listViewDefs [$module_name] = 
array (
  'CHECK_NUMBER_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_CHECK_NUMBER',
    'width' => '10%',
  ),
  'MKS_BANK_MKS_PAYMENTSCHECK_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MKS_BANK_MKS_PAYMENTSCHECK_1_FROM_MKS_BANK_TITLE',
    'id' => 'MKS_BANK_MKS_PAYMENTSCHECK_1MKS_BANK_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'PAYMENT_DATE_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_PAYMENT_DATE',
    'width' => '10%',
  ),
  'MKS_REGISTRATIONRECEIPTS_MKS_PAYMENTSCHECK_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_PAYMENTSCHECK_1_FROM_MKS_REGISTRATIONRECEIPTS_TITLE',
    'id' => 'MKS_REGISTA5A7ECEIPTS_IDA',
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
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
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
