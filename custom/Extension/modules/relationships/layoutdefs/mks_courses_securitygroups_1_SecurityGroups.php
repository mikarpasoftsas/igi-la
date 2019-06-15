<?php
 // created: 2018-09-24 16:52:32
$layout_defs["SecurityGroups"]["subpanel_setup"]['mks_courses_securitygroups_1'] = array (
  'order' => 100,
  'module' => 'mks_Courses',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_COURSES_SECURITYGROUPS_1_FROM_MKS_COURSES_TITLE',
  'get_subpanel_data' => 'mks_courses_securitygroups_1',
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
