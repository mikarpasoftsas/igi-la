<?php
// created: 2018-11-01 22:32:57
$dictionary["mks_DiscountRules"]["fields"]["mks_paymentplan_mks_discountrules"] = array (
  'name' => 'mks_paymentplan_mks_discountrules',
  'type' => 'link',
  'relationship' => 'mks_paymentplan_mks_discountrules',
  'source' => 'non-db',
  'module' => 'mks_PaymentPlan',
  'bean_name' => 'mks_PaymentPlan',
  'vname' => 'LBL_MKS_PAYMENTPLAN_MKS_DISCOUNTRULES_FROM_MKS_PAYMENTPLAN_TITLE',
  'id_name' => 'mks_paymentplan_mks_discountrulesmks_paymentplan_ida',
);
$dictionary["mks_DiscountRules"]["fields"]["mks_paymentplan_mks_discountrules_name"] = array (
  'name' => 'mks_paymentplan_mks_discountrules_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_PAYMENTPLAN_MKS_DISCOUNTRULES_FROM_MKS_PAYMENTPLAN_TITLE',
  'save' => true,
  'id_name' => 'mks_paymentplan_mks_discountrulesmks_paymentplan_ida',
  'link' => 'mks_paymentplan_mks_discountrules',
  'table' => 'mks_paymentplan',
  'module' => 'mks_PaymentPlan',
  'rname' => 'name',
);
$dictionary["mks_DiscountRules"]["fields"]["mks_paymentplan_mks_discountrulesmks_paymentplan_ida"] = array (
  'name' => 'mks_paymentplan_mks_discountrulesmks_paymentplan_ida',
  'type' => 'link',
  'relationship' => 'mks_paymentplan_mks_discountrules',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_PAYMENTPLAN_MKS_DISCOUNTRULES_FROM_MKS_DISCOUNTRULES_TITLE',
);
