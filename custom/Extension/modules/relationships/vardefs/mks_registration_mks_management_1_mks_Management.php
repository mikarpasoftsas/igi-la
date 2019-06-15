<?php
// created: 2019-03-14 15:31:29
$dictionary["mks_Management"]["fields"]["mks_registration_mks_management_1"] = array (
  'name' => 'mks_registration_mks_management_1',
  'type' => 'link',
  'relationship' => 'mks_registration_mks_management_1',
  'source' => 'non-db',
  'module' => 'mks_Registration',
  'bean_name' => 'mks_Registration',
  'vname' => 'LBL_MKS_REGISTRATION_MKS_MANAGEMENT_1_FROM_MKS_REGISTRATION_TITLE',
  'id_name' => 'mks_registration_mks_management_1mks_registration_ida',
);
$dictionary["mks_Management"]["fields"]["mks_registration_mks_management_1_name"] = array (
  'name' => 'mks_registration_mks_management_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_REGISTRATION_MKS_MANAGEMENT_1_FROM_MKS_REGISTRATION_TITLE',
  'save' => true,
  'id_name' => 'mks_registration_mks_management_1mks_registration_ida',
  'link' => 'mks_registration_mks_management_1',
  'table' => 'mks_registration',
  'module' => 'mks_Registration',
  'rname' => 'document_name',
);
$dictionary["mks_Management"]["fields"]["mks_registration_mks_management_1mks_registration_ida"] = array (
  'name' => 'mks_registration_mks_management_1mks_registration_ida',
  'type' => 'link',
  'relationship' => 'mks_registration_mks_management_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_REGISTRATION_MKS_MANAGEMENT_1_FROM_MKS_MANAGEMENT_TITLE',
);
