<?php
// created: 2018-10-22 21:39:35
$dictionary["mks_GroupSchedule"]["fields"]["mks_academicgroups_mks_groupschedule"] = array (
  'name' => 'mks_academicgroups_mks_groupschedule',
  'type' => 'link',
  'relationship' => 'mks_academicgroups_mks_groupschedule',
  'source' => 'non-db',
  'module' => 'mks_AcademicGroups',
  'bean_name' => 'mks_AcademicGroups',
  'vname' => 'LBL_MKS_ACADEMICGROUPS_MKS_GROUPSCHEDULE_FROM_MKS_ACADEMICGROUPS_TITLE',
  'id_name' => 'mks_academicgroups_mks_groupschedulemks_academicgroups_ida',
);
$dictionary["mks_GroupSchedule"]["fields"]["mks_academicgroups_mks_groupschedule_name"] = array (
  'name' => 'mks_academicgroups_mks_groupschedule_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_ACADEMICGROUPS_MKS_GROUPSCHEDULE_FROM_MKS_ACADEMICGROUPS_TITLE',
  'save' => true,
  'id_name' => 'mks_academicgroups_mks_groupschedulemks_academicgroups_ida',
  'link' => 'mks_academicgroups_mks_groupschedule',
  'table' => 'mks_academicgroups',
  'module' => 'mks_AcademicGroups',
  'rname' => 'name',
);
$dictionary["mks_GroupSchedule"]["fields"]["mks_academicgroups_mks_groupschedulemks_academicgroups_ida"] = array (
  'name' => 'mks_academicgroups_mks_groupschedulemks_academicgroups_ida',
  'type' => 'link',
  'relationship' => 'mks_academicgroups_mks_groupschedule',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_ACADEMICGROUPS_MKS_GROUPSCHEDULE_FROM_MKS_GROUPSCHEDULE_TITLE',
);
