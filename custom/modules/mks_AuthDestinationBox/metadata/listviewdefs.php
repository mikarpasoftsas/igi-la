<?php
$module_name = 'mks_AuthDestinationBox';
$listViewDefs [$module_name] = 
array (
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
