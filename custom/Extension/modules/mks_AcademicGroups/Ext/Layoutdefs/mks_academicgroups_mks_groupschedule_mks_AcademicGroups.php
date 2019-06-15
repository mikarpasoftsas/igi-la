<?php
 // created: 2018-10-22 21:39:35
$layout_defs["mks_AcademicGroups"]["subpanel_setup"]['mks_academicgroups_mks_groupschedule'] = array (
  'order' => 100,
  'module' => 'mks_GroupSchedule',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_ACADEMICGROUPS_MKS_GROUPSCHEDULE_FROM_MKS_GROUPSCHEDULE_TITLE',
  'get_subpanel_data' => 'mks_academicgroups_mks_groupschedule',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 =>
    array(
      'widget_class' => 'SubPanelSeeOccupationButton',
    ),
  ),
);
