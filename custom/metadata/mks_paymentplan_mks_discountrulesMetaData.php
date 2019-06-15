<?php
// created: 2018-11-01 22:32:57
$dictionary["mks_paymentplan_mks_discountrules"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'mks_paymentplan_mks_discountrules' => 
    array (
      'lhs_module' => 'mks_PaymentPlan',
      'lhs_table' => 'mks_paymentplan',
      'lhs_key' => 'id',
      'rhs_module' => 'mks_DiscountRules',
      'rhs_table' => 'mks_discountrules',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mks_paymentplan_mks_discountrules_c',
      'join_key_lhs' => 'mks_paymentplan_mks_discountrulesmks_paymentplan_ida',
      'join_key_rhs' => 'mks_paymentplan_mks_discountrulesmks_discountrules_idb',
    ),
  ),
  'table' => 'mks_paymentplan_mks_discountrules_c',
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
      'name' => 'mks_paymentplan_mks_discountrulesmks_paymentplan_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mks_paymentplan_mks_discountrulesmks_discountrules_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mks_paymentplan_mks_discountrulesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mks_paymentplan_mks_discountrules_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mks_paymentplan_mks_discountrulesmks_paymentplan_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'mks_paymentplan_mks_discountrules_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mks_paymentplan_mks_discountrulesmks_discountrules_idb',
      ),
    ),
  ),
);