<?php
// created: 2018-11-24 14:34:24
$dictionary["mks_MessagesFb"]["fields"]["accounts_mks_messagesfb_1"] = array (
  'name' => 'accounts_mks_messagesfb_1',
  'type' => 'link',
  'relationship' => 'accounts_mks_messagesfb_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_MKS_MESSAGESFB_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_mks_messagesfb_1accounts_ida',
);
$dictionary["mks_MessagesFb"]["fields"]["accounts_mks_messagesfb_1_name"] = array (
  'name' => 'accounts_mks_messagesfb_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_MKS_MESSAGESFB_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_mks_messagesfb_1accounts_ida',
  'link' => 'accounts_mks_messagesfb_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["mks_MessagesFb"]["fields"]["accounts_mks_messagesfb_1accounts_ida"] = array (
  'name' => 'accounts_mks_messagesfb_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_mks_messagesfb_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_MKS_MESSAGESFB_1_FROM_MKS_MESSAGESFB_TITLE',
);
