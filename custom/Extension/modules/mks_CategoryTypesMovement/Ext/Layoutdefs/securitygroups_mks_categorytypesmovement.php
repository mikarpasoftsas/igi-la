<?php
 $layout_defs["mks_CategoryTypesMovement"]["subpanel_setup"]['securitygroups_mks_categorytypesmovement'] = array (
  'order' => 100,
  'module' => 'SecurityGroups',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SECURITYGROUPS',
  'get_subpanel_data' => 'SecurityGroups',
  'top_buttons' => 
  array (    
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
