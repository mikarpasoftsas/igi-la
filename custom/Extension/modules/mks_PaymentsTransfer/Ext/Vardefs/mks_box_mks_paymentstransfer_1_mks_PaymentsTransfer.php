<?php
// created: 2019-02-26 19:54:39
$dictionary["mks_PaymentsTransfer"]["fields"]["mks_box_mks_paymentstransfer_1"] = array (
  'name' => 'mks_box_mks_paymentstransfer_1',
  'type' => 'link',
  'relationship' => 'mks_box_mks_paymentstransfer_1',
  'source' => 'non-db',
  'module' => 'mks_Box',
  'bean_name' => 'mks_Box',
  'vname' => 'LBL_MKS_BOX_MKS_PAYMENTSTRANSFER_1_FROM_MKS_BOX_TITLE',
  'id_name' => 'mks_box_mks_paymentstransfer_1mks_box_ida',
);
$dictionary["mks_PaymentsTransfer"]["fields"]["mks_box_mks_paymentstransfer_1_name"] = array (
  'name' => 'mks_box_mks_paymentstransfer_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_BOX_MKS_PAYMENTSTRANSFER_1_FROM_MKS_BOX_TITLE',
  'save' => true,
  'id_name' => 'mks_box_mks_paymentstransfer_1mks_box_ida',
  'link' => 'mks_box_mks_paymentstransfer_1',
  'table' => 'mks_box',
  'module' => 'mks_Box',
  'rname' => 'name',
);
$dictionary["mks_PaymentsTransfer"]["fields"]["mks_box_mks_paymentstransfer_1mks_box_ida"] = array (
  'name' => 'mks_box_mks_paymentstransfer_1mks_box_ida',
  'type' => 'link',
  'relationship' => 'mks_box_mks_paymentstransfer_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_BOX_MKS_PAYMENTSTRANSFER_1_FROM_MKS_PAYMENTSTRANSFER_TITLE',
);
