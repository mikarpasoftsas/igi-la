<?php
 // created: 2019-02-25 17:03:35
$layout_defs["mks_RegistrationReceipts"]["subpanel_setup"]['mks_registrationreceipts_mks_paymentscheck_1'] = array (
  'order' => 100,
  'module' => 'mks_PaymentsCheck',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_PAYMENTSCHECK_1_FROM_MKS_PAYMENTSCHECK_TITLE',
  'get_subpanel_data' => 'mks_registrationreceipts_mks_paymentscheck_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
