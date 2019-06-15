<?php
// created: 2018-11-01 22:42:13
$dictionary["mks_custompaymentplan_mks_registration"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'mks_custompaymentplan_mks_registration' => 
    array (
      'lhs_module' => 'mks_Registration',
      'lhs_table' => 'mks_registration',
      'lhs_key' => 'id',
      'rhs_module' => 'mks_CustomPaymentPlan',
      'rhs_table' => 'mks_custompaymentplan',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mks_custompaymentplan_mks_registration_c',
      'join_key_lhs' => 'mks_custompaymentplan_mks_registrationmks_registration_ida',
      'join_key_rhs' => 'mks_custompaymentplan_mks_registrationmks_custompaymentplan_idb',
    ),
  ),
  'table' => 'mks_custompaymentplan_mks_registration_c',
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
      'name' => 'mks_custompaymentplan_mks_registrationmks_registration_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mks_custompaymentplan_mks_registrationmks_custompaymentplan_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mks_custompaymentplan_mks_registrationspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mks_custompaymentplan_mks_registration_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mks_custompaymentplan_mks_registrationmks_registration_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'mks_custompaymentplan_mks_registration_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mks_custompaymentplan_mks_registrationmks_custompaymentplan_idb',
      ),
    ),
  ),
);