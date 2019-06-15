<?php
// created: 2019-05-18 17:45:38
$dictionary["mks_Movement"]["fields"]["mks_dailyboxmovements_mks_movement_1"] = array (
  'name' => 'mks_dailyboxmovements_mks_movement_1',
  'type' => 'link',
  'relationship' => 'mks_dailyboxmovements_mks_movement_1',
  'source' => 'non-db',
  'module' => 'mks_DailyBoxMovements',
  'bean_name' => 'mks_DailyBoxMovements',
  'vname' => 'LBL_MKS_DAILYBOXMOVEMENTS_MKS_MOVEMENT_1_FROM_MKS_DAILYBOXMOVEMENTS_TITLE',
  'id_name' => 'mks_dailyboxmovements_mks_movement_1mks_dailyboxmovements_ida',
);
$dictionary["mks_Movement"]["fields"]["mks_dailyboxmovements_mks_movement_1_name"] = array (
  'name' => 'mks_dailyboxmovements_mks_movement_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_DAILYBOXMOVEMENTS_MKS_MOVEMENT_1_FROM_MKS_DAILYBOXMOVEMENTS_TITLE',
  'save' => true,
  'id_name' => 'mks_dailyboxmovements_mks_movement_1mks_dailyboxmovements_ida',
  'link' => 'mks_dailyboxmovements_mks_movement_1',
  'table' => 'mks_dailyboxmovements',
  'module' => 'mks_DailyBoxMovements',
  'rname' => 'name',
);
$dictionary["mks_Movement"]["fields"]["mks_dailyboxmovements_mks_movement_1mks_dailyboxmovements_ida"] = array (
  'name' => 'mks_dailyboxmovements_mks_movement_1mks_dailyboxmovements_ida',
  'type' => 'link',
  'relationship' => 'mks_dailyboxmovements_mks_movement_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_DAILYBOXMOVEMENTS_MKS_MOVEMENT_1_FROM_MKS_MOVEMENT_TITLE',
);
