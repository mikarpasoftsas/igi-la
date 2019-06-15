<?php
$module_name = 'mks_CustomDiscountRules';
$listViewDefs [$module_name] = 
array (
  'ID_AUTOINCREMENT' => 
  array (
    'type' => 'autoincrement',
    'label' => 'LBL_ID_AUTOINCREMENT',
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'MKS_CUSTOMDISCOUNTRULES_MKS_CUSTOMPAYMENTPLAN_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MKS_CUSTOMDISCOUNTRULES_MKS_CUSTOMPAYMENTPLAN_FROM_MKS_CUSTOMPAYMENTPLAN_TITLE',
    'id' => 'MKS_CUSTOM2713ENTPLAN_IDA',
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
