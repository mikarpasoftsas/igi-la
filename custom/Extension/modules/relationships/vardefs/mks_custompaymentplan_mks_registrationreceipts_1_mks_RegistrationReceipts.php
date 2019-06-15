<?php
// created: 2019-02-25 17:08:16
$dictionary["mks_RegistrationReceipts"]["fields"]["mks_custompaymentplan_mks_registrationreceipts_1"] = array (
  'name' => 'mks_custompaymentplan_mks_registrationreceipts_1',
  'type' => 'link',
  'relationship' => 'mks_custompaymentplan_mks_registrationreceipts_1',
  'source' => 'non-db',
  'module' => 'mks_CustomPaymentPlan',
  'bean_name' => 'mks_CustomPaymentPlan',
  'vname' => 'LBL_MKS_CUSTOMPAYMENTPLAN_MKS_REGISTRATIONRECEIPTS_1_FROM_MKS_CUSTOMPAYMENTPLAN_TITLE',
  'id_name' => 'mks_custom8555entplan_ida',
);
$dictionary["mks_RegistrationReceipts"]["fields"]["mks_custompaymentplan_mks_registrationreceipts_1_name"] = array (
  'name' => 'mks_custompaymentplan_mks_registrationreceipts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_CUSTOMPAYMENTPLAN_MKS_REGISTRATIONRECEIPTS_1_FROM_MKS_CUSTOMPAYMENTPLAN_TITLE',
  'save' => true,
  'id_name' => 'mks_custom8555entplan_ida',
  'link' => 'mks_custompaymentplan_mks_registrationreceipts_1',
  'table' => 'mks_custompaymentplan',
  'module' => 'mks_CustomPaymentPlan',
  'rname' => 'name',
);
$dictionary["mks_RegistrationReceipts"]["fields"]["mks_custom8555entplan_ida"] = array (
  'name' => 'mks_custom8555entplan_ida',
  'type' => 'link',
  'relationship' => 'mks_custompaymentplan_mks_registrationreceipts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_CUSTOMPAYMENTPLAN_MKS_REGISTRATIONRECEIPTS_1_FROM_MKS_REGISTRATIONRECEIPTS_TITLE',
);
