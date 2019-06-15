<?php
$module_name = 'mks_Registration';
$OBJECT_NAME = 'MKS_REGISTRATION';
$listViewDefs [$module_name] = 
array (
  'ID_AUTOINCREMENT' => 
  array (
    'type' => 'autoincrement',
    'label' => 'LBL_ID_AUTOINCREMENT',
    'width' => '10%',
    'default' => true,
    'link' => true,
  ),
  'REG_NUM_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_REG_NUM',
    'width' => '10%',
  ),
  'ACCOUNTS_MKS_REGISTRATION_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_MKS_REGISTRATION_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_MKS_REGISTRATION_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'COURSE' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_COURSE',
    'id' => 'MKS_COURSES_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'GROUPTHEORY' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_GROUPTHEORY',
    'id' => 'MKS_ACADEMICGROUPS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'GROUPPRACTICE' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_GROUPPRACTICE',
    'id' => 'MKS_ACADEMICGROUPS_ID1_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'FIRST_EXPIRATION' => 
  array (
    'type' => 'date',
    'label' => 'LBL_ FIRST_EXPIRATION',
    'width' => '10%',
    'default' => true,
  ),
  'SECOND_EXPIRATION' => 
  array (
    'type' => 'date',
    'label' => 'LBL_SECOND_EXPIRATION',
    'width' => '10%',
    'default' => true,
  ),
  'DOCUMENT_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => false,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MODIFIED_USER',
    'module' => 'Users',
    'id' => 'USERS_ID',
    'default' => false,
    'sortable' => false,
    'related_fields' => 
    array (
      0 => 'modified_user_id',
    ),
  ),
);
;
?>
