<?php
$popupMeta = array (
    'moduleMain' => 'mks_AcademicGroups',
    'varName' => 'mks_AcademicGroups',
    'orderBy' => 'mks_academicgroups.name',
    'whereClauses' => array (
  'id_autoincrement' => 'mks_academicgroups.id_autoincrement',
  'courses' => 'mks_academicgroups.courses',
  'start_date' => 'mks_academicgroups.start_date',
  'end_date' => 'mks_academicgroups.end_date',
  'type' => 'mks_academicgroups.type',
  'quantity' => 'mks_academicgroups.quantity',
),
    'searchInputs' => array (
  4 => 'id_autoincrement',
  5 => 'courses',
  6 => 'start_date',
  7 => 'end_date',
  8 => 'type',
  9 => 'quantity',
),
    'searchdefs' => array (
  'id_autoincrement' => 
  array (
    'type' => 'autoincrement',
    'label' => 'LBL_ID_AUTOINCREMENT',
    'width' => '10%',
    'name' => 'id_autoincrement',
  ),
  'courses' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_COURSES',
    'id' => 'MKS_COURSES_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'courses',
  ),
  'start_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_START_DATE',
    'width' => '10%',
    'name' => 'start_date',
  ),
  'end_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_END_DATE',
    'width' => '10%',
    'name' => 'end_date',
  ),
  'type' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'name' => 'type',
  ),
  'quantity' => 
  array (
    'type' => 'int',
    'label' => 'LBL_QUANTITY',
    'width' => '10%',
    'name' => 'quantity',
  ),
),
    'listviewdefs' => array (
  'ID_AUTOINCREMENT' => 
  array (
    'type' => 'autoincrement',
    'label' => 'LBL_ID_AUTOINCREMENT',
    'width' => '10%',
    'default' => true,
    'name' => 'id_autoincrement',
    'link' => true,
  ),
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'COURSES' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_COURSES',
    'id' => 'MKS_COURSES_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'courses',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '60%',
    'default' => true,
    'name' => 'description',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
),
);
