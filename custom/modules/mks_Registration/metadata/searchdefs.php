<?php
$module_name = 'mks_Registration';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'id_autoincrement' => 
      array (
        'type' => 'autoincrement',
        'label' => 'LBL_ID_AUTOINCREMENT',
        'width' => '10%',
        'default' => true,
        'name' => 'id_autoincrement',
      ),
      'accounts_mks_registration_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ACCOUNTS_MKS_REGISTRATION_1_FROM_ACCOUNTS_TITLE',
        'id' => 'ACCOUNTS_MKS_REGISTRATION_1ACCOUNTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'accounts_mks_registration_1_name',
      ),
      'course' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_COURSE',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'id' => 'MKS_COURSES_ID_C',
        'name' => 'course',
      ),
    ),
    'advanced_search' => 
    array (
      'id_autoincrement' => 
      array (
        'type' => 'autoincrement',
        'label' => 'LBL_ID_AUTOINCREMENT',
        'width' => '10%',
        'default' => true,
        'name' => 'id_autoincrement',
      ),
      'accounts_mks_registration_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ACCOUNTS_MKS_REGISTRATION_1_FROM_ACCOUNTS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'ACCOUNTS_MKS_REGISTRATION_1ACCOUNTS_IDA',
        'name' => 'accounts_mks_registration_1_name',
      ),
      'course' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_COURSE',
        'id' => 'MKS_COURSES_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'course',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
