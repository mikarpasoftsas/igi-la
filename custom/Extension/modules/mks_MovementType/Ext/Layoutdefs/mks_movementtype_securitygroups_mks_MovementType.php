<?php
 // created: 2018-09-24 15:56:18
$layout_defs["mks_MovementType"]["subpanel_setup"]['mks_movementtype_securitygroups'] = array (
  'order' => 100,
  'module' => 'SecurityGroups',
  'subpanel_name' => 'admin',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_MOVEMENTTYPE_SECURITYGROUPS_FROM_SECURITYGROUPS_TITLE',
  'get_subpanel_data' => 'mks_movementtype_securitygroups',
  'top_buttons' => 
  array (
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
