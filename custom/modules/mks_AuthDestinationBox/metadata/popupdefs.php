<?php
$popupMeta = array (
    'moduleMain' => 'mks_AuthDestinationBox',
    'varName' => 'mks_AuthDestinationBox',
    'orderBy' => 'mks_authdestinationbox.name',
    'whereClauses' => array (
  'assigned_user_id' => 'mks_authdestinationbox.assigned_user_id',
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
  'MKS_BOX_MKS_AUTHDESTINATIONBOX_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MKS_BOX_MKS_AUTHDESTINATIONBOX_1_FROM_MKS_BOX_TITLE',
    'id' => 'MKS_BOX_MKS_AUTHDESTINATIONBOX_1MKS_BOX_IDA',
    'width' => '10%',
    'default' => true,
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
