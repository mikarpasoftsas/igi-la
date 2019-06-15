<?php
$module_name = 'mks_DailyBoxMovements';
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
            'name' => 'balance_c',
            'label' => 'LBL_BALANCE_C',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'date_box_c',
            'label' => 'LBL_DATE_BOX',
          ),
          1 => 
          array (
            'name' => 'box_c',
            'studio' => 'visible',
            'label' => 'LBL_BOX',
          ),
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
