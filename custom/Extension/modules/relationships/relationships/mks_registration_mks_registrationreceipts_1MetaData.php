<?php
// created: 2019-02-25 16:59:06
$dictionary["mks_registration_mks_registrationreceipts_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'mks_registration_mks_registrationreceipts_1' => 
    array (
      'lhs_module' => 'mks_Registration',
      'lhs_table' => 'mks_registration',
      'lhs_key' => 'id',
      'rhs_module' => 'mks_RegistrationReceipts',
      'rhs_table' => 'mks_registrationreceipts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mks_registration_mks_registrationreceipts_1_c',
      'join_key_lhs' => 'mks_registration_mks_registrationreceipts_1mks_registration_ida',
      'join_key_rhs' => 'mks_regist608feceipts_idb',
    ),
  ),
  'table' => 'mks_registration_mks_registrationreceipts_1_c',
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
      'name' => 'mks_registration_mks_registrationreceipts_1mks_registration_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mks_regist608feceipts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mks_registration_mks_registrationreceipts_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mks_registration_mks_registrationreceipts_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mks_registration_mks_registrationreceipts_1mks_registration_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'mks_registration_mks_registrationreceipts_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mks_regist608feceipts_idb',
      ),
    ),
  ),
);