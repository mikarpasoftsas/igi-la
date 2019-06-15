<?php
// created: 2019-03-14 17:45:35
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
  'mks_bank_mks_paymentscheck_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_MKS_BANK_MKS_PAYMENTSCHECK_1_FROM_MKS_BANK_TITLE',
    'id' => 'MKS_BANK_MKS_PAYMENTSCHECK_1MKS_BANK_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'mks_Bank',
    'target_record_key' => 'mks_bank_mks_paymentscheck_1mks_bank_ida',
  ),
  'payment_date_c' => 
  array (
    'type' => 'date',
    'default' => true,
    'vname' => 'LBL_PAYMENT_DATE',
    'width' => '10%',
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'mks_PaymentsCheck',
    'width' => '4%',
    'default' => true,
  ),
);