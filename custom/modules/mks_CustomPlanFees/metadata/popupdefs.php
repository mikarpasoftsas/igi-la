<?php
$popupMeta = array (
    'moduleMain' => 'mks_CustomPlanFees',
    'varName' => 'mks_CustomPlanFees',
    'orderBy' => 'mks_customplanfees.name',
    'whereClauses' => array (
  'name' => 'mks_customplanfees.name',
  'mks_custompaymentplan_mks_customplanfees_name' => 'mks_customplanfees.mks_custompaymentplan_mks_customplanfees_name',
  'payment_status_c' => 'mks_customplanfees_cstm.payment_status_c',
  'assigned_user_id' => 'mks_customplanfees.assigned_user_id',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'mks_custompaymentplan_mks_customplanfees_name',
  5 => 'payment_status_c',
  6 => 'assigned_user_id',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'mks_custompaymentplan_mks_customplanfees_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MKS_CUSTOMPAYMENTPLAN_MKS_CUSTOMPLANFEES_FROM_MKS_CUSTOMPAYMENTPLAN_TITLE',
    'id' => 'MKS_CUSTOMED0DENTPLAN_IDA',
    'width' => '10%',
    'name' => 'mks_custompaymentplan_mks_customplanfees_name',
  ),
  'payment_status_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PAYMENT_STATUS',
    'width' => '10%',
    'name' => 'payment_status_c',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'label' => 'LBL_ASSIGNED_TO',
    'type' => 'enum',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => '10%',
  ),
),
);
