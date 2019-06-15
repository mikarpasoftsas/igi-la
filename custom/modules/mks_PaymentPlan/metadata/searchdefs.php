<?php
$module_name = 'mks_PaymentPlan';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
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
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'mks_paymentplan_mks_courses_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_MKS_PAYMENTPLAN_MKS_COURSES_FROM_MKS_COURSES_TITLE',
        'id' => 'MKS_PAYMENTPLAN_MKS_COURSESMKS_COURSES_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'mks_paymentplan_mks_courses_name',
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
