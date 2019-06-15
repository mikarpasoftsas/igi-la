<?php
// created: 2018-10-25 14:04:47
$dictionary["mks_groupmatters_mks_groupmatterteachers"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'mks_groupmatters_mks_groupmatterteachers' => 
    array (
      'lhs_module' => 'mks_GroupMatters',
      'lhs_table' => 'mks_groupmatters',
      'lhs_key' => 'id',
      'rhs_module' => 'mks_GroupMatterTeachers',
      'rhs_table' => 'mks_groupmatterteachers',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mks_groupmatters_mks_groupmatterteachers_c',
      'join_key_lhs' => 'mks_groupmatters_mks_groupmatterteachersmks_groupmatters_ida',
      'join_key_rhs' => 'mks_groupmc7ddeachers_idb',
    ),
  ),
  'table' => 'mks_groupmatters_mks_groupmatterteachers_c',
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
      'name' => 'mks_groupmatters_mks_groupmatterteachersmks_groupmatters_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mks_groupmc7ddeachers_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mks_groupmatters_mks_groupmatterteachersspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mks_groupmatters_mks_groupmatterteachers_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mks_groupmatters_mks_groupmatterteachersmks_groupmatters_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'mks_groupmatters_mks_groupmatterteachers_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mks_groupmc7ddeachers_idb',
      ),
    ),
  ),
);