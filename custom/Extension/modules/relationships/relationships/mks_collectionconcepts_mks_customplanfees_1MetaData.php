<?php
// created: 2019-02-27 16:49:15
$dictionary["mks_collectionconcepts_mks_customplanfees_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'mks_collectionconcepts_mks_customplanfees_1' => 
    array (
      'lhs_module' => 'mks_CollectionConcepts',
      'lhs_table' => 'mks_collectionconcepts',
      'lhs_key' => 'id',
      'rhs_module' => 'mks_CustomPlanFees',
      'rhs_table' => 'mks_customplanfees',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mks_collectionconcepts_mks_customplanfees_1_c',
      'join_key_lhs' => 'mks_collec035foncepts_ida',
      'join_key_rhs' => 'mks_collec6580lanfees_idb',
    ),
  ),
  'table' => 'mks_collectionconcepts_mks_customplanfees_1_c',
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
      'name' => 'mks_collec035foncepts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mks_collec6580lanfees_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mks_collectionconcepts_mks_customplanfees_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mks_collectionconcepts_mks_customplanfees_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mks_collec035foncepts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'mks_collectionconcepts_mks_customplanfees_1_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mks_collec6580lanfees_idb',
      ),
    ),
  ),
);