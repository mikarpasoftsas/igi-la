<?php
$module_name='mks_MessagesFb';
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
      'popup_module' => 'mks_MessagesFb',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'type' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_TYPE',
      'width' => '10%',
      'default' => true,
	  'widget_class' => 'SubPanelDetailViewLink',
    ),
    'description' => 
    array (
      'type' => 'text',
      'studio' => 'visible',
      'vname' => 'LBL_DESCRIPTION',
      'sortable' => false,
      'width' => '60%',
      'default' => true,
    ),
    'date_entered' => 
    array (
      'type' => 'datetime',
      'vname' => 'LBL_DATE_ENTERED',
      'width' => '10%',
      'default' => true,
    ),
  ),
);