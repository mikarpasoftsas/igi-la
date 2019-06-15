<?php
// created: 2018-09-18 22:05:05
$dictionary["mks_nonworkingdays_securitygroups"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'mks_nonworkingdays_securitygroups' => 
    array (
      'lhs_module' => 'mks_NonworkingDays',
      'lhs_table' => 'mks_nonworkingdays',
      'lhs_key' => 'id',
      'rhs_module' => 'SecurityGroups',
      'rhs_table' => 'securitygroups',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mks_nonworkingdays_securitygroups_c',
      'join_key_lhs' => 'mks_nonworkingdays_securitygroupsmks_nonworkingdays_ida',
      'join_key_rhs' => 'mks_nonworkingdays_securitygroupssecuritygroups_idb',
    ),
  ),
  'table' => 'mks_nonworkingdays_securitygroups_c',
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
      'name' => 'mks_nonworkingdays_securitygroupsmks_nonworkingdays_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mks_nonworkingdays_securitygroupssecuritygroups_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mks_nonworkingdays_securitygroupsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mks_nonworkingdays_securitygroups_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mks_nonworkingdays_securitygroupsmks_nonworkingdays_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'mks_nonworkingdays_securitygroups_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mks_nonworkingdays_securitygroupssecuritygroups_idb',
      ),
    ),
  ),
);