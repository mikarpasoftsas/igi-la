<?php
$module_name = 'mks_SubsidiaryUsers';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'search_name' => 
      array (
        'name' => 'search_name',
        'label' => 'LBL_NAME',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'last_name' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_LAST_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'last_name',
      ),
      'first_name' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_FIRST_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'first_name',
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
      0 => 'first_name',
      1 => 'last_name',
      2 => 'address_city',
      3 => 'created_by_name',
      4 => 'do_not_call',
      5 => 'email',
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
