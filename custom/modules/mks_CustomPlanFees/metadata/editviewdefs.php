<?php
$module_name = 'mks_CustomPlanFees';
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
        ),
        1 => 
        array (
          0 => 'name',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'mks_custompaymentplan_mks_customplanfees_name',
            'label' => 'LBL_MKS_CUSTOMPAYMENTPLAN_MKS_CUSTOMPLANFEES_FROM_MKS_CUSTOMPAYMENTPLAN_TITLE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'amount',
            'label' => 'LBL_AMOUNT',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'partial_mount_c',
            'label' => 'LBL_PARTIAL_MOUNT',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'amount_interest_c',
            'label' => 'LBL_AMOUNT_INTEREST',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'expiration',
            'label' => 'LBL_EXPIRATION',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'payment_status_c',
            'studio' => 'visible',
            'label' => 'LBL_PAYMENT_STATUS',
          ),
          1 => '',
        ),
        8 => 
        array (
          0 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
;
?>
