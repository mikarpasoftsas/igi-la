<?php
// created: 2018-10-25 14:16:55
$dictionary["mks_teacher_mks_groupmatterteachers_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'mks_teacher_mks_groupmatterteachers_1' => 
    array (
      'lhs_module' => 'mks_Teacher',
      'lhs_table' => 'mks_teacher',
      'lhs_key' => 'id',
      'rhs_module' => 'mks_GroupMatterTeachers',
      'rhs_table' => 'mks_groupmatterteachers',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mks_teacher_mks_groupmatterteachers_1_c',
      'join_key_lhs' => 'mks_teacher_mks_groupmatterteachers_1mks_teacher_ida',
      'join_key_rhs' => 'mks_teacher_mks_groupmatterteachers_1mks_groupmatterteachers_idb',
    ),
  ),
  'table' => 'mks_teacher_mks_groupmatterteachers_1_c',
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
      'name' => 'mks_teacher_mks_groupmatterteachers_1mks_teacher_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mks_teacher_mks_groupmatterteachers_1mks_groupmatterteachers_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mks_teacher_mks_groupmatterteachers_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mks_teacher_mks_groupmatterteachers_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mks_teacher_mks_groupmatterteachers_1mks_teacher_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'mks_teacher_mks_groupmatterteachers_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mks_teacher_mks_groupmatterteachers_1mks_groupmatterteachers_idb',
      ),
    ),
  ),
);