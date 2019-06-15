<?php
$popupMeta = array (
    'moduleMain' => 'mks_GroupSchedule',
    'varName' => 'mks_GroupSchedule',
    'orderBy' => 'mks_groupschedule.name',
    'whereClauses' => array (
  'id_autoincrement' => 'mks_groupschedule.id_autoincrement',
  'day' => 'mks_groupschedule.day',
  'classroom' => 'mks_groupschedule.classroom',
),
    'searchInputs' => array (
  4 => 'id_autoincrement',
  6 => 'day',
  7 => 'classroom',
),
    'searchdefs' => array (
  'id_autoincrement' => 
  array (
    'type' => 'autoincrement',
    'label' => 'LBL_ID_AUTOINCREMENT',
    'width' => '10%',
    'name' => 'id_autoincrement',
  ),
  'classroom' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_CLASSROOM',
    'id' => 'MKS_CLASSROOM_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'classroom',
  ),
  'day' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_DAY',
    'width' => '10%',
    'name' => 'day',
  ),
),
    'listviewdefs' => array (
  'ID_AUTOINCREMENT' => 
  array (
    'type' => 'autoincrement',
    'label' => 'LBL_ID_AUTOINCREMENT',
    'width' => '10%',
    'default' => true,
    'link' => true,
    'name' => 'id_autoincrement',
  ),
  'CLASSROOM' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_CLASSROOM',
    'id' => 'MKS_CLASSROOM_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'classroom',
  ),
  'MKS_ACADEMICGROUPS_MKS_GROUPSCHEDULE_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MKS_ACADEMICGROUPS_MKS_GROUPSCHEDULE_FROM_MKS_ACADEMICGROUPS_TITLE',
    'id' => 'MKS_ACADEMICGROUPS_MKS_GROUPSCHEDULEMKS_ACADEMICGROUPS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'mks_academicgroups_mks_groupschedule_name',
  ),
  'DAY' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_DAY',
    'width' => '10%',
    'default' => true,
    'name' => 'day',
  ),
  'START_TIME' => 
  array (
    'type' => 'int',
    'label' => 'LBL_START_TIME',
    'width' => '10%',
    'default' => true,
    'name' => 'start_time',
  ),
  'END_TIME' => 
  array (
    'type' => 'int',
    'label' => 'LBL_END_TIME',
    'width' => '10%',
    'default' => true,
    'name' => 'end_time',
  ),
),
);
