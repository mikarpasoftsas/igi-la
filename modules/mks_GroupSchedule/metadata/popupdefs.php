<?php
$popupMeta = array (
    'moduleMain' => 'mks_GroupSchedule',
    'varName' => 'mks_GroupSchedule',
    'orderBy' => 'mks_groupschedule.name',
    'whereClauses' => array (
  'id_autoincrement' => 'mks_groupschedule.id_autoincrement',
  'classroom' => 'mks_groupschedule.classroom',
  'day' => 'mks_groupschedule.day',
),
    'searchInputs' => array (
  4 => 'id_autoincrement',
  5 => 'classroom',
  6 => 'day',
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
);
