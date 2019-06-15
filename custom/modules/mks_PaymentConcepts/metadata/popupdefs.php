<?php
$popupMeta = array (
    'moduleMain' => 'mks_PaymentConcepts',
    'varName' => 'mks_PaymentConcepts',
    'orderBy' => 'mks_paymentconcepts.name',
    'whereClauses' => array (
  'name' => 'mks_paymentconcepts.name',
  'type_concept_c' => 'mks_paymentconcepts_cstm.type_concept_c',
),
    'searchInputs' => array (
  1 => 'name',
  2 => 'type_concept_c',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'type_concept_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TYPE_CONCEPT',
    'width' => '10%',
    'name' => 'type_concept_c',
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
  'TYPE_CONCEPT_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TYPE_CONCEPT',
    'width' => '10%',
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
