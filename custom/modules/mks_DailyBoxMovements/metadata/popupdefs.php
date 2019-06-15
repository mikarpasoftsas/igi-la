<?php
$popupMeta = array (
    'moduleMain' => 'mks_DailyBoxMovements',
    'varName' => 'mks_DailyBoxMovements',
    'orderBy' => 'mks_dailyboxmovements.name',
    'whereClauses' => array (
  'name' => 'mks_dailyboxmovements.name',
),
    'searchInputs' => array (
  0 => 'mks_dailyboxmovements_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'DATE_BOX_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_DATE_BOX',
    'width' => '20%',
    'name' => 'date_box_c',
  ),
  'BOX_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_BOX',
    'id' => 'MKS_BOX_ID_C',
    'link' => true,
    'width' => '30%',
    'name' => 'box_c',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '5%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
),
);
