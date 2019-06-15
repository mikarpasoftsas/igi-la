<?php
$module_name='mks_GroupSchedule';
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
      'popup_module' => 'mks_GroupSchedule',
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
	  'widget_class' => 'SubPanelDetailViewLink',
    ),
    'day' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_DAY',
      'width' => '10%',
      'default' => true,
    ),
    'start_time' => 
    array (
      'type' => 'int',
      'vname' => 'LBL_START_TIME',
      'width' => '10%',
      'default' => true,
    ),
    'end_time' => 
    array (
      'type' => 'int',
      'vname' => 'LBL_END_TIME',
      'width' => '10%',
      'default' => true,
    ),
    'classroom' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_CLASSROOM',
      'id' => 'MKS_CLASSROOM_ID_C',
      'link' => true,
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'mks_Classroom',
      'target_record_key' => 'mks_classroom_id_c',
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
      'module' => 'mks_GroupSchedule',
      'width' => '4%',
      'default' => true,
    ),
	'delete_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelDeleteButton',
      'module' => 'mks_GroupMatters',
      'width' => '5%',
      'default' => true,
    ),
	/*
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'mks_GroupSchedule',
      'width' => '5%',
      'default' => true,
    ),
	*/
  ),
);