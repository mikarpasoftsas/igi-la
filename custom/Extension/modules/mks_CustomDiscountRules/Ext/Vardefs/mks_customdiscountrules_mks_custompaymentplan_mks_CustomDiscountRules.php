<?php
// created: 2018-11-01 22:42:26
$dictionary["mks_CustomDiscountRules"]["fields"]["mks_customdiscountrules_mks_custompaymentplan"] = array (
  'name' => 'mks_customdiscountrules_mks_custompaymentplan',
  'type' => 'link',
  'relationship' => 'mks_customdiscountrules_mks_custompaymentplan',
  'source' => 'non-db',
  'module' => 'mks_CustomPaymentPlan',
  'bean_name' => 'mks_CustomPaymentPlan',
  'vname' => 'LBL_MKS_CUSTOMDISCOUNTRULES_MKS_CUSTOMPAYMENTPLAN_FROM_MKS_CUSTOMPAYMENTPLAN_TITLE',
  'id_name' => 'mks_custom2713entplan_ida',
);
$dictionary["mks_CustomDiscountRules"]["fields"]["mks_customdiscountrules_mks_custompaymentplan_name"] = array (
  'name' => 'mks_customdiscountrules_mks_custompaymentplan_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_CUSTOMDISCOUNTRULES_MKS_CUSTOMPAYMENTPLAN_FROM_MKS_CUSTOMPAYMENTPLAN_TITLE',
  'save' => true,
  'id_name' => 'mks_custom2713entplan_ida',
  'link' => 'mks_customdiscountrules_mks_custompaymentplan',
  'table' => 'mks_custompaymentplan',
  'module' => 'mks_CustomPaymentPlan',
  'rname' => 'name',
);
$dictionary["mks_CustomDiscountRules"]["fields"]["mks_custom2713entplan_ida"] = array (
  'name' => 'mks_custom2713entplan_ida',
  'type' => 'link',
  'relationship' => 'mks_customdiscountrules_mks_custompaymentplan',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_CUSTOMDISCOUNTRULES_MKS_CUSTOMPAYMENTPLAN_FROM_MKS_CUSTOMDISCOUNTRULES_TITLE',
);
