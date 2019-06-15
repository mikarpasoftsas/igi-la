<?php
// created: 2019-05-18 15:11:59
$dictionary["mks_PaymentsCash"]["fields"]["mks_dailyboxmovements_mks_paymentscash_1"] = array (
  'name' => 'mks_dailyboxmovements_mks_paymentscash_1',
  'type' => 'link',
  'relationship' => 'mks_dailyboxmovements_mks_paymentscash_1',
  'source' => 'non-db',
  'module' => 'mks_DailyBoxMovements',
  'bean_name' => 'mks_DailyBoxMovements',
  'vname' => 'LBL_MKS_DAILYBOXMOVEMENTS_MKS_PAYMENTSCASH_1_FROM_MKS_DAILYBOXMOVEMENTS_TITLE',
  'id_name' => 'mks_dailybae34vements_ida',
);
$dictionary["mks_PaymentsCash"]["fields"]["mks_dailyboxmovements_mks_paymentscash_1_name"] = array (
  'name' => 'mks_dailyboxmovements_mks_paymentscash_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_DAILYBOXMOVEMENTS_MKS_PAYMENTSCASH_1_FROM_MKS_DAILYBOXMOVEMENTS_TITLE',
  'save' => true,
  'id_name' => 'mks_dailybae34vements_ida',
  'link' => 'mks_dailyboxmovements_mks_paymentscash_1',
  'table' => 'mks_dailyboxmovements',
  'module' => 'mks_DailyBoxMovements',
  'rname' => 'name',
);
$dictionary["mks_PaymentsCash"]["fields"]["mks_dailybae34vements_ida"] = array (
  'name' => 'mks_dailybae34vements_ida',
  'type' => 'link',
  'relationship' => 'mks_dailyboxmovements_mks_paymentscash_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_DAILYBOXMOVEMENTS_MKS_PAYMENTSCASH_1_FROM_MKS_PAYMENTSCASH_TITLE',
);
