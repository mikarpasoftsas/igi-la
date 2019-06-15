<?php
// created: 2019-05-18 15:18:52
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
  'mks_registrationreceipts_mks_paymentstransfer_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_PAYMENTSTRANSFER_1_FROM_MKS_REGISTRATIONRECEIPTS_TITLE',
    'id' => 'MKS_REGIST09E2ECEIPTS_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'mks_RegistrationReceipts',
    'target_record_key' => 'mks_regist09e2eceipts_ida',
  ),
);