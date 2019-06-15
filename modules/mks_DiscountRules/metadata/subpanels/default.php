<?php
$module_name='mks_DiscountRules';
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
      'popup_module' => 'mks_DiscountRules',
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
    'initial_day' => 
    array (
      'type' => 'int',
      'vname' => 'LBL_INITIAL_DAY',
      'width' => '10%',
      'default' => true,
    ),
    'final_day' => 
    array (
      'type' => 'int',
      'vname' => 'LBL_FINAL_DAY',
      'width' => '10%',
      'default' => true,
    ),
    'discountrule' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_DISCOUNTRULE',
      'width' => '10%',
      'default' => true,
    ),
    'value' => 
    array (
      'type' => 'decimal',
      'vname' => 'LBL_VALUE',
      'width' => '10%',
      'default' => true,
    ),
	'type_c' => 
    array (
      'type' => 'decimal',
      'vname' => 'LBL_TYPE',
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
      'module' => 'mks_DiscountRules',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'mks_DiscountRules',
      'width' => '5%',
      'default' => true,
    ),
  ),
);