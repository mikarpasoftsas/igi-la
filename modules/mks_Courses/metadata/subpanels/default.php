<?php
$module_name='mks_Courses';
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
      'popup_module' => 'mks_Courses',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '45%',
      'default' => true,
    ),
    'theory' => 
    array (
      'type' => 'bool',
      'default' => true,
      'vname' => 'LBL_THEORY',
      'width' => '10%',
    ),
    'practice' => 
    array (
      'type' => 'bool',
      'default' => true,
      'vname' => 'LBL_PRACTICE',
      'width' => '10%',
    ),
    'type_course' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_TYPE_COURSE',
      'width' => '10%',
      'default' => true,
    ),
    'number_classes' => 
    array (
      'type' => 'int',
      'vname' => 'LBL_NUMBER_CLASSES',
      'width' => '10%',
      'default' => true,
    ),
    'status_course' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_STATUS_COURSE',
      'width' => '10%',
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
      'module' => 'mks_Courses',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'mks_Courses',
      'width' => '5%',
      'default' => true,
    ),
  ),
);