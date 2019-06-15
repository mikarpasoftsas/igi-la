<?php
$module_name = 'mks_CustomDiscountRules';
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
      'mks_customdiscountrules_mks_custompaymentplan_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_MKS_CUSTOMDISCOUNTRULES_MKS_CUSTOMPAYMENTPLAN_FROM_MKS_CUSTOMPAYMENTPLAN_TITLE',
        'id' => 'MKS_CUSTOM2713ENTPLAN_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'mks_customdiscountrules_mks_custompaymentplan_name',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
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
