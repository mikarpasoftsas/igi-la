<?php
$module_name = 'mks_PlanFees';
$listViewDefs [$module_name] = 
array (
  'MKS_PAYMENTPLAN_MKS_PLANFEES_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MKS_PAYMENTPLAN_MKS_PLANFEES_FROM_MKS_PAYMENTPLAN_TITLE',
    'id' => 'MKS_PAYMENTPLAN_MKS_PLANFEESMKS_PAYMENTPLAN_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'AMOUNT' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_AMOUNT',
    'width' => '10%',
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
