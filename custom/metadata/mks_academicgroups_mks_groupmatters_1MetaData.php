<?php
// created: 2018-10-25 14:07:23
$dictionary["mks_academicgroups_mks_groupmatters_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'mks_academicgroups_mks_groupmatters_1' => 
    array (
      'lhs_module' => 'mks_AcademicGroups',
      'lhs_table' => 'mks_academicgroups',
      'lhs_key' => 'id',
      'rhs_module' => 'mks_GroupMatters',
      'rhs_table' => 'mks_groupmatters',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mks_academicgroups_mks_groupmatters_1_c',
      'join_key_lhs' => 'mks_academicgroups_mks_groupmatters_1mks_academicgroups_ida',
      'join_key_rhs' => 'mks_academicgroups_mks_groupmatters_1mks_groupmatters_idb',
    ),
  ),
  'table' => 'mks_academicgroups_mks_groupmatters_1_c',
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
      'name' => 'mks_academicgroups_mks_groupmatters_1mks_academicgroups_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mks_academicgroups_mks_groupmatters_1mks_groupmatters_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mks_academicgroups_mks_groupmatters_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mks_academicgroups_mks_groupmatters_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mks_academicgroups_mks_groupmatters_1mks_academicgroups_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'mks_academicgroups_mks_groupmatters_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mks_academicgroups_mks_groupmatters_1mks_groupmatters_idb',
      ),
    ),
  ),
);