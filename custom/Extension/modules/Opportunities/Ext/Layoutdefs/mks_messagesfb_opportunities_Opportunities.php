<?php
 // created: 2018-11-23 21:23:47
$layout_defs["Opportunities"]["subpanel_setup"]['mks_messagesfb_opportunities'] = array (
  'order' => 100,
  'module' => 'mks_MessagesFb',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_MESSAGESFB_OPPORTUNITIES_FROM_MKS_MESSAGESFB_TITLE',
  'get_subpanel_data' => 'mks_messagesfb_opportunities',
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
