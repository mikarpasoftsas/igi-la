<?php
// created: 2019-02-25 17:06:08
$dictionary["mks_CollectionConcepts"]["fields"]["mks_registrationreceipts_mks_collectionconcepts_1"] = array (
  'name' => 'mks_registrationreceipts_mks_collectionconcepts_1',
  'type' => 'link',
  'relationship' => 'mks_registrationreceipts_mks_collectionconcepts_1',
  'source' => 'non-db',
  'module' => 'mks_RegistrationReceipts',
  'bean_name' => 'mks_RegistrationReceipts',
  'vname' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_COLLECTIONCONCEPTS_1_FROM_MKS_REGISTRATIONRECEIPTS_TITLE',
  'id_name' => 'mks_regist10ebeceipts_ida',
);
$dictionary["mks_CollectionConcepts"]["fields"]["mks_registrationreceipts_mks_collectionconcepts_1_name"] = array (
  'name' => 'mks_registrationreceipts_mks_collectionconcepts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_COLLECTIONCONCEPTS_1_FROM_MKS_REGISTRATIONRECEIPTS_TITLE',
  'save' => true,
  'id_name' => 'mks_regist10ebeceipts_ida',
  'link' => 'mks_registrationreceipts_mks_collectionconcepts_1',
  'table' => 'mks_registrationreceipts',
  'module' => 'mks_RegistrationReceipts',
  'rname' => 'name',
);
$dictionary["mks_CollectionConcepts"]["fields"]["mks_regist10ebeceipts_ida"] = array (
  'name' => 'mks_regist10ebeceipts_ida',
  'type' => 'link',
  'relationship' => 'mks_registrationreceipts_mks_collectionconcepts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_COLLECTIONCONCEPTS_1_FROM_MKS_COLLECTIONCONCEPTS_TITLE',
);
