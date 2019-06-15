<?php
// created: 2019-02-27 16:47:57
$dictionary["mks_CollectionConcepts"]["fields"]["mks_paymentconcepts_mks_collectionconcepts_1"] = array (
  'name' => 'mks_paymentconcepts_mks_collectionconcepts_1',
  'type' => 'link',
  'relationship' => 'mks_paymentconcepts_mks_collectionconcepts_1',
  'source' => 'non-db',
  'module' => 'mks_PaymentConcepts',
  'bean_name' => 'mks_PaymentConcepts',
  'vname' => 'LBL_MKS_PAYMENTCONCEPTS_MKS_COLLECTIONCONCEPTS_1_FROM_MKS_PAYMENTCONCEPTS_TITLE',
  'id_name' => 'mks_paymen2b29oncepts_ida',
);
$dictionary["mks_CollectionConcepts"]["fields"]["mks_paymentconcepts_mks_collectionconcepts_1_name"] = array (
  'name' => 'mks_paymentconcepts_mks_collectionconcepts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_PAYMENTCONCEPTS_MKS_COLLECTIONCONCEPTS_1_FROM_MKS_PAYMENTCONCEPTS_TITLE',
  'save' => true,
  'id_name' => 'mks_paymen2b29oncepts_ida',
  'link' => 'mks_paymentconcepts_mks_collectionconcepts_1',
  'table' => 'mks_paymentconcepts',
  'module' => 'mks_PaymentConcepts',
  'rname' => 'name',
);
$dictionary["mks_CollectionConcepts"]["fields"]["mks_paymen2b29oncepts_ida"] = array (
  'name' => 'mks_paymen2b29oncepts_ida',
  'type' => 'link',
  'relationship' => 'mks_paymentconcepts_mks_collectionconcepts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_PAYMENTCONCEPTS_MKS_COLLECTIONCONCEPTS_1_FROM_MKS_COLLECTIONCONCEPTS_TITLE',
);
