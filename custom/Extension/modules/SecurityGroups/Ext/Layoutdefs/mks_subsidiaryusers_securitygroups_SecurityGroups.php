<?php
 // created: 2018-09-26 21:01:46
$layout_defs["SecurityGroups"]["subpanel_setup"]['mks_subsidiaryusers_securitygroups'] = array (
  'order' => 100,
  'module' => 'mks_SubsidiaryUsers',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_SUBSIDIARYUSERS_SECURITYGROUPS_FROM_MKS_SUBSIDIARYUSERS_TITLE',
  'get_subpanel_data' => 'mks_subsidiaryusers_securitygroups',
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
