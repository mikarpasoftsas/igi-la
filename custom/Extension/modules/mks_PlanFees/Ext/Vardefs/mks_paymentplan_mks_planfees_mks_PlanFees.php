<?php
// created: 2018-11-01 22:32:57
$dictionary["mks_PlanFees"]["fields"]["mks_paymentplan_mks_planfees"] = array (
  'name' => 'mks_paymentplan_mks_planfees',
  'type' => 'link',
  'relationship' => 'mks_paymentplan_mks_planfees',
  'source' => 'non-db',
  'module' => 'mks_PaymentPlan',
  'bean_name' => 'mks_PaymentPlan',
  'vname' => 'LBL_MKS_PAYMENTPLAN_MKS_PLANFEES_FROM_MKS_PAYMENTPLAN_TITLE',
  'id_name' => 'mks_paymentplan_mks_planfeesmks_paymentplan_ida',
);
$dictionary["mks_PlanFees"]["fields"]["mks_paymentplan_mks_planfees_name"] = array (
  'name' => 'mks_paymentplan_mks_planfees_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_PAYMENTPLAN_MKS_PLANFEES_FROM_MKS_PAYMENTPLAN_TITLE',
  'save' => true,
  'id_name' => 'mks_paymentplan_mks_planfeesmks_paymentplan_ida',
  'link' => 'mks_paymentplan_mks_planfees',
  'table' => 'mks_paymentplan',
  'module' => 'mks_PaymentPlan',
  'rname' => 'name',
);
$dictionary["mks_PlanFees"]["fields"]["mks_paymentplan_mks_planfeesmks_paymentplan_ida"] = array (
  'name' => 'mks_paymentplan_mks_planfeesmks_paymentplan_ida',
  'type' => 'link',
  'relationship' => 'mks_paymentplan_mks_planfees',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_PAYMENTPLAN_MKS_PLANFEES_FROM_MKS_PLANFEES_TITLE',
);
