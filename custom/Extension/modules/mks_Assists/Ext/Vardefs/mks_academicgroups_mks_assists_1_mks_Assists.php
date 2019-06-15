<?php
// created: 2019-04-29 22:45:54
$dictionary["mks_Assists"]["fields"]["mks_academicgroups_mks_assists_1"] = array (
  'name' => 'mks_academicgroups_mks_assists_1',
  'type' => 'link',
  'relationship' => 'mks_academicgroups_mks_assists_1',
  'source' => 'non-db',
  'module' => 'mks_AcademicGroups',
  'bean_name' => 'mks_AcademicGroups',
  'vname' => 'LBL_MKS_ACADEMICGROUPS_MKS_ASSISTS_1_FROM_MKS_ACADEMICGROUPS_TITLE',
  'id_name' => 'mks_academicgroups_mks_assists_1mks_academicgroups_ida',
);
$dictionary["mks_Assists"]["fields"]["mks_academicgroups_mks_assists_1_name"] = array (
  'name' => 'mks_academicgroups_mks_assists_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_ACADEMICGROUPS_MKS_ASSISTS_1_FROM_MKS_ACADEMICGROUPS_TITLE',
  'save' => true,
  'id_name' => 'mks_academicgroups_mks_assists_1mks_academicgroups_ida',
  'link' => 'mks_academicgroups_mks_assists_1',
  'table' => 'mks_academicgroups',
  'module' => 'mks_AcademicGroups',
  'rname' => 'name',
);
$dictionary["mks_Assists"]["fields"]["mks_academicgroups_mks_assists_1mks_academicgroups_ida"] = array (
  'name' => 'mks_academicgroups_mks_assists_1mks_academicgroups_ida',
  'type' => 'link',
  'relationship' => 'mks_academicgroups_mks_assists_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_ACADEMICGROUPS_MKS_ASSISTS_1_FROM_MKS_ASSISTS_TITLE',
);
