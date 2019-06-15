<?php
// created: 2019-02-26 19:46:08
$dictionary["mks_PaymentsCash"]["fields"]["mks_box_mks_paymentscash_1"] = array (
  'name' => 'mks_box_mks_paymentscash_1',
  'type' => 'link',
  'relationship' => 'mks_box_mks_paymentscash_1',
  'source' => 'non-db',
  'module' => 'mks_Box',
  'bean_name' => 'mks_Box',
  'vname' => 'LBL_MKS_BOX_MKS_PAYMENTSCASH_1_FROM_MKS_BOX_TITLE',
  'id_name' => 'mks_box_mks_paymentscash_1mks_box_ida',
);
$dictionary["mks_PaymentsCash"]["fields"]["mks_box_mks_paymentscash_1_name"] = array (
  'name' => 'mks_box_mks_paymentscash_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_BOX_MKS_PAYMENTSCASH_1_FROM_MKS_BOX_TITLE',
  'save' => true,
  'id_name' => 'mks_box_mks_paymentscash_1mks_box_ida',
  'link' => 'mks_box_mks_paymentscash_1',
  'table' => 'mks_box',
  'module' => 'mks_Box',
  'rname' => 'name',
);
$dictionary["mks_PaymentsCash"]["fields"]["mks_box_mks_paymentscash_1mks_box_ida"] = array (
  'name' => 'mks_box_mks_paymentscash_1mks_box_ida',
  'type' => 'link',
  'relationship' => 'mks_box_mks_paymentscash_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_BOX_MKS_PAYMENTSCASH_1_FROM_MKS_PAYMENTSCASH_TITLE',
);
