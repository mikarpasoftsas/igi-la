<?php
$module_name = 'mks_PaymentsCheck';
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
            'name' => 'check_number_c',
            'label' => 'LBL_CHECK_NUMBER',
          ),
          1 => 
          array (
            'name' => 'mks_bank_mks_paymentscheck_1_name',
            'label' => 'LBL_MKS_BANK_MKS_PAYMENTSCHECK_1_FROM_MKS_BANK_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'payment_date_c',
            'label' => 'LBL_PAYMENT_DATE',
          ),
          1 => 
          array (
            'name' => 'mks_registrationreceipts_mks_paymentscheck_1_name',
            'label' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_PAYMENTSCHECK_1_FROM_MKS_REGISTRATIONRECEIPTS_TITLE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'currency_c',
            'studio' => 'visible',
            'label' => 'LBL_CURRENCY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'amount_c',
            'label' => 'LBL_AMOUNT',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'exchange_rate_c',
            'label' => 'LBL_EXCHANGE_RATE',
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
