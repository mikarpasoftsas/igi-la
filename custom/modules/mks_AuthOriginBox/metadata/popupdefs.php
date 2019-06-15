<?php
$popupMeta = array (
    'moduleMain' => 'mks_AuthOriginBox',
    'varName' => 'mks_AuthOriginBox',
    'orderBy' => 'mks_authoriginbox.name',
    'whereClauses' => array (
  'assigned_user_id' => 'mks_authoriginbox.assigned_user_id',
),
    'searchInputs' => array (
  5 => 'assigned_user_id',
),
    'searchdefs' => array (
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'label' => 'LBL_ASSIGNED_TO',
    'type' => 'enum',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => '10%',
  ),
),
    'listviewdefs' => array (
  'MKS_BOX_MKS_AUTHORIGINBOX_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MKS_BOX_MKS_AUTHORIGINBOX_1_FROM_MKS_BOX_TITLE',
    'id' => 'MKS_BOX_MKS_AUTHORIGINBOX_1MKS_BOX_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'mks_box_mks_authoriginbox_1_name',
  ),
  'AUTH_USER_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_AUTH_USER',
    'id' => 'USER_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'auth_user_c',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
),
);
