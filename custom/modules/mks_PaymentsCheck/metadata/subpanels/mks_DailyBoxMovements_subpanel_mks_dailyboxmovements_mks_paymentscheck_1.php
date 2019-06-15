<?php
// created: 2019-05-18 15:19:08
$subpanel_layout['list_fields'] = array (
  'amount_c' => 
  array (
    'type' => 'float',
    'default' => true,
    'vname' => 'LBL_AMOUNT',
    'width' => '10%',
  ),
  'exchange_rate_c' => 
  array (
    'type' => 'float',
    'default' => true,
    'vname' => 'LBL_EXCHANGE_RATE',
    'width' => '10%',
  ),
  'currency_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_CURRENCY',
    'width' => '10%',
  ),
  'mks_registrationreceipts_mks_paymentscheck_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_PAYMENTSCHECK_1_FROM_MKS_REGISTRATIONRECEIPTS_TITLE',
    'id' => 'MKS_REGISTA5A7ECEIPTS_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'mks_RegistrationReceipts',
    'target_record_key' => 'mks_regista5a7eceipts_ida',
  ),
);