<?php
$module_name = 'mks_Registration';
$OBJECT_NAME = 'MKS_REGISTRATION';
$listViewDefs [$module_name] = 
array (
  'DOCUMENT_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
  ),
  'OPPORTUNITY' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_OPPORTUNITY',
    'id' => 'OPPORTUNITY_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'COURSE' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_COURSE',
    'id' => 'MKS_COURSES_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'GROUPTHEORY' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_GROUPTHEORY',
    'id' => 'MKS_ACADEMICGROUPS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'GROUPPRACTICE' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_GROUPPRACTICE',
    'id' => 'MKS_ACADEMICGROUPS_ID1_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'FIRST_EXPIRATION' => 
  array (
    'type' => 'date',
    'label' => 'LBL_ FIRST_EXPIRATION',
    'width' => '10%',
    'default' => true,
  ),
  'SECOND_EXPIRATION' => 
  array (
    'type' => 'date',
    'label' => 'LBL_SECOND_EXPIRATION',
    'width' => '10%',
    'default' => true,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MODIFIED_USER',
    'module' => 'Users',
    'id' => 'USERS_ID',
    'default' => false,
    'sortable' => false,
    'related_fields' => 
    array (
      0 => 'modified_user_id',
    ),
  ),
);
;
?>
