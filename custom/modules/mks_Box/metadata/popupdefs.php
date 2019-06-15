<?php
$popupMeta = array (
    'moduleMain' => 'mks_Box',
    'varName' => 'mks_Box',
    'orderBy' => 'mks_box.name',
    'whereClauses' => array (
  'name' => 'mks_box.name',
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
