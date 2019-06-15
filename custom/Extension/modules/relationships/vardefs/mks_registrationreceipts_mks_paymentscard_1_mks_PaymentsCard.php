<?php
// created: 2019-02-25 17:03:52
$dictionary["mks_PaymentsCard"]["fields"]["mks_registrationreceipts_mks_paymentscard_1"] = array (
  'name' => 'mks_registrationreceipts_mks_paymentscard_1',
  'type' => 'link',
  'relationship' => 'mks_registrationreceipts_mks_paymentscard_1',
  'source' => 'non-db',
  'module' => 'mks_RegistrationReceipts',
  'bean_name' => 'mks_RegistrationReceipts',
  'vname' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_PAYMENTSCARD_1_FROM_MKS_REGISTRATIONRECEIPTS_TITLE',
  'id_name' => 'mks_registfefbeceipts_ida',
);
$dictionary["mks_PaymentsCard"]["fields"]["mks_registrationreceipts_mks_paymentscard_1_name"] = array (
  'name' => 'mks_registrationreceipts_mks_paymentscard_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_PAYMENTSCARD_1_FROM_MKS_REGISTRATIONRECEIPTS_TITLE',
  'save' => true,
  'id_name' => 'mks_registfefbeceipts_ida',
  'link' => 'mks_registrationreceipts_mks_paymentscard_1',
  'table' => 'mks_registrationreceipts',
  'module' => 'mks_RegistrationReceipts',
  'rname' => 'name',
);
$dictionary["mks_PaymentsCard"]["fields"]["mks_registfefbeceipts_ida"] = array (
  'name' => 'mks_registfefbeceipts_ida',
  'type' => 'link',
  'relationship' => 'mks_registrationreceipts_mks_paymentscard_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_PAYMENTSCARD_1_FROM_MKS_PAYMENTSCARD_TITLE',
);
