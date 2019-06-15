<?php
// created: 2019-03-21 20:49:06
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
  'date_entered' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'card_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_CARD',
    'width' => '10%',
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'mks_PaymentsCard',
    'width' => '4%',
    'default' => true,
  ),
);