<?php
// created: 2018-09-24 16:21:43
$dictionary["mks_classroom_securitygroups"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'mks_classroom_securitygroups' => 
    array (
      'lhs_module' => 'mks_Classroom',
      'lhs_table' => 'mks_classroom',
      'lhs_key' => 'id',
      'rhs_module' => 'SecurityGroups',
      'rhs_table' => 'securitygroups',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mks_classroom_securitygroups_c',
      'join_key_lhs' => 'mks_classroom_securitygroupsmks_classroom_ida',
      'join_key_rhs' => 'mks_classroom_securitygroupssecuritygroups_idb',
    ),
  ),
  'table' => 'mks_classroom_securitygroups_c',
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
      'name' => 'mks_classroom_securitygroupsmks_classroom_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mks_classroom_securitygroupssecuritygroups_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mks_classroom_securitygroupsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mks_classroom_securitygroups_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mks_classroom_securitygroupsmks_classroom_ida',
        1 => 'mks_classroom_securitygroupssecuritygroups_idb',
      ),
    ),
  ),
);