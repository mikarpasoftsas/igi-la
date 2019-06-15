<?php
// created: 2019-05-01 15:55:03
$subpanel_layout['list_fields'] = array (
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
  'payment_status_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_PAYMENT_STATUS',
    'width' => '10%',
  ),
  'amount' => 
  array (
    'type' => 'decimal',
    'vname' => 'LBL_AMOUNT',
    'width' => '10%',
    'default' => true,
  ),
  'partial_mount_c' => 
  array (
    'type' => 'float',
    'default' => true,
    'vname' => 'LBL_PARTIAL_MOUNT',
    'width' => '10%',
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
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'mks_CustomPlanFees',
    'width' => '5%',
    'default' => true,
  ),
  'delete_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelDeleteButton',
    'module' => 'mks_CustomPlanFees',
    'width' => '5%',
    'default' => true,
  ),
);