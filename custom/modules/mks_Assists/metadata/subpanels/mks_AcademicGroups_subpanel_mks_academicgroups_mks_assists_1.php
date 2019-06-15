<?php
// created: 2019-04-29 22:57:55
$subpanel_layout['list_fields'] = array (
  'assis_date_c' => 
  array (
    'type' => 'date',
    'default' => true,
    'vname' => 'LBL_ASSIS_DATE',
    'width' => '10%',
	'link'=>true,
  ),
  'teacher_c' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_TEACHER',
    'id' => 'MKS_TEACHER_ID_C',
    'link' => true,
    'width' => '10%',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'mks_Teacher',
    'target_record_key' => 'mks_teacher_id_c',
  ),
  'description' => 
  array (
    'type' => 'text',
    'vname' => 'LBL_DESCRIPTION',
    'sortable' => false,
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
    'module' => 'mks_Assists',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'mks_Assists',
    'width' => '5%',
    'default' => true,
  ),
);