<?php
$viewdefs ['Opportunities'] = 
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
      'javascript' => '{$PROBABILITY_SCRIPT}',
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ASSIGNMENT' => 
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
          0 => 
          array (
            'name' => 'account_name',
          ),
          1 => 'date_closed',
        ),
        1 => 
        array (
          0 => 'sales_stage',
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'means_notice_c',
            'studio' => 'visible',
            'label' => 'LBL_MEANS_NOTICE',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'means_notice1_c',
            'studio' => 'visible',
            'label' => 'LBL_MEANS_NOTICE1',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'next_call_c',
            'label' => 'LBL_NEXT_CALL',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'ads_id_c',
            'label' => 'LBL_ADS_ID',
          ),
          1 => '',
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
          ),
        ),
      ),
    ),
  ),
);
;
?>
