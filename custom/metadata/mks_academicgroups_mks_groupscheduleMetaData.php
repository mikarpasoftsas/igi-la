<?php
// created: 2018-10-22 21:39:35
$dictionary["mks_academicgroups_mks_groupschedule"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'mks_academicgroups_mks_groupschedule' => 
    array (
      'lhs_module' => 'mks_AcademicGroups',
      'lhs_table' => 'mks_academicgroups',
      'lhs_key' => 'id',
      'rhs_module' => 'mks_GroupSchedule',
      'rhs_table' => 'mks_groupschedule',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mks_academicgroups_mks_groupschedule_c',
      'join_key_lhs' => 'mks_academicgroups_mks_groupschedulemks_academicgroups_ida',
      'join_key_rhs' => 'mks_academicgroups_mks_groupschedulemks_groupschedule_idb',
    ),
  ),
  'table' => 'mks_academicgroups_mks_groupschedule_c',
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
      'name' => 'mks_academicgroups_mks_groupschedulemks_academicgroups_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mks_academicgroups_mks_groupschedulemks_groupschedule_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mks_academicgroups_mks_groupschedulespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mks_academicgroups_mks_groupschedule_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mks_academicgroups_mks_groupschedulemks_academicgroups_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'mks_academicgroups_mks_groupschedule_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mks_academicgroups_mks_groupschedulemks_groupschedule_idb',
      ),
    ),
  ),
);