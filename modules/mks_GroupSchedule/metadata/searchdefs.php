<?php
$module_name = 'mks_GroupSchedule';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'id_autoincrement' => 
      array (
        'type' => 'autoincrement',
        'label' => 'LBL_ID_AUTOINCREMENT',
        'width' => '10%',
        'default' => true,
        'name' => 'id_autoincrement',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'id_autoincrement' => 
      array (
        'type' => 'autoincrement',
        'label' => 'LBL_ID_AUTOINCREMENT',
        'width' => '10%',
        'default' => true,
        'name' => 'id_autoincrement',
      ),
      'day' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_DAY',
        'width' => '10%',
        'default' => true,
        'name' => 'day',
      ),
      'start_time' => 
      array (
        'type' => 'int',
        'label' => 'LBL_START_TIME',
        'width' => '10%',
        'default' => true,
        'name' => 'start_time',
      ),
      'end_time' => 
      array (
        'type' => 'int',
        'label' => 'LBL_END_TIME',
        'width' => '10%',
        'default' => true,
        'name' => 'end_time',
      ),
      'classroom' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_CLASSROOM',
        'id' => 'MKS_CLASSROOM_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'classroom',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
