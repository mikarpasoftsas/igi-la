<?php
$module_name = 'mks_Assists';
$listViewDefs [$module_name] = 
array (
  'ASSIS_DATE_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_ASSIS_DATE',
    'width' => '10%',
  ),
  'MKS_ACADEMICGROUPS_MKS_ASSISTS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MKS_ACADEMICGROUPS_MKS_ASSISTS_1_FROM_MKS_ACADEMICGROUPS_TITLE',
    'id' => 'MKS_ACADEMICGROUPS_MKS_ASSISTS_1MKS_ACADEMICGROUPS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'TEACHER_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TEACHER',
    'id' => 'MKS_TEACHER_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
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
