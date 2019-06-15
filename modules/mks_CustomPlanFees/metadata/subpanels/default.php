<?php
$module_name='mks_CustomPlanFees';
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
      'popup_module' => 'mks_PlanFees',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
	'n_fee_c' => 
    array (
      'vname' => 'LBL_N_FEE',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '10%',
      'default' => true,
    ),
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '10%',
      'default' => true,
    ),	
    'amount' => 
    array (
      'type' => 'decimal',
      'vname' => 'LBL_AMOUNT',
      'width' => '10%',
      'default' => true,
    ),
    'expiration' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_EXPIRATION',
      'width' => '10%',
      'default' => true,
    ),
    'date_modified' => 
    array (
      'vname' => 'LBL_DATE_MODIFIED',
      'width' => '15%',
      'default' => true,
    ),
	'edit_button'=>array(
		'vname' => 'LBL_EDIT_BUTTON',
		'widget_class' => 'SubPanelEditButton',
		'module' => 'mks_CustomPlanFees',
		'width' => '5%',
	),	
	'delete_button' => 
	  array (
		'vname' => 'LBL_REMOVE',
		'widget_class' => 'SubPanelDeleteButton',
		'module' => 'mks_CustomPlanFees',
		'width' => '5%',
		'default' => true,
	),
  ),
);