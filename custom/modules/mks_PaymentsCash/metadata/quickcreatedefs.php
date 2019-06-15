<?php
$module_name = 'mks_PaymentsCash';
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
          'file' => 'custom/modules/mks_PaymentsCash/js/quickcreate.js',
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
            'name' => 'mks_registrationreceipts_mks_paymentscash_1_name',
            'label' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_PAYMENTSCASH_1_FROM_MKS_REGISTRATIONRECEIPTS_TITLE',
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
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'exchange_rate_c',
            'label' => 'LBL_EXCHANGE_RATE',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'mks_box_mks_paymentscash_1_name',
            'label' => 'LBL_TITLE_CUSTOM_BOX',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        6 => 
        array (
          0 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
;
?>
