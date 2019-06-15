<?php
// created: 2018-09-24 18:14:18
$subpanel_layout['list_fields'] = array (
  'id_autoincrement_c' => 
  array (
    'type' => 'autoincrement',
    'default' => true,
    'vname' => 'LBL_ID_AUTOINCREMENT_C',
    'width' => '10%',
    'widget_class' => 'SubPanelDetailViewLink',
  ),
  'course' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'vname' => 'LBL_COURSE',
    'id' => 'MKS_COURSES_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'mks_Courses',
    'target_record_key' => 'mks_courses_id_c',
  ),
  'day_available' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_DAY_AVAILABLE',
    'width' => '10%',
    'default' => true,
  ),
  'turn' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_TURN',
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '45%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'mks_InterestCourse',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'mks_InterestCourse',
    'width' => '5%',
    'default' => true,
  ),
);