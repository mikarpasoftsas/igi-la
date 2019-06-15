<?php
 // created: 2018-11-28 23:31:51
$layout_defs["mks_PaymentPlan"]["subpanel_setup"]['mks_paymentplan_securitygroups_1'] = array (
  'order' => 100,
  'module' => 'SecurityGroups',
  'subpanel_name' => 'admin',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_PAYMENTPLAN_SECURITYGROUPS_1_FROM_SECURITYGROUPS_TITLE',
  'get_subpanel_data' => 'mks_paymentplan_securitygroups_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
