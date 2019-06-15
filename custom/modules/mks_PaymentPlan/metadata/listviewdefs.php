<?php
$module_name = 'mks_PaymentPlan';
$listViewDefs [$module_name] = 
array (
  'ID_AUTOINCREMENT' => 
  array (
    'type' => 'autoincrement',
    'label' => 'LBL_ID_AUTOINCREMENT',
    'width' => '10%',
    'default' => true,
    'link' => true,
  ),
  'NAME' => 
  array (
    'width' => '25%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'MKS_PAYMENTPLAN_MKS_COURSES_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MKS_PAYMENTPLAN_MKS_COURSES_FROM_MKS_COURSES_TITLE',
    'id' => 'MKS_PAYMENTPLAN_MKS_COURSESMKS_COURSES_IDA',
    'width' => '25%',
    'default' => true,
  ),
  'AMOUNT' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_AMOUNT',
    'width' => '20%',
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
