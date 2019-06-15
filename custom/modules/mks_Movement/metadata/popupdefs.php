<?php
$popupMeta = array (
    'moduleMain' => 'mks_Movement',
    'varName' => 'mks_Movement',
    'orderBy' => 'mks_movement.name',
    'whereClauses' => array (
  'name' => 'mks_movement.name',
),
    'searchInputs' => array (
  1 => 'name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'DATE_MOVEMENT' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_MOVEMENT',
    'width' => '10%',
    'default' => true,
    'name' => 'date_movement',
  ),
  'ORIGIN_BOX' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ORIGIN_BOX',
    'id' => 'MKS_BOX_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'origin_box',
  ),
  'AMOUNT' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'amount',
  ),
  'CURRENCY_ID' => 
  array (
    'type' => 'currency_id',
    'studio' => 'visible',
    'label' => 'LBL_CURRENCY',
    'width' => '10%',
    'default' => true,
  ),
  'TYPE_INCOME' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TYPE_INCOME',
    'width' => '10%',
    'default' => true,
    'name' => 'type_income',
  ),
  'WAY_PAY' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_WAY_PAY',
    'width' => '10%',
    'name' => 'way_pay',
  ),
  'MOVTYPE' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_MOVTYPE',
    'id' => 'MKS_MOVEMENTTYPE_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'movtype',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
),
);
