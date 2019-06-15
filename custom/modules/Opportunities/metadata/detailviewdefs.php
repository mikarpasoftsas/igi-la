<?php
$viewdefs ['Opportunities'] = 
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
        'LBL_DETAILVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'custom/modules/Opportunities/js/messages.js',
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
            'name' => 'id_autoincrement_c',
            'label' => 'LBL_ID_AUTOINCREMENT_C',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 'account_name',
          1 => '',
        ),
        2 => 
        array (
          0 => 'date_closed',
          1 => '',
        ),
        3 => 
        array (
          0 => 'sales_stage',
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
            'name' => 'means_notice_c',
            'studio' => 'visible',
            'label' => 'LBL_MEANS_NOTICE',
          ),
          1 => '',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'means_notice1_c',
            'studio' => 'visible',
            'label' => 'LBL_MEANS_NOTICE1',
          ),
          1 => '',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
          1 => '',
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'ads_id_c',
            'label' => 'LBL_ADS_ID',
          ),
          1 => '',
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'nl2br' => true,
          ),
        ),
      ),
      'lbl_detailview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'date_modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
