<?php
$layout_defs['mks_WaitingList']['subpanel_setup']['securitygroups_mks_waitinglist'] = array(
	'top_buttons' => array(
						array(
						
							'widget_class' => 'SubPanelTopSelectButton', 
							'popup_module' => 'SecurityGroups', 
							'mode' => 'MultiSelect'
						),
	),
	'order' => 900,
	'sort_by' => 'name',
	'sort_order' => 'asc',
	'module' => 'SecurityGroups',
	'refresh_page' => 1,
	'subpanel_name' => 'default',
	'get_subpanel_data' => 'SecurityGroups',
	'add_subpanel_data' => 'securitygroup_id',
	'title_key' => 'LBL_MKS_WAITINGLIST_SECURITYGROUPS_FROM_SECURITYGROUPS_TITLE',	
 );
