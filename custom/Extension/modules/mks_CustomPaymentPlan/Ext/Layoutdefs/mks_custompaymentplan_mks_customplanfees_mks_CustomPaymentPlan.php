<?php
 // created: 2018-11-01 22:42:13
$layout_defs["mks_CustomPaymentPlan"]["subpanel_setup"]['mks_custompaymentplan_mks_customplanfees'] = array (
  'order' => 100,
  'module' => 'mks_CustomPlanFees',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'n_fee_c,expiration',
  'title_key' => 'LBL_MKS_CUSTOMPAYMENTPLAN_MKS_CUSTOMPLANFEES_FROM_MKS_CUSTOMPLANFEES_TITLE',
  'get_subpanel_data' => 'mks_custompaymentplan_mks_customplanfees',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),    
  ),
);
