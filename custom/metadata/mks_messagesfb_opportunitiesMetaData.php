<?php
// created: 2018-11-23 21:23:47
$dictionary["mks_messagesfb_opportunities"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'mks_messagesfb_opportunities' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'mks_MessagesFb',
      'rhs_table' => 'mks_messagesfb',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mks_messagesfb_opportunities_c',
      'join_key_lhs' => 'mks_messagesfb_opportunitiesopportunities_ida',
      'join_key_rhs' => 'mks_messagesfb_opportunitiesmks_messagesfb_idb',
    ),
  ),
  'table' => 'mks_messagesfb_opportunities_c',
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
      'name' => 'mks_messagesfb_opportunitiesopportunities_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mks_messagesfb_opportunitiesmks_messagesfb_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mks_messagesfb_opportunitiesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mks_messagesfb_opportunities_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mks_messagesfb_opportunitiesopportunities_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'mks_messagesfb_opportunities_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mks_messagesfb_opportunitiesmks_messagesfb_idb',
      ),
    ),
  ),
);