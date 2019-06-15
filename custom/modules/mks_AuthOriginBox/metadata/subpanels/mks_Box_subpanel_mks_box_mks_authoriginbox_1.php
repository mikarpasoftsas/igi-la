<?php
// created: 2019-06-11 23:43:21
$subpanel_layout['list_fields'] = array (
  'mks_box_mks_authoriginbox_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_MKS_BOX_MKS_AUTHORIGINBOX_1_FROM_MKS_BOX_TITLE',
    'id' => 'MKS_BOX_MKS_AUTHORIGINBOX_1MKS_BOX_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'mks_Box',
    'target_record_key' => 'mks_box_mks_authoriginbox_1mks_box_ida',
  ),
  'auth_user_c' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_AUTH_USER',
    'id' => 'USER_ID_C',
    'link' => true,
    'width' => '10%',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'user_id_c',
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'mks_AuthOriginBox',
    'width' => '5%',
    'default' => true,
  ),
);