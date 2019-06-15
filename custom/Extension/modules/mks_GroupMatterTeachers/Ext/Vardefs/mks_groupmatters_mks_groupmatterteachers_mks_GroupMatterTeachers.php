<?php
// created: 2018-10-25 14:04:47
$dictionary["mks_GroupMatterTeachers"]["fields"]["mks_groupmatters_mks_groupmatterteachers"] = array (
  'name' => 'mks_groupmatters_mks_groupmatterteachers',
  'type' => 'link',
  'relationship' => 'mks_groupmatters_mks_groupmatterteachers',
  'source' => 'non-db',
  'module' => 'mks_GroupMatters',
  'bean_name' => 'mks_GroupMatters',
  'vname' => 'LBL_MKS_GROUPMATTERS_MKS_GROUPMATTERTEACHERS_FROM_MKS_GROUPMATTERS_TITLE',
  'id_name' => 'mks_groupmatters_mks_groupmatterteachersmks_groupmatters_ida',
);
$dictionary["mks_GroupMatterTeachers"]["fields"]["mks_groupmatters_mks_groupmatterteachers_name"] = array (
  'name' => 'mks_groupmatters_mks_groupmatterteachers_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_GROUPMATTERS_MKS_GROUPMATTERTEACHERS_FROM_MKS_GROUPMATTERS_TITLE',
  'save' => true,
  'id_name' => 'mks_groupmatters_mks_groupmatterteachersmks_groupmatters_ida',
  'link' => 'mks_groupmatters_mks_groupmatterteachers',
  'table' => 'mks_groupmatters',
  'module' => 'mks_GroupMatters',
  'rname' => 'name',
);
$dictionary["mks_GroupMatterTeachers"]["fields"]["mks_groupmatters_mks_groupmatterteachersmks_groupmatters_ida"] = array (
  'name' => 'mks_groupmatters_mks_groupmatterteachersmks_groupmatters_ida',
  'type' => 'link',
  'relationship' => 'mks_groupmatters_mks_groupmatterteachers',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_GROUPMATTERS_MKS_GROUPMATTERTEACHERS_FROM_MKS_GROUPMATTERTEACHERS_TITLE',
);
