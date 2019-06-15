<?php
$viewdefs ['Opportunities'] = 
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
      'javascript' => '{$PROBABILITY_SCRIPT}
	  {sugar_getscript file="custom/modules/Opportunities/js/messages.js"}',
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
      'syncDetailEditViews' => false,
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'custom/modules/Opportunities/script_op.js',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'account_name',
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_closed',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 'sales_stage',
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'next_call_c',
            'label' => 'LBL_NEXT_CALL',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'means_notice_c',
            'studio' => 'visible',
            'label' => 'LBL_MEANS_NOTICE',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'means_notice1_c',
            'studio' => 'visible',
            'label' => 'LBL_MEANS_NOTICE1',
          ),
          1 => '',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'ads_id_c',
            'label' => 'LBL_ADS_ID',
          ),
          1 => '',
        ),
        7 => 
        array (
          0 => 'description',
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 'assigned_user_name',
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
