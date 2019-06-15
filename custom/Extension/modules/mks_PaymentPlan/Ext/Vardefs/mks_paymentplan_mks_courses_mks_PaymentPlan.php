<?php
// created: 2018-11-01 22:32:57
$dictionary["mks_PaymentPlan"]["fields"]["mks_paymentplan_mks_courses"] = array (
  'name' => 'mks_paymentplan_mks_courses',
  'type' => 'link',
  'relationship' => 'mks_paymentplan_mks_courses',
  'source' => 'non-db',
  'module' => 'mks_Courses',
  'bean_name' => 'mks_Courses',
  'vname' => 'LBL_MKS_PAYMENTPLAN_MKS_COURSES_FROM_MKS_COURSES_TITLE',
  'id_name' => 'mks_paymentplan_mks_coursesmks_courses_ida',
);
$dictionary["mks_PaymentPlan"]["fields"]["mks_paymentplan_mks_courses_name"] = array (
  'name' => 'mks_paymentplan_mks_courses_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_PAYMENTPLAN_MKS_COURSES_FROM_MKS_COURSES_TITLE',
  'save' => true,
  'id_name' => 'mks_paymentplan_mks_coursesmks_courses_ida',
  'link' => 'mks_paymentplan_mks_courses',
  'table' => 'mks_courses',
  'module' => 'mks_Courses',
  'rname' => 'name',
);
$dictionary["mks_PaymentPlan"]["fields"]["mks_paymentplan_mks_coursesmks_courses_ida"] = array (
  'name' => 'mks_paymentplan_mks_coursesmks_courses_ida',
  'type' => 'link',
  'relationship' => 'mks_paymentplan_mks_courses',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_PAYMENTPLAN_MKS_COURSES_FROM_MKS_PAYMENTPLAN_TITLE',
);
