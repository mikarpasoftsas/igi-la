<?php
$module_name = 'mks_AcademicGroups';
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
        'LBL_DETAILVIEW_PANEL1' => 
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
          0 => 
          array (
            'name' => 'id_autoincrement',
            'label' => 'LBL_ID_AUTOINCREMENT',
          ),
          1 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'courses',
            'studio' => 'visible',
            'label' => 'LBL_COURSES',
          ),
          1 => 
          array (
            'name' => 'start_date',
            'label' => 'LBL_START_DATE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'end_date',
            'label' => 'LBL_END_DATE',
          ),
          1 => 
          array (
            'name' => 'quantity',
            'label' => 'LBL_QUANTITY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'type',
            'studio' => 'visible',
            'label' => 'LBL_TYPE',
          ),
          1 => 'assigned_user_name',
        ),
      ),
      'lbl_detailview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'occupation_html_c',
            'studio' => 'visible',
            'label' => 'LBL_OCCUPATION_HTML',
          ),
        ),
      ),
    ),
  ),
);
;
?>
