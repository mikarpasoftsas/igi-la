<?php
 // created: 2018-10-25 15:02:33
$layout_defs["mks_AcademicGroups"]["subpanel_setup"]['mks_academicgroups_mks_teacher_1'] = array (
  'order' => 100,
  'module' => 'mks_Teacher',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_ACADEMICGROUPS_MKS_TEACHER_1_FROM_MKS_TEACHER_TITLE',
  'get_subpanel_data' => 'mks_academicgroups_mks_teacher_1',
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
