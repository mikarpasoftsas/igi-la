<?php
// created: 2019-06-13 17:11:18
$dictionary["Note"]["fields"]["mks_refinances_notes_1"] = array (
  'name' => 'mks_refinances_notes_1',
  'type' => 'link',
  'relationship' => 'mks_refinances_notes_1',
  'source' => 'non-db',
  'module' => 'mks_Refinances',
  'bean_name' => 'mks_Refinances',
  'vname' => 'LBL_MKS_REFINANCES_NOTES_1_FROM_MKS_REFINANCES_TITLE',
  'id_name' => 'mks_refinances_notes_1mks_refinances_ida',
);
$dictionary["Note"]["fields"]["mks_refinances_notes_1_name"] = array (
  'name' => 'mks_refinances_notes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_REFINANCES_NOTES_1_FROM_MKS_REFINANCES_TITLE',
  'save' => true,
  'id_name' => 'mks_refinances_notes_1mks_refinances_ida',
  'link' => 'mks_refinances_notes_1',
  'table' => 'mks_refinances',
  'module' => 'mks_Refinances',
  'rname' => 'name',
);
$dictionary["Note"]["fields"]["mks_refinances_notes_1mks_refinances_ida"] = array (
  'name' => 'mks_refinances_notes_1mks_refinances_ida',
  'type' => 'link',
  'relationship' => 'mks_refinances_notes_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_REFINANCES_NOTES_1_FROM_NOTES_TITLE',
);
