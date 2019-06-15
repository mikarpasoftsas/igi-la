<?php
// created: 2019-02-26 20:00:43
$dictionary["mks_PaymentsCheck"]["fields"]["mks_bank_mks_paymentscheck_1"] = array (
  'name' => 'mks_bank_mks_paymentscheck_1',
  'type' => 'link',
  'relationship' => 'mks_bank_mks_paymentscheck_1',
  'source' => 'non-db',
  'module' => 'mks_Bank',
  'bean_name' => 'mks_Bank',
  'vname' => 'LBL_MKS_BANK_MKS_PAYMENTSCHECK_1_FROM_MKS_BANK_TITLE',
  'id_name' => 'mks_bank_mks_paymentscheck_1mks_bank_ida',
);
$dictionary["mks_PaymentsCheck"]["fields"]["mks_bank_mks_paymentscheck_1_name"] = array (
  'name' => 'mks_bank_mks_paymentscheck_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_BANK_MKS_PAYMENTSCHECK_1_FROM_MKS_BANK_TITLE',
  'save' => true,
  'id_name' => 'mks_bank_mks_paymentscheck_1mks_bank_ida',
  'link' => 'mks_bank_mks_paymentscheck_1',
  'table' => 'mks_bank',
  'module' => 'mks_Bank',
  'rname' => 'name',
);
$dictionary["mks_PaymentsCheck"]["fields"]["mks_bank_mks_paymentscheck_1mks_bank_ida"] = array (
  'name' => 'mks_bank_mks_paymentscheck_1mks_bank_ida',
  'type' => 'link',
  'relationship' => 'mks_bank_mks_paymentscheck_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_BANK_MKS_PAYMENTSCHECK_1_FROM_MKS_PAYMENTSCHECK_TITLE',
);
