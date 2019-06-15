<?php
// created: 2018-09-18 21:55:03
$dictionary["mks_subjectmatter_securitygroups"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'mks_subjectmatter_securitygroups' => 
    array (
      'lhs_module' => 'mks_SubjectMatter',
      'lhs_table' => 'mks_subjectmatter',
      'lhs_key' => 'id',
      'rhs_module' => 'SecurityGroups',
      'rhs_table' => 'securitygroups',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mks_subjectmatter_securitygroups_c',
      'join_key_lhs' => 'mks_subjectmatter_securitygroupsmks_subjectmatter_ida',
      'join_key_rhs' => 'mks_subjectmatter_securitygroupssecuritygroups_idb',
    ),
  ),
  'table' => 'mks_subjectmatter_securitygroups_c',
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
      'name' => 'mks_subjectmatter_securitygroupsmks_subjectmatter_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mks_subjectmatter_securitygroupssecuritygroups_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mks_subjectmatter_securitygroupsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mks_subjectmatter_securitygroups_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mks_subjectmatter_securitygroupsmks_subjectmatter_ida',
        1 => 'mks_subjectmatter_securitygroupssecuritygroups_idb',
      ),
    ),
  ),
);