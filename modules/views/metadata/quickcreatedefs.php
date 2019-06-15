<?php
$module_name = 'mks_CoursesDetail';
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
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'course',
            'studio' => 'visible',
            'label' => 'LBL_COURSE',
          ),
          1 => 
          array (
            'name' => 'matter',
            'studio' => 'visible',
            'label' => 'LBL_MATTER',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'type_matter',
            'studio' => 'visible',
            'label' => 'LBL_TYPE_MATTER',
          ),
          1 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
;
?>
