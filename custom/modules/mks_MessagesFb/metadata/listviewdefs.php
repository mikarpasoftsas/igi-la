<?php
$module_name = 'mks_MessagesFb';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ACCOUNTS_MKS_MESSAGESFB_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_MKS_MESSAGESFB_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_MKS_MESSAGESFB_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'MKS_MESSAGESFB_OPPORTUNITIES_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MKS_MESSAGESFB_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
    'id' => 'MKS_MESSAGESFB_OPPORTUNITIESOPPORTUNITIES_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'TYPE' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'default' => true,
  ),
  'SENDER' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SENDER',
    'width' => '10%',
    'default' => true,
  ),
  'RECIPIENT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_RECIPIENT',
    'width' => '10%',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
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
