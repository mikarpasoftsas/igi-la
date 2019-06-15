<?php
// created: 2018-09-24 17:10:37
$dictionary["mks_waitinglistassignment_opportunities"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'mks_waitinglistassignment_opportunities' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'mks_WaitingListAssignment',
      'rhs_table' => 'mks_waitinglistassignment',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mks_waitinglistassignment_opportunities_c',
      'join_key_lhs' => 'mks_waitinglistassignment_opportunitiesopportunities_ida',
      'join_key_rhs' => 'mks_waitin82c6ignment_idb',
    ),
  ),
  'table' => 'mks_waitinglistassignment_opportunities_c',
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
      'name' => 'mks_waitinglistassignment_opportunitiesopportunities_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mks_waitin82c6ignment_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mks_waitinglistassignment_opportunitiesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mks_waitinglistassignment_opportunities_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mks_waitinglistassignment_opportunitiesopportunities_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'mks_waitinglistassignment_opportunities_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mks_waitin82c6ignment_idb',
      ),
    ),
  ),
);