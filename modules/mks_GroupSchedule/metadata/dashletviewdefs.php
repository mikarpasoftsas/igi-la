<?php
$dashletData['mks_GroupScheduleDashlet']['searchFields'] = array (
  'id_autoincrement' => 
  array (
    'default' => '',
  ),
  'classroom' => 
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
$dashletData['mks_GroupScheduleDashlet']['columns'] = array (
  'id_autoincrement' => 
  array (
    'type' => 'autoincrement',
    'label' => 'LBL_ID_AUTOINCREMENT',
    'width' => '10%',
    'default' => true,
  ),
  'day' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_DAY',
    'width' => '10%',
    'default' => true,
  ),
  'start_time' => 
  array (
    'type' => 'int',
    'label' => 'LBL_START_TIME',
    'width' => '10%',
    'default' => true,
  ),
  'end_time' => 
  array (
    'type' => 'int',
    'label' => 'LBL_END_TIME',
    'width' => '10%',
    'default' => true,
  ),
  'classroom' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_CLASSROOM',
    'id' => 'MKS_CLASSROOM_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => false,
    'name' => 'name',
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
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
