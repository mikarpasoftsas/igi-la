<?php
// created: 2019-02-25 17:03:03
$dictionary["mks_PaymentsCash"]["fields"]["mks_registrationreceipts_mks_paymentscash_1"] = array (
  'name' => 'mks_registrationreceipts_mks_paymentscash_1',
  'type' => 'link',
  'relationship' => 'mks_registrationreceipts_mks_paymentscash_1',
  'source' => 'non-db',
  'module' => 'mks_RegistrationReceipts',
  'bean_name' => 'mks_RegistrationReceipts',
  'vname' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_PAYMENTSCASH_1_FROM_MKS_REGISTRATIONRECEIPTS_TITLE',
  'id_name' => 'mks_regist1c49eceipts_ida',
);
$dictionary["mks_PaymentsCash"]["fields"]["mks_registrationreceipts_mks_paymentscash_1_name"] = array (
  'name' => 'mks_registrationreceipts_mks_paymentscash_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_PAYMENTSCASH_1_FROM_MKS_REGISTRATIONRECEIPTS_TITLE',
  'save' => true,
  'id_name' => 'mks_regist1c49eceipts_ida',
  'link' => 'mks_registrationreceipts_mks_paymentscash_1',
  'table' => 'mks_registrationreceipts',
  'module' => 'mks_RegistrationReceipts',
  'rname' => 'name',
);
$dictionary["mks_PaymentsCash"]["fields"]["mks_regist1c49eceipts_ida"] = array (
  'name' => 'mks_regist1c49eceipts_ida',
  'type' => 'link',
  'relationship' => 'mks_registrationreceipts_mks_paymentscash_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_PAYMENTSCASH_1_FROM_MKS_PAYMENTSCASH_TITLE',
);
