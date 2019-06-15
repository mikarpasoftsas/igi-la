<?php
// created: 2019-06-01 17:47:30
$dictionary["mks_registrationreceipts_mks_customplanfees_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'mks_registrationreceipts_mks_customplanfees_1' => 
    array (
      'lhs_module' => 'mks_RegistrationReceipts',
      'lhs_table' => 'mks_registrationreceipts',
      'lhs_key' => 'id',
      'rhs_module' => 'mks_CustomPlanFees',
      'rhs_table' => 'mks_customplanfees',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mks_registrationreceipts_mks_customplanfees_1_c',
      'join_key_lhs' => 'mks_regist8c8aeceipts_ida',
      'join_key_rhs' => 'mks_regist52fblanfees_idb',
    ),
  ),
  'table' => 'mks_registrationreceipts_mks_customplanfees_1_c',
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
      'name' => 'mks_regist8c8aeceipts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mks_regist52fblanfees_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mks_registrationreceipts_mks_customplanfees_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mks_registrationreceipts_mks_customplanfees_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mks_regist8c8aeceipts_ida',
        1 => 'mks_regist52fblanfees_idb',
      ),
    ),
  ),
);