<?php
 // created: 2018-11-01 22:41:44
$layout_defs["Contacts"]["subpanel_setup"]['mks_registration_contacts'] = array (
  'order' => 100,
  'module' => 'mks_Registration',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_REGISTRATION_CONTACTS_FROM_MKS_REGISTRATION_TITLE',
  'get_subpanel_data' => 'mks_registration_contacts',
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
