<?php
$module_name = 'mks_Movement';
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
          'file' => 'custom/modules/mks_Movement/js/editview.js',
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
            'name' => 'date_movement',
            'label' => 'LBL_DATE_MOVEMENT',
          ),
          1 => 
          array (
            'name' => 'way_pay',
            'studio' => 'visible',
            'label' => 'LBL_WAY_PAY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'currency_c',
            'studio' => 'visible',
            'label' => 'LBL_CURRENCY_C',
          ),
          1 => 
          array (
            'name' => 'type_income',
            'studio' => 'visible',
            'label' => 'LBL_TYPE_INCOME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'amount',
            'label' => 'LBL_AMOUNT',
          ),
          1 => 
          array (
            'name' => 'exchange_rate_c',
            'label' => 'LBL_EXCHANGE_RATE_C',
          ),
        ),
        3 => 
        array (
          0 => 'name',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'movtype',
            'studio' => 'visible',
            'label' => 'LBL_MOVTYPE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'origin_box',
            'studio' => 'visible',
            'label' => 'LBL_ORIGIN_BOX',
          ),
          1 => 
          array (
            'name' => 'destination_box',
            'studio' => 'visible',
            'label' => 'LBL_DESTINATION_BOX',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'voucher_c',
            'studio' => 'visible',
            'label' => 'LBL_VOUCHER',
          ),
          1 => '',
        ),
        7 => 
        array (
          0 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
;
?>
