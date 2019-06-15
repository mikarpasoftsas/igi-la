<?php
 // created: 2019-03-14 15:32:06
$layout_defs["Accounts"]["subpanel_setup"]['accounts_mks_management_1'] = array (
  'order' => 100,
  'module' => 'mks_Management',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_MKS_MANAGEMENT_1_FROM_MKS_MANAGEMENT_TITLE',
  'get_subpanel_data' => 'accounts_mks_management_1',
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
