<?php
 // created: 2018-09-24 16:25:50
$layout_defs["SecurityGroups"]["subpanel_setup"]['mks_bank_securitygroups'] = array (
  'order' => 100,
  'module' => 'mks_Bank',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_BANK_SECURITYGROUPS_FROM_MKS_BANK_TITLE',
  'get_subpanel_data' => 'mks_bank_securitygroups',
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
