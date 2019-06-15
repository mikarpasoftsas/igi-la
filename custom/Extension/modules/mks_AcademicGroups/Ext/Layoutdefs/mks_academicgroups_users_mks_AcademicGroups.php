<?php
 // created: 2018-10-22 21:39:35
$layout_defs["mks_AcademicGroups"]["subpanel_setup"]['mks_academicgroups_users'] = array (
  'order' => 100,
  'module' => 'Users',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_ACADEMICGROUPS_USERS_FROM_USERS_TITLE',
  'get_subpanel_data' => 'mks_academicgroups_users',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
