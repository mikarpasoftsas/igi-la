<?php
$module_name = 'mks_PaymentsTransfer';
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
      'mks_registrationreceipts_mks_paymentstransfer_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_PAYMENTSTRANSFER_1_FROM_MKS_REGISTRATIONRECEIPTS_TITLE',
        'id' => 'MKS_REGIST09E2ECEIPTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'mks_registrationreceipts_mks_paymentstransfer_1_name',
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
