<?php
// created: 2018-10-22 21:39:35
$dictionary["User"]["fields"]["mks_academicgroups_users"] = array (
  'name' => 'mks_academicgroups_users',
  'type' => 'link',
  'relationship' => 'mks_academicgroups_users',
  'source' => 'non-db',
  'module' => 'mks_AcademicGroups',
  'bean_name' => 'mks_AcademicGroups',
  'vname' => 'LBL_MKS_ACADEMICGROUPS_USERS_FROM_MKS_ACADEMICGROUPS_TITLE',
  'id_name' => 'mks_academicgroups_usersmks_academicgroups_ida',
);
$dictionary["User"]["fields"]["mks_academicgroups_users_name"] = array (
  'name' => 'mks_academicgroups_users_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_ACADEMICGROUPS_USERS_FROM_MKS_ACADEMICGROUPS_TITLE',
  'save' => true,
  'id_name' => 'mks_academicgroups_usersmks_academicgroups_ida',
  'link' => 'mks_academicgroups_users',
  'table' => 'mks_academicgroups',
  'module' => 'mks_AcademicGroups',
  'rname' => 'name',
);
$dictionary["User"]["fields"]["mks_academicgroups_usersmks_academicgroups_ida"] = array (
  'name' => 'mks_academicgroups_usersmks_academicgroups_ida',
  'type' => 'link',
  'relationship' => 'mks_academicgroups_users',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_ACADEMICGROUPS_USERS_FROM_USERS_TITLE',
);
