<?php
$module_name = 'mks_Management';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'id_autoincrement_c',
            'label' => 'LBL_ID_AUTOINCREMENT',
          ),
        ),
        1 => 
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
        2 => 
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
        3 => 
        array (
          0 => 'description',
        ),
        4 => 
        array (
          0 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
;
?>
