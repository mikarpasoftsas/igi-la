<?php
$module_name = 'mks_CustomPlanFees';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'custom/modules/mks_CustomPlanFees/js/editview.js',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'n_fee_c',
            'label' => 'LBL_N_FEE',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 'name',
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'mks_custompaymentplan_mks_customplanfees_name',
            'label' => 'LBL_MKS_CUSTOMPAYMENTPLAN_MKS_CUSTOMPLANFEES_FROM_MKS_CUSTOMPAYMENTPLAN_TITLE',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'amount',
            'label' => 'LBL_AMOUNT',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'expiration',
            'label' => 'LBL_EXPIRATION',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 'assigned_user_name',
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
