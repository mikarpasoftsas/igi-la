<?php
$module_name = 'mks_PaymentsCash';
$listViewDefs [$module_name] = 
array (
  'MKS_BOX_MKS_PAYMENTSCASH_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MKS_BOX_MKS_PAYMENTSCASH_1_FROM_MKS_BOX_TITLE',
    'id' => 'MKS_BOX_MKS_PAYMENTSCASH_1MKS_BOX_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'MKS_REGISTRATIONRECEIPTS_MKS_PAYMENTSCASH_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_PAYMENTSCASH_1_FROM_MKS_REGISTRATIONRECEIPTS_TITLE',
    'id' => 'MKS_REGIST1C49ECEIPTS_IDA',
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
