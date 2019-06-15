<?php
$module_name = 'mks_AcademicGroups';
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
      'courses' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_COURSES',
        'id' => 'MKS_COURSES_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'courses',
      ),
      'start_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_START_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'start_date',
      ),
      'end_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_END_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'end_date',
      ),
      'type' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_TYPE',
        'width' => '10%',
        'default' => true,
        'name' => 'type',
      ),
      'quantity' => 
      array (
        'type' => 'int',
        'label' => 'LBL_QUANTITY',
        'width' => '10%',
        'default' => true,
        'name' => 'quantity',
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
