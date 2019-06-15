<?php
// created: 2018-11-01 22:42:13
$dictionary["mks_custompaymentplan_mks_customplanfees"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'mks_custompaymentplan_mks_customplanfees' => 
    array (
      'lhs_module' => 'mks_CustomPaymentPlan',
      'lhs_table' => 'mks_custompaymentplan',
      'lhs_key' => 'id',
      'rhs_module' => 'mks_CustomPlanFees',
      'rhs_table' => 'mks_customplanfees',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mks_custompaymentplan_mks_customplanfees_c',
      'join_key_lhs' => 'mks_customed0dentplan_ida',
      'join_key_rhs' => 'mks_custompaymentplan_mks_customplanfeesmks_customplanfees_idb',
    ),
  ),
  'table' => 'mks_custompaymentplan_mks_customplanfees_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'mks_customed0dentplan_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mks_custompaymentplan_mks_customplanfeesmks_customplanfees_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mks_custompaymentplan_mks_customplanfeesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mks_custompaymentplan_mks_customplanfees_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mks_customed0dentplan_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'mks_custompaymentplan_mks_customplanfees_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mks_custompaymentplan_mks_customplanfeesmks_customplanfees_idb',
      ),
    ),
  ),
);