<?php
$module_name = 'mks_CustomPaymentPlan';
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
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'status_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_STATUS',
        'width' => '10%',
        'name' => 'status_c',
      ),
      'mks_custompaymentplan_mks_registration_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_MKS_CUSTOMPAYMENTPLAN_MKS_REGISTRATION_FROM_MKS_REGISTRATION_TITLE',
        'id' => 'MKS_CUSTOMPAYMENTPLAN_MKS_REGISTRATIONMKS_REGISTRATION_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'mks_custompaymentplan_mks_registration_name',
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
