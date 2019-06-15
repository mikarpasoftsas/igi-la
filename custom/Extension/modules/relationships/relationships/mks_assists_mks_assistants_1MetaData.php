<?php
// created: 2019-04-29 22:42:48
$dictionary["mks_assists_mks_assistants_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'mks_assists_mks_assistants_1' => 
    array (
      'lhs_module' => 'mks_Assists',
      'lhs_table' => 'mks_assists',
      'lhs_key' => 'id',
      'rhs_module' => 'mks_Assistants',
      'rhs_table' => 'mks_assistants',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mks_assists_mks_assistants_1_c',
      'join_key_lhs' => 'mks_assists_mks_assistants_1mks_assists_ida',
      'join_key_rhs' => 'mks_assists_mks_assistants_1mks_assistants_idb',
    ),
  ),
  'table' => 'mks_assists_mks_assistants_1_c',
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
      'name' => 'mks_assists_mks_assistants_1mks_assists_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mks_assists_mks_assistants_1mks_assistants_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mks_assists_mks_assistants_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mks_assists_mks_assistants_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mks_assists_mks_assistants_1mks_assists_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'mks_assists_mks_assistants_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mks_assists_mks_assistants_1mks_assistants_idb',
      ),
    ),
  ),
);