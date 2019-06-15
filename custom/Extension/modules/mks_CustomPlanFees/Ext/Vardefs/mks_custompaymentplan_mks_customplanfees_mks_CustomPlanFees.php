<?php
// created: 2018-11-01 22:42:13
$dictionary["mks_CustomPlanFees"]["fields"]["mks_custompaymentplan_mks_customplanfees"] = array (
  'name' => 'mks_custompaymentplan_mks_customplanfees',
  'type' => 'link',
  'relationship' => 'mks_custompaymentplan_mks_customplanfees',
  'source' => 'non-db',
  'module' => 'mks_CustomPaymentPlan',
  'bean_name' => 'mks_CustomPaymentPlan',
  'vname' => 'LBL_MKS_CUSTOMPAYMENTPLAN_MKS_CUSTOMPLANFEES_FROM_MKS_CUSTOMPAYMENTPLAN_TITLE',
  'id_name' => 'mks_customed0dentplan_ida',
);
$dictionary["mks_CustomPlanFees"]["fields"]["mks_custompaymentplan_mks_customplanfees_name"] = array (
  'name' => 'mks_custompaymentplan_mks_customplanfees_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_CUSTOMPAYMENTPLAN_MKS_CUSTOMPLANFEES_FROM_MKS_CUSTOMPAYMENTPLAN_TITLE',
  'save' => true,
  'id_name' => 'mks_customed0dentplan_ida',
  'link' => 'mks_custompaymentplan_mks_customplanfees',
  'table' => 'mks_custompaymentplan',
  'module' => 'mks_CustomPaymentPlan',
  'rname' => 'name',
);
$dictionary["mks_CustomPlanFees"]["fields"]["mks_customed0dentplan_ida"] = array (
  'name' => 'mks_customed0dentplan_ida',
  'type' => 'link',
  'relationship' => 'mks_custompaymentplan_mks_customplanfees',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_CUSTOMPAYMENTPLAN_MKS_CUSTOMPLANFEES_FROM_MKS_CUSTOMPLANFEES_TITLE',
);
