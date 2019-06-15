<?php
$module_name = 'mks_WaitingListAssignment';
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
            'name' => 'waitinglist',
            'studio' => 'visible',
            'label' => 'LBL_WAITINGLIST',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'day_available',
            'studio' => 'visible',
            'label' => 'LBL_DAY_AVAILABLE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'turn',
            'studio' => 'visible',
            'label' => 'LBL_TURN',
          ),
        ),
        3 => 
        array (
          0 => 'assigned_user_name',
        ),
        4 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
