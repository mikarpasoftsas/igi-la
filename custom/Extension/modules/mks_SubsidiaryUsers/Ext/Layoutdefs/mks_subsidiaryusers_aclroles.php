<?php
$layout_defs["mks_SubsidiaryUsers"]["subpanel_setup"]['mks_subsidiaryusers_aclroles'] = array (
  'order' => 100,
  'module' => 'ACLRoles',
  'subpanel_name' => 'admin',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_SUBSIDIARYUSERS_ACLROLES_FROM_ACLROLES_TITLE',
  'get_subpanel_data' => 'mks_subsidiaryusers_aclroles',
  'top_buttons' => 
  array (
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);