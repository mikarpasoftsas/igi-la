<?php
$module_name = 'mks_RegistrationReceipts';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'id_autoincrement_c' => 
      array (
        'type' => 'autoincrement',
        'default' => true,
        'label' => 'LBL_ID_AUTOINCREMENT_C',
        'width' => '10%',
        'name' => 'id_autoincrement_c',
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
      'receip_type_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_RECEIP_TYPE',
        'id' => 'MKS_RECEIPTYPE_ID_C',
        'link' => true,
        'width' => '10%',
        'name' => 'receip_type_c',
      ),
      'mks_registration_mks_registrationreceipts_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_MKS_REGISTRATION_MKS_REGISTRATIONRECEIPTS_1_FROM_MKS_REGISTRATION_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'MKS_REGISTRATION_MKS_REGISTRATIONRECEIPTS_1MKS_REGISTRATION_IDA',
        'name' => 'mks_registration_mks_registrationreceipts_1_name',
      ),
      'mks_custompaymentplan_mks_registrationreceipts_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_MKS_CUSTOMPAYMENTPLAN_MKS_REGISTRATIONRECEIPTS_1_FROM_MKS_CUSTOMPAYMENTPLAN_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'MKS_CUSTOM8555ENTPLAN_IDA',
        'name' => 'mks_custompaymentplan_mks_registrationreceipts_1_name',
      ),
      'status_registration_receipts_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_STATUS_REGISTRATION_RECEIPTS',
        'width' => '10%',
        'name' => 'status_registration_receipts_c',
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
