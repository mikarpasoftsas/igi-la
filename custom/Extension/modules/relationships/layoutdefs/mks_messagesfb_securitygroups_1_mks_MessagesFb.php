<?php
 // created: 2018-11-24 15:24:05
$layout_defs["mks_MessagesFb"]["subpanel_setup"]['mks_messagesfb_securitygroups_1'] = array (
  'order' => 100,
  'module' => 'SecurityGroups',
  'subpanel_name' => 'admin',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_MESSAGESFB_SECURITYGROUPS_1_FROM_SECURITYGROUPS_TITLE',
  'get_subpanel_data' => 'mks_messagesfb_securitygroups_1',
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
