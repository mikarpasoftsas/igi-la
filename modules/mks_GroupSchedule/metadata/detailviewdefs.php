<?php
$module_name = 'mks_GroupSchedule';
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
          0 => 
          array (
            'name' => 'id_autoincrement',
            'label' => 'LBL_ID_AUTOINCREMENT',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'day',
            'studio' => 'visible',
            'label' => 'LBL_DAY',
          ),
        ),
        2 => 
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
        3 => 
        array (
          0 => 
          array (
            'name' => 'classroom',
            'studio' => 'visible',
            'label' => 'LBL_CLASSROOM',
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
