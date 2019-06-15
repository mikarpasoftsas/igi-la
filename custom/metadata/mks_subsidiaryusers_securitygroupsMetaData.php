<?php
// created: 2018-09-26 21:01:46
$dictionary["mks_subsidiaryusers_securitygroups"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'mks_subsidiaryusers_securitygroups' => 
    array (
      'lhs_module' => 'mks_SubsidiaryUsers',
      'lhs_table' => 'mks_subsidiaryusers',
      'lhs_key' => 'id',
      'rhs_module' => 'SecurityGroups',
      'rhs_table' => 'securitygroups',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mks_subsidiaryusers_securitygroups_c',
      'join_key_lhs' => 'mks_subsidiaryusers_securitygroupsmks_subsidiaryusers_ida',
      'join_key_rhs' => 'mks_subsidiaryusers_securitygroupssecuritygroups_idb',
    ),
  ),
  'table' => 'mks_subsidiaryusers_securitygroups_c',
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
      'name' => 'mks_subsidiaryusers_securitygroupsmks_subsidiaryusers_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mks_subsidiaryusers_securitygroupssecuritygroups_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mks_subsidiaryusers_securitygroupsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mks_subsidiaryusers_securitygroups_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mks_subsidiaryusers_securitygroupsmks_subsidiaryusers_ida',
        1 => 'mks_subsidiaryusers_securitygroupssecuritygroups_idb',
      ),
    ),
  ),
);