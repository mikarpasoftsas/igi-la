<?php
// created: 2019-02-26 20:00:43
$dictionary["mks_bank_mks_paymentscheck_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'mks_bank_mks_paymentscheck_1' => 
    array (
      'lhs_module' => 'mks_Bank',
      'lhs_table' => 'mks_bank',
      'lhs_key' => 'id',
      'rhs_module' => 'mks_PaymentsCheck',
      'rhs_table' => 'mks_paymentscheck',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mks_bank_mks_paymentscheck_1_c',
      'join_key_lhs' => 'mks_bank_mks_paymentscheck_1mks_bank_ida',
      'join_key_rhs' => 'mks_bank_mks_paymentscheck_1mks_paymentscheck_idb',
    ),
  ),
  'table' => 'mks_bank_mks_paymentscheck_1_c',
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
      'name' => 'mks_bank_mks_paymentscheck_1mks_bank_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mks_bank_mks_paymentscheck_1mks_paymentscheck_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mks_bank_mks_paymentscheck_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mks_bank_mks_paymentscheck_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mks_bank_mks_paymentscheck_1mks_bank_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'mks_bank_mks_paymentscheck_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mks_bank_mks_paymentscheck_1mks_paymentscheck_idb',
      ),
    ),
  ),
);