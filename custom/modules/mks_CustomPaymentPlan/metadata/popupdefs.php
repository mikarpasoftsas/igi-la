<?php
$popupMeta = array (
    'moduleMain' => 'mks_CustomPaymentPlan',
    'varName' => 'mks_CustomPaymentPlan',
    'orderBy' => 'mks_custompaymentplan.name',
    'whereClauses' => array (
  'name' => 'mks_custompaymentplan.name',
  'id_autoincrement' => 'mks_custompaymentplan.id_autoincrement',
  'assigned_user_id' => 'mks_custompaymentplan.assigned_user_id',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'id_autoincrement',
  5 => 'assigned_user_id',
),
    'searchdefs' => array (
  'id_autoincrement' => 
  array (
    'type' => 'autoincrement',
    'label' => 'LBL_ID_AUTOINCREMENT',
    'width' => '10%',
    'name' => 'id_autoincrement',
  ),
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
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
