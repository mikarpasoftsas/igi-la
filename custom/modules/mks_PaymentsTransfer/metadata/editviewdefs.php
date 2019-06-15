<?php
$module_name = 'mks_PaymentsTransfer';
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
            'name' => 'mks_registrationreceipts_mks_paymentstransfer_1_name',
            'label' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_PAYMENTSTRANSFER_1_FROM_MKS_REGISTRATIONRECEIPTS_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'currency_c',
            'studio' => 'visible',
            'label' => 'LBL_CURRENCY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'amount_c',
            'label' => 'LBL_AMOUNT',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'exchange_rate_c',
            'label' => 'LBL_EXCHANGE_RATE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'mks_box_mks_paymentstransfer_1_name',
            'label' => 'LBL_TITLE_CUSTOM_BOX',
          ),
        ),
        5 => 
        array (
          0 => 'assigned_user_name',
        ),
        6 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
