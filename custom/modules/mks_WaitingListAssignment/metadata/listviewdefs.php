<?php
$module_name = 'mks_WaitingListAssignment';
$listViewDefs [$module_name] = 
array (
  'ID_AUTOINCREMENT_C' => 
  array (
    'type' => 'autoincrement',
    'default' => true,
    'label' => 'LBL_ID_AUTOINCREMENT_C',
    'width' => '10%',
  ),
  'WAITINGLIST' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_WAITINGLIST',
    'id' => 'MKS_WAITINGLIST_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'DAY_AVAILABLE' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_DAY_AVAILABLE',
    'width' => '10%',
    'default' => true,
  ),
  'TURN' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TURN',
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
