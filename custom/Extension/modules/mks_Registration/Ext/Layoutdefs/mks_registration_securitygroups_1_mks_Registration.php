<?php
 // created: 2018-11-13 17:39:44
$layout_defs["mks_Registration"]["subpanel_setup"]['mks_registration_securitygroups_1'] = array (
  'order' => 100,
  'module' => 'SecurityGroups',
  'subpanel_name' => 'admin',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_REGISTRATION_SECURITYGROUPS_1_FROM_SECURITYGROUPS_TITLE',
  'get_subpanel_data' => 'mks_registration_securitygroups_1',
  'top_buttons' => 
  array (
    /*
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
	*/
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
	
  ),
);
