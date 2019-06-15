<?php
 // created: 2018-10-22 21:39:35
$layout_defs["SecurityGroups"]["subpanel_setup"]['mks_academicgroups_securitygroups'] = array (
  'order' => 100,
  'module' => 'mks_AcademicGroups',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_ACADEMICGROUPS_SECURITYGROUPS_FROM_MKS_ACADEMICGROUPS_TITLE',
  'get_subpanel_data' => 'mks_academicgroups_securitygroups',
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
