<?php
$module_name='mks_CustomPaymentPlan';
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
      'popup_module' => 'mks_CustomPaymentPlan',
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
   /*'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'mks_CustomPaymentPlan',
      'width' => '5%',
      'default' => true,
    ),
   */
  ),
);