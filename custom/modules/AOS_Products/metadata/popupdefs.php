<?php
$popupMeta = array (
    'moduleMain' => 'AOS_Products',
    'varName' => 'AOS_Products',
    'orderBy' => 'aos_products.name',
    'whereClauses' => array (
  'name' => 'aos_products.name',
  'cost' => 'aos_products.cost',
  'price' => 'aos_products.price',
  'created_by' => 'aos_products.created_by',
),
    'searchInputs' => array (
  1 => 'name',
  5 => 'cost',
  6 => 'price',
  7 => 'created_by',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'cost' => 
  array (
    'name' => 'cost',
    'width' => '10%',
  ),
  'price' => 
  array (
    'name' => 'price',
    'width' => '10%',
  ),
  'created_by' => 
  array (
    'name' => 'created_by',
    'label' => 'LBL_CREATED',
    'type' => 'enum',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => '10%',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '25%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'COST' => 
  array (
    'width' => '10%',
    'label' => 'LBL_COST',
    'default' => true,
    'name' => 'cost',
  ),
  'PRICE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PRICE',
    'default' => true,
    'name' => 'price',
  ),
),
);
