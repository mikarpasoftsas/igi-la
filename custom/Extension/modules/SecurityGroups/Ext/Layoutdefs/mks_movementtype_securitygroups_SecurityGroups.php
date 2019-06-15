<?php
 // created: 2018-09-24 15:56:18
$layout_defs["SecurityGroups"]["subpanel_setup"]['mks_movementtype_securitygroups'] = array (
  'order' => 100,
  'module' => 'mks_MovementType',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_MOVEMENTTYPE_SECURITYGROUPS_FROM_MKS_MOVEMENTTYPE_TITLE',
  'get_subpanel_data' => 'mks_movementtype_securitygroups',
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
