<?php
$module_name='mks_AcademicGroups';
$subpanel_layout = array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'mks_AcademicGroups',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'id_autoincrement' => 
    array (
      'type' => 'autoincrement',
      'vname' => 'LBL_ID_AUTOINCREMENT',
      'width' => '10%',
      'default' => true,
    ),
    'courses' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_COURSES',
      'id' => 'MKS_COURSES_ID_C',
      'link' => true,
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'mks_Courses',
      'target_record_key' => 'mks_courses_id_c',
    ),
    'type' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_TYPE',
      'width' => '10%',
      'default' => true,
    ),
    'start_date' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_START_DATE',
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
      'module' => 'mks_AcademicGroups',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'mks_AcademicGroups',
      'width' => '5%',
      'default' => true,
    ),
  ),
);