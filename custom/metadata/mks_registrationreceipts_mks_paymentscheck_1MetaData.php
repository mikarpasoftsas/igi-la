<?php
// created: 2019-02-25 17:03:35
$dictionary["mks_registrationreceipts_mks_paymentscheck_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'mks_registrationreceipts_mks_paymentscheck_1' => 
    array (
      'lhs_module' => 'mks_RegistrationReceipts',
      'lhs_table' => 'mks_registrationreceipts',
      'lhs_key' => 'id',
      'rhs_module' => 'mks_PaymentsCheck',
      'rhs_table' => 'mks_paymentscheck',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mks_registrationreceipts_mks_paymentscheck_1_c',
      'join_key_lhs' => 'mks_regista5a7eceipts_ida',
      'join_key_rhs' => 'mks_registf5b2tscheck_idb',
    ),
  ),
  'table' => 'mks_registrationreceipts_mks_paymentscheck_1_c',
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
      'name' => 'mks_regista5a7eceipts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mks_registf5b2tscheck_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mks_registrationreceipts_mks_paymentscheck_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mks_registrationreceipts_mks_paymentscheck_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mks_regista5a7eceipts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'mks_registrationreceipts_mks_paymentscheck_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mks_registf5b2tscheck_idb',
      ),
    ),
  ),
);