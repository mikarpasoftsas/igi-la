<?php
$module_name = 'mks_DiscountRules';
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
            'name' => 'initial_day',
            'label' => 'LBL_INITIAL_DAY',
          ),
          1 => 
          array (
            'name' => 'final_day',
            'label' => 'LBL_FINAL_DAY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'discountrule',
            'studio' => 'visible',
            'label' => 'LBL_DISCOUNTRULE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'value',
            'label' => 'LBL_VALUE',
          ),
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
