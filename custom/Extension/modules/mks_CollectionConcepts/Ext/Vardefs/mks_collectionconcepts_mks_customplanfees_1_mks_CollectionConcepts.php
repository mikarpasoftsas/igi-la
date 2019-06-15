<?php
// created: 2019-02-27 16:49:15
$dictionary["mks_CollectionConcepts"]["fields"]["mks_collectionconcepts_mks_customplanfees_1"] = array (
  'name' => 'mks_collectionconcepts_mks_customplanfees_1',
  'type' => 'link',
  'relationship' => 'mks_collectionconcepts_mks_customplanfees_1',
  'source' => 'non-db',
  'module' => 'mks_CustomPlanFees',
  'bean_name' => 'mks_CustomPlanFees',
  'vname' => 'LBL_MKS_COLLECTIONCONCEPTS_MKS_CUSTOMPLANFEES_1_FROM_MKS_CUSTOMPLANFEES_TITLE',
  'id_name' => 'mks_collec6580lanfees_idb',
);
$dictionary["mks_CollectionConcepts"]["fields"]["mks_collectionconcepts_mks_customplanfees_1_name"] = array (
  'name' => 'mks_collectionconcepts_mks_customplanfees_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_COLLECTIONCONCEPTS_MKS_CUSTOMPLANFEES_1_FROM_MKS_CUSTOMPLANFEES_TITLE',
  'save' => true,
  'id_name' => 'mks_collec6580lanfees_idb',
  'link' => 'mks_collectionconcepts_mks_customplanfees_1',
  'table' => 'mks_customplanfees',
  'module' => 'mks_CustomPlanFees',
  'rname' => 'name',
);
$dictionary["mks_CollectionConcepts"]["fields"]["mks_collec6580lanfees_idb"] = array (
  'name' => 'mks_collec6580lanfees_idb',
  'type' => 'link',
  'relationship' => 'mks_collectionconcepts_mks_customplanfees_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_MKS_COLLECTIONCONCEPTS_MKS_CUSTOMPLANFEES_1_FROM_MKS_CUSTOMPLANFEES_TITLE',
);
