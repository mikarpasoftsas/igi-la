<?php
$module_name = 'mks_Management';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => false,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'mks_registration_mks_management_1_name',
            'label' => 'LBL_MKS_REGISTRATION_MKS_MANAGEMENT_1_FROM_MKS_REGISTRATION_TITLE',
          ),
          1 => 
          array (
            'name' => 'accounts_mks_management_1_name',
            'label' => 'LBL_ACCOUNTS_MKS_MANAGEMENT_1_FROM_ACCOUNTS_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'type_managment_c',
            'studio' => 'visible',
            'label' => 'LBL_TYPE_MANAGMENT',
          ),
          1 => 
          array (
            'name' => 'status_managment_c',
            'studio' => 'visible',
            'label' => 'LBL_STATUS_MANAGMENT',
          ),
        ),
        2 => 
        array (
          0 => 'description',
        ),
        3 => 
        array (
          0 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
;
?>
