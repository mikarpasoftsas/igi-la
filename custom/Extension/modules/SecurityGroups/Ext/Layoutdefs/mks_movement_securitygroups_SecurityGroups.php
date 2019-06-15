<?php
 // created: 2018-09-24 15:56:18
$layout_defs["SecurityGroups"]["subpanel_setup"]['mks_movement_securitygroups'] = array (
  'order' => 100,
  'module' => 'mks_Movement',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_MOVEMENT_SECURITYGROUPS_FROM_MKS_MOVEMENT_TITLE',
  'get_subpanel_data' => 'mks_movement_securitygroups',
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
