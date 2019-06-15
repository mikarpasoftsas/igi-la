<?php
// created: 2018-11-01 22:41:44
$dictionary["mks_Registration"]["fields"]["mks_registration_contacts"] = array (
  'name' => 'mks_registration_contacts',
  'type' => 'link',
  'relationship' => 'mks_registration_contacts',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_MKS_REGISTRATION_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'mks_registration_contactscontacts_ida',
);
$dictionary["mks_Registration"]["fields"]["mks_registration_contacts_name"] = array (
  'name' => 'mks_registration_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_REGISTRATION_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'mks_registration_contactscontacts_ida',
  'link' => 'mks_registration_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["mks_Registration"]["fields"]["mks_registration_contactscontacts_ida"] = array (
  'name' => 'mks_registration_contactscontacts_ida',
  'type' => 'link',
  'relationship' => 'mks_registration_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_REGISTRATION_CONTACTS_FROM_MKS_REGISTRATION_TITLE',
);
