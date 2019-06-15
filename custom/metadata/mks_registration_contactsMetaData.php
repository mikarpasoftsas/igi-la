<?php
// created: 2018-11-01 22:41:44
$dictionary["mks_registration_contacts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'mks_registration_contacts' => 
    array (
      'lhs_module' => 'Contacts',
      'lhs_table' => 'contacts',
      'lhs_key' => 'id',
      'rhs_module' => 'mks_Registration',
      'rhs_table' => 'mks_registration',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mks_registration_contacts_c',
      'join_key_lhs' => 'mks_registration_contactscontacts_ida',
      'join_key_rhs' => 'mks_registration_contactsmks_registration_idb',
    ),
  ),
  'table' => 'mks_registration_contacts_c',
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
      'name' => 'mks_registration_contactscontacts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mks_registration_contactsmks_registration_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mks_registration_contactsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mks_registration_contacts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mks_registration_contactscontacts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'mks_registration_contacts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mks_registration_contactsmks_registration_idb',
      ),
    ),
  ),
);