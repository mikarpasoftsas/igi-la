<?php
$module_name = 'mks_Refinances';
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
            'name' => 'mks_refinances_mks_registration_name',
            'label' => 'LBL_MKS_REFINANCES_MKS_REGISTRATION_FROM_MKS_REGISTRATION_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'debt',
            'label' => 'LBL_DEBT',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'surcharge',
            'label' => 'LBL_SURCHARGE',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'discount',
            'label' => 'LBL_DISCOUNT',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'total_debt',
            'label' => 'LBL_TOTAL_DEBT',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 'assigned_user_name',
          1 => '',
        ),
        6 => 
        array (
          0 => 'description',
          1 => '',
        ),
        7 => 
        array (
        ),
      ),
    ),
  ),
);
;
?>
