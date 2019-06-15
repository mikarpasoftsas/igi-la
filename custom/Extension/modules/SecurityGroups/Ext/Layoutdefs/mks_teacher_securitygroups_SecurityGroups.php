<?php
 // created: 2018-09-24 16:22:53
$layout_defs["SecurityGroups"]["subpanel_setup"]['mks_teacher_securitygroups'] = array (
  'order' => 100,
  'module' => 'mks_Teacher',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_TEACHER_SECURITYGROUPS_FROM_MKS_TEACHER_TITLE',
  'get_subpanel_data' => 'mks_teacher_securitygroups',
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
