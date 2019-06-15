<?php
$module_name = 'mks_AuthOriginBox';
$listViewDefs [$module_name] = 
array (
  'MKS_BOX_MKS_AUTHORIGINBOX_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MKS_BOX_MKS_AUTHORIGINBOX_1_FROM_MKS_BOX_TITLE',
    'id' => 'MKS_BOX_MKS_AUTHORIGINBOX_1MKS_BOX_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'AUTH_USER_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_AUTH_USER',
    'id' => 'USER_ID_C',
    'link' => true,
    'width' => '10%',
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
