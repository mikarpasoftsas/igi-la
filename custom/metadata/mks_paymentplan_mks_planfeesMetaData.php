<?php
// created: 2018-11-01 22:32:57
$dictionary["mks_paymentplan_mks_planfees"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'mks_paymentplan_mks_planfees' => 
    array (
      'lhs_module' => 'mks_PaymentPlan',
      'lhs_table' => 'mks_paymentplan',
      'lhs_key' => 'id',
      'rhs_module' => 'mks_PlanFees',
      'rhs_table' => 'mks_planfees',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mks_paymentplan_mks_planfees_c',
      'join_key_lhs' => 'mks_paymentplan_mks_planfeesmks_paymentplan_ida',
      'join_key_rhs' => 'mks_paymentplan_mks_planfeesmks_planfees_idb',
    ),
  ),
  'table' => 'mks_paymentplan_mks_planfees_c',
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
      'name' => 'mks_paymentplan_mks_planfeesmks_paymentplan_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mks_paymentplan_mks_planfeesmks_planfees_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mks_paymentplan_mks_planfeesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mks_paymentplan_mks_planfees_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mks_paymentplan_mks_planfeesmks_paymentplan_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'mks_paymentplan_mks_planfees_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mks_paymentplan_mks_planfeesmks_planfees_idb',
      ),
    ),
  ),
);