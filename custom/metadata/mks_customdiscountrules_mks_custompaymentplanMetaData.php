<?php
// created: 2018-11-01 22:42:26
$dictionary["mks_customdiscountrules_mks_custompaymentplan"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'mks_customdiscountrules_mks_custompaymentplan' => 
    array (
      'lhs_module' => 'mks_CustomPaymentPlan',
      'lhs_table' => 'mks_custompaymentplan',
      'lhs_key' => 'id',
      'rhs_module' => 'mks_CustomDiscountRules',
      'rhs_table' => 'mks_customdiscountrules',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mks_customdiscountrules_mks_custompaymentplan_c',
      'join_key_lhs' => 'mks_custom2713entplan_ida',
      'join_key_rhs' => 'mks_custom34c2ntrules_idb',
    ),
  ),
  'table' => 'mks_customdiscountrules_mks_custompaymentplan_c',
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
      'name' => 'mks_custom2713entplan_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mks_custom34c2ntrules_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mks_customdiscountrules_mks_custompaymentplanspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mks_customdiscountrules_mks_custompaymentplan_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mks_custom2713entplan_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'mks_customdiscountrules_mks_custompaymentplan_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mks_custom34c2ntrules_idb',
      ),
    ),
  ),
);