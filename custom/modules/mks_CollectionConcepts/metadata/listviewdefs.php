<?php
$module_name = 'mks_CollectionConcepts';
$listViewDefs [$module_name] = 
array (
  'ID_AUTOINCREMENT_C' => 
  array (
    'type' => 'autoincrement',
    'default' => true,
    'label' => 'LBL_ID_AUTOINCREMENT',
    'width' => '10%',
  ),
  'DATE_COLLECTION_CONCEPTS_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_DATE_COLLECTION_CONCEPTS',
    'width' => '10%',
  ),
  'MKS_PAYMENTCONCEPTS_MKS_COLLECTIONCONCEPTS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MKS_PAYMENTCONCEPTS_MKS_COLLECTIONCONCEPTS_1_FROM_MKS_PAYMENTCONCEPTS_TITLE',
    'id' => 'MKS_PAYMEN2B29ONCEPTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'MKS_COLLECTIONCONCEPTS_MKS_CUSTOMPLANFEES_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MKS_COLLECTIONCONCEPTS_MKS_CUSTOMPLANFEES_1_FROM_MKS_CUSTOMPLANFEES_TITLE',
    'id' => 'MKS_COLLEC6580LANFEES_IDB',
    'width' => '10%',
    'default' => true,
  ),
  'AMOUNT_C' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
  ),
  'ON_ACCOUNT_C' => 
  array (
    'type' => 'float',
    'default' => true,
    'label' => 'LBL_ON_ACCOUNT',
    'width' => '10%',
  ),
  'SURCHARGE_C' => 
  array (
    'type' => 'float',
    'default' => true,
    'label' => 'LBL_SURCHARGE',
    'width' => '10%',
  ),
  'DISCOUNT_C' => 
  array (
    'type' => 'float',
    'default' => true,
    'label' => 'LBL_DISCOUNT',
    'width' => '10%',
  ),
  'SUBTOTAL_C' => 
  array (
    'type' => 'float',
    'default' => true,
    'label' => 'LBL_SUBTOTAL',
    'width' => '10%',
  ),
  'TOTAL_C' => 
  array (
    'type' => 'float',
    'default' => true,
    'label' => 'LBL_TOTAL',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
);
;
?>
