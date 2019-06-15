<?php
$dashletData['mks_AcademicGroupsDashlet']['searchFields'] = array (
  'id_autoincrement' => 
  array (
    'default' => '',
  ),
  'courses' => 
  array (
    'default' => '',
  ),
  'type' => 
  array (
    'default' => '',
  ),
  'start_date' => 
  array (
    'default' => '',
  ),
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
);
$dashletData['mks_AcademicGroupsDashlet']['columns'] = array (
  'id_autoincrement' => 
  array (
    'type' => 'autoincrement',
    'label' => 'LBL_ID_AUTOINCREMENT',
    'width' => '10%',
    'default' => true,
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
    'default' => true,
    'name' => 'courses',
  ),
  'start_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_START_DATE',
    'width' => '10%',
    'default' => true,
    'name' => 'start_date',
  ),
  'end_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_END_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'type' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
