<?php
$module_name = 'mks_Management';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'id_autoincrement_c' => 
      array (
        'type' => 'autoincrement',
        'default' => true,
        'label' => 'LBL_ID_AUTOINCREMENT',
        'width' => '10%',
        'name' => 'id_autoincrement_c',
      ),
      'type_managment_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TYPE_MANAGMENT',
        'width' => '10%',
        'name' => 'type_managment_c',
      ),
      'status_managment_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_STATUS_MANAGMENT',
        'width' => '10%',
        'name' => 'status_managment_c',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'id_autoincrement_c' => 
      array (
        'type' => 'autoincrement',
        'default' => true,
        'label' => 'LBL_ID_AUTOINCREMENT',
        'width' => '10%',
        'name' => 'id_autoincrement_c',
      ),
      'type_managment_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TYPE_MANAGMENT',
        'width' => '10%',
        'name' => 'type_managment_c',
      ),
      'status_managment_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_STATUS_MANAGMENT',
        'width' => '10%',
        'name' => 'status_managment_c',
      ),
      'accounts_mks_management_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ACCOUNTS_MKS_MANAGEMENT_1_FROM_ACCOUNTS_TITLE',
        'id' => 'ACCOUNTS_MKS_MANAGEMENT_1ACCOUNTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'accounts_mks_management_1_name',
      ),
      'mks_registration_mks_management_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_MKS_REGISTRATION_MKS_MANAGEMENT_1_FROM_MKS_REGISTRATION_TITLE',
        'id' => 'MKS_REGISTRATION_MKS_MANAGEMENT_1MKS_REGISTRATION_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'mks_registration_mks_management_1_name',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
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
