<?php
$module_name = 'mks_GroupSchedule';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'id_autoincrement' => 
      array (
        'type' => 'autoincrement',
        'label' => 'LBL_ID_AUTOINCREMENT',
        'width' => '10%',
        'default' => true,
        'name' => 'id_autoincrement',
      ),
      'mks_academicgroups_mks_groupschedule_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_MKS_ACADEMICGROUPS_MKS_GROUPSCHEDULE_FROM_MKS_ACADEMICGROUPS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'MKS_ACADEMICGROUPS_MKS_GROUPSCHEDULEMKS_ACADEMICGROUPS_IDA',
        'name' => 'mks_academicgroups_mks_groupschedule_name',
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
      'mks_academicgroups_mks_groupschedule_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_MKS_ACADEMICGROUPS_MKS_GROUPSCHEDULE_FROM_MKS_ACADEMICGROUPS_TITLE',
        'id' => 'MKS_ACADEMICGROUPS_MKS_GROUPSCHEDULEMKS_ACADEMICGROUPS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'mks_academicgroups_mks_groupschedule_name',
      ),
      'id_autoincrement' => 
      array (
        'type' => 'autoincrement',
        'label' => 'LBL_ID_AUTOINCREMENT',
        'width' => '10%',
        'default' => true,
        'name' => 'id_autoincrement',
      ),
      'day' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_DAY',
        'width' => '10%',
        'default' => true,
        'name' => 'day',
      ),
      'start_time' => 
      array (
        'type' => 'int',
        'label' => 'LBL_START_TIME',
        'width' => '10%',
        'default' => true,
        'name' => 'start_time',
      ),
      'end_time' => 
      array (
        'type' => 'int',
        'label' => 'LBL_END_TIME',
        'width' => '10%',
        'default' => true,
        'name' => 'end_time',
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
