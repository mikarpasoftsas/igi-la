<?php
$listViewDefs ['Accounts'] = 
array (
  'LAST_NAME_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'link' => true,
    'label' => 'LBL_LAST_NAME',
    'width' => '10%',
  ),
  'FIRST_NAME_C' => 
  array (
    'type' => 'varchar',
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
  ),
  'EMAIL1' => 
  array (
    'width' => '15%',
    'label' => 'LBL_EMAIL_ADDRESS',
    'sortable' => false,
    'link' => true,
    'customCode' => '{$EMAIL1_LINK}',
    'default' => true,
  ),
  'ACCOUNT_TYPE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_TYPE',
    'default' => true,
  ),
  'ID_LOCAL_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ID_LOCAL_C',
    'width' => '10%',
  ),
);
;
?>
