<?php
// created: 2018-11-13 17:09:55
$dictionary["mks_Registration"]["fields"]["accounts_mks_registration_1"] = array (
  'name' => 'accounts_mks_registration_1',
  'type' => 'link',
  'relationship' => 'accounts_mks_registration_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_MKS_REGISTRATION_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_mks_registration_1accounts_ida',
);
$dictionary["mks_Registration"]["fields"]["accounts_mks_registration_1_name"] = array (
  'name' => 'accounts_mks_registration_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_MKS_REGISTRATION_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_mks_registration_1accounts_ida',
  'link' => 'accounts_mks_registration_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["mks_Registration"]["fields"]["accounts_mks_registration_1accounts_ida"] = array (
  'name' => 'accounts_mks_registration_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_mks_registration_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_MKS_REGISTRATION_1_FROM_MKS_REGISTRATION_TITLE',
);
