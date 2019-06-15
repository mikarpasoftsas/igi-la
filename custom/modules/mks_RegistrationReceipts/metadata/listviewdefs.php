<?php
$module_name = 'mks_RegistrationReceipts';
$listViewDefs [$module_name] = 
array (
  'RECEIP_TYPE_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_RECEIP_TYPE',
    'id' => 'MKS_RECEIPTYPE_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'MKS_REGISTRATION_MKS_REGISTRATIONRECEIPTS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MKS_REGISTRATION_MKS_REGISTRATIONRECEIPTS_1_FROM_MKS_REGISTRATION_TITLE',
    'id' => 'MKS_REGISTRATION_MKS_REGISTRATIONRECEIPTS_1MKS_REGISTRATION_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'MKS_CUSTOMPAYMENTPLAN_MKS_REGISTRATIONRECEIPTS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MKS_CUSTOMPAYMENTPLAN_MKS_REGISTRATIONRECEIPTS_1_FROM_MKS_CUSTOMPAYMENTPLAN_TITLE',
    'id' => 'MKS_CUSTOM8555ENTPLAN_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
);
;
?>
