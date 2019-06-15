<?php
$module_name = 'mks_CustomDiscountRules';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
          1 => 
          array (
            'name' => 'mks_customdiscountrules_mks_custompaymentplan_name',
            'label' => 'LBL_MKS_CUSTOMDISCOUNTRULES_MKS_CUSTOMPAYMENTPLAN_FROM_MKS_CUSTOMPAYMENTPLAN_TITLE',
          ),
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
          1 => 
          array (
            'name' => 'type_c',
            'studio' => 'visible',
            'label' => 'LBL_TYPE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'value',
            'label' => 'LBL_VALUE',
          ),
          1 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
;
?>
