<?php
$popupMeta = array (
    'moduleMain' => 'Account',
    'varName' => 'ACCOUNT',
    'orderBy' => 'name',
    'whereClauses' => array (
  'account_type' => 'accounts.account_type',
  'email' => 'accounts.email',
  'id_local_c' => 'accounts_cstm.id_local_c',
  'phone_mobile_c' => 'accounts_cstm.phone_mobile_c',
  'last_name_c' => 'accounts_cstm.last_name_c',
  'first_name_c' => 'accounts_cstm.first_name_c',
),
    'searchInputs' => array (
  3 => 'account_type',
  7 => 'email',
  8 => 'id_local_c',
  10 => 'phone_mobile_c',
  11 => 'last_name_c',
  12 => 'first_name_c',
),
    'create' => array (
  'formBase' => 'AccountFormBase.php',
  'formBaseClass' => 'AccountFormBase',
  'getFormBodyParams' => 
  array (
    0 => '',
    1 => '',
    2 => 'AccountSave',
  ),
  'createButton' => 'LNK_NEW_ACCOUNT',
),
    'searchdefs' => array (
  'last_name_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LAST_NAME',
    'width' => '10%',
    'name' => 'last_name_c',
  ),
  'first_name_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FIRST_NAME',
    'width' => '10%',
    'name' => 'first_name_c',
  ),
  'phone_mobile_c' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PHONE_MOBILE',
    'width' => '10%',
    'name' => 'phone_mobile_c',
  ),
  'email' => 
  array (
    'name' => 'email',
    'width' => '10%',
  ),
  'account_type' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'name' => 'account_type',
  ),
  'id_local_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ID_LOCAL_C',
    'width' => '10%',
    'name' => 'id_local_c',
  ),
),
    'listviewdefs' => array (
  'LAST_NAME_C' => 
  array (
    'type' => 'varchar',
    'link' => true,
    'default' => true,
    'label' => 'LBL_LAST_NAME',
    'width' => '10%',
    'name' => 'last_name_c',
  ),
  'FIRST_NAME_C' => 
  array (
    'type' => 'varchar',
    'link' => true,
    'default' => true,
    'label' => 'LBL_FIRST_NAME',
    'width' => '10%',
  ),
  'PHONE_MOBILE_C' => 
  array (
    'type' => 'phone',
    'default' => true,
    'label' => 'LBL_PHONE_MOBILE',
    'width' => '10%',
    'name' => 'phone_mobile_c',
  ),
  'EMAIL1' => 
  array (
    'type' => 'varchar',
    'studio' => 
    array (
      'editField' => true,
      'searchview' => false,
    ),
    'label' => 'LBL_EMAIL',
    'width' => '10%',
    'default' => true,
    'name' => 'email1',
  ),
  'ACCOUNT_TYPE' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'default' => true,
    'name' => 'account_type',
  ),
  'ID_LOCAL_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ID_LOCAL_C',
    'width' => '10%',
    'name' => 'id_local_c',
  ),
),
);
