<?php
$module_name = 'mks_Management';
$listViewDefs [$module_name] = 
array (
  'ID_AUTOINCREMENT_C' => 
  array (
    'type' => 'autoincrement',
    'default' => true,
    'label' => 'LBL_ID_AUTOINCREMENT',
    'width' => '10%',
	'link' => true,
  ),
  'TYPE_MANAGMENT_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TYPE_MANAGMENT',
    'width' => '10%',
  ),
  'MKS_REGISTRATION_MKS_MANAGEMENT_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MKS_REGISTRATION_MKS_MANAGEMENT_1_FROM_MKS_REGISTRATION_TITLE',
    'id' => 'MKS_REGISTRATION_MKS_MANAGEMENT_1MKS_REGISTRATION_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'ACCOUNTS_MKS_MANAGEMENT_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_MKS_MANAGEMENT_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_MKS_MANAGEMENT_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'STATUS_MANAGMENT_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS_MANAGMENT',
    'width' => '10%',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
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
