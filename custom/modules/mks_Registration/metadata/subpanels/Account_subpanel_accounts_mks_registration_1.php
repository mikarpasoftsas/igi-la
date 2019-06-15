<?php
// created: 2018-11-13 21:57:01
$subpanel_layout['list_fields'] = array (
  'reg_num_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_REG_NUM',
    'width' => '20%',
	'widget_class' => 'SubPanelDetailViewLink',
  ),
  'course' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'vname' => 'LBL_COURSE',
    'id' => 'MKS_COURSES_ID_C',
    'link' => true,
    'width' => '30%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'mks_Courses',
    'target_record_key' => 'mks_courses_id_c',
  ),
  'first_expiration' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_ FIRST_EXPIRATION',
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'created_by',
  ),
);