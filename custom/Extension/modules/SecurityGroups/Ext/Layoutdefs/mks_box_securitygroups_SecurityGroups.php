<?php
 // created: 2018-09-24 15:56:18
$layout_defs["SecurityGroups"]["subpanel_setup"]['mks_box_securitygroups'] = array (
  'order' => 100,
  'module' => 'mks_Box',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_BOX_SECURITYGROUPS_FROM_MKS_BOX_TITLE',
  'get_subpanel_data' => 'mks_box_securitygroups',
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
