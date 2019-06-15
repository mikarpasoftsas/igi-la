<?php
// created: 2019-02-27 16:49:15
$dictionary["mks_CustomPlanFees"]["fields"]["mks_collectionconcepts_mks_customplanfees_1"] = array (
  'name' => 'mks_collectionconcepts_mks_customplanfees_1',
  'type' => 'link',
  'relationship' => 'mks_collectionconcepts_mks_customplanfees_1',
  'source' => 'non-db',
  'module' => 'mks_CollectionConcepts',
  'bean_name' => 'mks_CollectionConcepts',
  'vname' => 'LBL_MKS_COLLECTIONCONCEPTS_MKS_CUSTOMPLANFEES_1_FROM_MKS_COLLECTIONCONCEPTS_TITLE',
  'id_name' => 'mks_collec035foncepts_ida',
);
$dictionary["mks_CustomPlanFees"]["fields"]["mks_collectionconcepts_mks_customplanfees_1_name"] = array (
  'name' => 'mks_collectionconcepts_mks_customplanfees_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_COLLECTIONCONCEPTS_MKS_CUSTOMPLANFEES_1_FROM_MKS_COLLECTIONCONCEPTS_TITLE',
  'save' => true,
  'id_name' => 'mks_collec035foncepts_ida',
  'link' => 'mks_collectionconcepts_mks_customplanfees_1',
  'table' => 'mks_collectionconcepts',
  'module' => 'mks_CollectionConcepts',
  'rname' => 'name',
);
$dictionary["mks_CustomPlanFees"]["fields"]["mks_collec035foncepts_ida"] = array (
  'name' => 'mks_collec035foncepts_ida',
  'type' => 'link',
  'relationship' => 'mks_collectionconcepts_mks_customplanfees_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_MKS_COLLECTIONCONCEPTS_MKS_CUSTOMPLANFEES_1_FROM_MKS_COLLECTIONCONCEPTS_TITLE',
);
