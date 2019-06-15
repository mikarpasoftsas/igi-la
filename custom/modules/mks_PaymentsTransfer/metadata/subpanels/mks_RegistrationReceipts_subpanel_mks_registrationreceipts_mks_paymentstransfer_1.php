<?php
// created: 2019-03-14 17:10:47
$subpanel_layout['list_fields'] = array (
  'currency_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_CURRENCY',
    'width' => '10%',
  ),
  'amount_c' => 
  array (
    'type' => 'currency',
    'default' => true,
    'vname' => 'LBL_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
  ),
  'exchange_rate_c' => 
  array (
    'type' => 'float',
    'default' => true,
    'vname' => 'LBL_EXCHANGE_RATE',
    'width' => '10%',
  ),
  'mks_box_mks_paymentstransfer_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_TITLE_CUSTOM_BOX',
    'id' => 'MKS_BOX_MKS_PAYMENTSTRANSFER_1MKS_BOX_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'mks_Box',
    'target_record_key' => 'mks_box_mks_paymentstransfer_1mks_box_ida',
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'mks_PaymentsTransfer',
    'width' => '4%',
    'default' => true,
  ),
);
