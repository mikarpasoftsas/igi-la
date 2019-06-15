<?php
// created: 2018-11-16 22:30:24
$subpanel_layout['list_fields'] = array (
  'id_autoincrement' => 
  array (
    'type' => 'autoincrement',
    'vname' => 'LBL_ID_AUTOINCREMENT',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
  ),
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '25%',
    'default' => true,
  ),
  'amount' => 
  array (
    'type' => 'decimal',
    'vname' => 'LBL_AMOUNT',
    'width' => '25%',
    'default' => true,
  ),
  'status_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_STATUS',
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
    'module' => 'mks_CustomPaymentPlan',
    'width' => '4%',
    'default' => true,
  ),
);