<?php
$module_name = 'mks_GroupSchedule';
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
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'day',
            'studio' => 'visible',
            'label' => 'LBL_DAY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'start_time',
            'label' => 'LBL_START_TIME',
          ),
          1 => 
          array (
            'name' => 'end_time',
            'label' => 'LBL_END_TIME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'classroom',
            'studio' => 'visible',
            'label' => 'LBL_CLASSROOM',
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
