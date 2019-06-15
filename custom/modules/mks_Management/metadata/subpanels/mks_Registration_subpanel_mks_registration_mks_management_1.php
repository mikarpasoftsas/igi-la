<?php
// created: 2019-03-22 22:19:27
$subpanel_layout['list_fields'] = array (
  'id_autoincrement_c' => 
  array (
    'type' => 'autoincrement',
    'default' => true,
    'vname' => 'LBL_ID_AUTOINCREMENT',
    'width' => '10%',
  ),
  'type_managment_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_TYPE_MANAGMENT',
    'width' => '10%',
  ),
  'status_managment_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_STATUS_MANAGMENT',
    'width' => '10%',
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '45%',
    'default' => true,
  ),
  'description' => 
  array (
    'type' => 'text',
    'vname' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'accounts_mks_management_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_ACCOUNTS_MKS_MANAGEMENT_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_MKS_MANAGEMENT_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Accounts',
    'target_record_key' => 'accounts_mks_management_1accounts_ida',
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'mks_Management',
    'width' => '4%',
    'default' => true,
  ),
);