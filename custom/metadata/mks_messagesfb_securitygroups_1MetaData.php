<?php
// created: 2018-11-24 15:24:05
$dictionary["mks_messagesfb_securitygroups_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'mks_messagesfb_securitygroups_1' => 
    array (
      'lhs_module' => 'mks_MessagesFb',
      'lhs_table' => 'mks_messagesfb',
      'lhs_key' => 'id',
      'rhs_module' => 'SecurityGroups',
      'rhs_table' => 'securitygroups',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mks_messagesfb_securitygroups_1_c',
      'join_key_lhs' => 'mks_messagesfb_securitygroups_1mks_messagesfb_ida',
      'join_key_rhs' => 'mks_messagesfb_securitygroups_1securitygroups_idb',
    ),
  ),
  'table' => 'mks_messagesfb_securitygroups_1_c',
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
      'name' => 'mks_messagesfb_securitygroups_1mks_messagesfb_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mks_messagesfb_securitygroups_1securitygroups_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mks_messagesfb_securitygroups_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mks_messagesfb_securitygroups_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mks_messagesfb_securitygroups_1mks_messagesfb_ida',
        1 => 'mks_messagesfb_securitygroups_1securitygroups_idb',
      ),
    ),
  ),
);