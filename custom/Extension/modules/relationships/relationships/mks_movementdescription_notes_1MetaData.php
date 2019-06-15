<?php
// created: 2018-09-27 13:09:12
$dictionary["mks_movementdescription_notes_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'mks_movementdescription_notes_1' => 
    array (
      'lhs_module' => 'mks_MovementDescription',
      'lhs_table' => 'mks_movementdescription',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mks_movementdescription_notes_1_c',
      'join_key_lhs' => 'mks_movementdescription_notes_1mks_movementdescription_ida',
      'join_key_rhs' => 'mks_movementdescription_notes_1notes_idb',
    ),
  ),
  'table' => 'mks_movementdescription_notes_1_c',
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
      'name' => 'mks_movementdescription_notes_1mks_movementdescription_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mks_movementdescription_notes_1notes_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mks_movementdescription_notes_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mks_movementdescription_notes_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mks_movementdescription_notes_1mks_movementdescription_ida',
        1 => 'mks_movementdescription_notes_1notes_idb',
      ),
    ),
  ),
);