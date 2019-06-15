<?php
$module_name='mks_Refinances';
$subpanel_layout = array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'mks_Refinances',
    ),
  ),
  'refresh_page'=>1,
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
    'debt' => 
    array (
      'type' => 'float',
      'default' => true,
      'vname' => 'LBL_DEBT',
      'width' => '10%',
    ),
    'surcharge' => 
    array (
      'type' => 'float',
      'default' => true,
      'vname' => 'LBL_SURCHARGE',
      'width' => '10%',
    ),
    'discount' => 
    array (
      'type' => 'float',
      'default' => true,
      'vname' => 'LBL_DISCOUNT',
      'width' => '10%',
    ),
    'total_debt' => 
    array (
      'type' => 'float',
      'default' => true,
      'vname' => 'LBL_TOTAL_DEBT',
      'width' => '10%',
    ),
    'date_modified' => 
    array (
      'vname' => 'LBL_DATE_MODIFIED',
      'width' => '45%',
      'default' => true,
    ),
  ),
);