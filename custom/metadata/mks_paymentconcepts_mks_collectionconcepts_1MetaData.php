<?php
// created: 2019-02-27 16:47:57
$dictionary["mks_paymentconcepts_mks_collectionconcepts_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'mks_paymentconcepts_mks_collectionconcepts_1' => 
    array (
      'lhs_module' => 'mks_PaymentConcepts',
      'lhs_table' => 'mks_paymentconcepts',
      'lhs_key' => 'id',
      'rhs_module' => 'mks_CollectionConcepts',
      'rhs_table' => 'mks_collectionconcepts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mks_paymentconcepts_mks_collectionconcepts_1_c',
      'join_key_lhs' => 'mks_paymen2b29oncepts_ida',
      'join_key_rhs' => 'mks_paymen56b5oncepts_idb',
    ),
  ),
  'table' => 'mks_paymentconcepts_mks_collectionconcepts_1_c',
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
      'name' => 'mks_paymen2b29oncepts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mks_paymen56b5oncepts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mks_paymentconcepts_mks_collectionconcepts_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mks_paymentconcepts_mks_collectionconcepts_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mks_paymen2b29oncepts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'mks_paymentconcepts_mks_collectionconcepts_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mks_paymen56b5oncepts_idb',
      ),
    ),
  ),
);