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
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
        ),
        1 => 
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
        2 => 
        array (
          0 => 
          array (
            'name' => 'type_income',
            'studio' => 'visible',
            'label' => 'LBL_TYPE_INCOME',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'currency_id',
            'studio' => 'visible',
            'label' => 'LBL_CURRENCY',
          ),
          1 => 
          array (
            'name' => 'amount',
            'label' => 'LBL_AMOUNT',
          ),
        ),
        4 => 
        array (
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'movtype',
            'studio' => 'visible',
            'label' => 'LBL_MOVTYPE',
          ),
        ),
        6 => 
        array (
          0 => 'assigned_user_name',
        ),
        7 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
