<?php
// created: 2019-06-11 23:36:52
$dictionary["mks_AuthDestinationBox"]["fields"]["mks_box_mks_authdestinationbox_1"] = array (
  'name' => 'mks_box_mks_authdestinationbox_1',
  'type' => 'link',
  'relationship' => 'mks_box_mks_authdestinationbox_1',
  'source' => 'non-db',
  'module' => 'mks_Box',
  'bean_name' => 'mks_Box',
  'vname' => 'LBL_MKS_BOX_MKS_AUTHDESTINATIONBOX_1_FROM_MKS_BOX_TITLE',
  'id_name' => 'mks_box_mks_authdestinationbox_1mks_box_ida',
);
$dictionary["mks_AuthDestinationBox"]["fields"]["mks_box_mks_authdestinationbox_1_name"] = array (
  'name' => 'mks_box_mks_authdestinationbox_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_BOX_MKS_AUTHDESTINATIONBOX_1_FROM_MKS_BOX_TITLE',
  'save' => true,
  'id_name' => 'mks_box_mks_authdestinationbox_1mks_box_ida',
  'link' => 'mks_box_mks_authdestinationbox_1',
  'table' => 'mks_box',
  'module' => 'mks_Box',
  'rname' => 'name',
);
$dictionary["mks_AuthDestinationBox"]["fields"]["mks_box_mks_authdestinationbox_1mks_box_ida"] = array (
  'name' => 'mks_box_mks_authdestinationbox_1mks_box_ida',
  'type' => 'link',
  'relationship' => 'mks_box_mks_authdestinationbox_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_BOX_MKS_AUTHDESTINATIONBOX_1_FROM_MKS_AUTHDESTINATIONBOX_TITLE',
);
