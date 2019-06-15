<?php
// created: 2018-10-25 14:16:55
$dictionary["mks_GroupMatterTeachers"]["fields"]["mks_teacher_mks_groupmatterteachers_1"] = array (
  'name' => 'mks_teacher_mks_groupmatterteachers_1',
  'type' => 'link',
  'relationship' => 'mks_teacher_mks_groupmatterteachers_1',
  'source' => 'non-db',
  'module' => 'mks_Teacher',
  'bean_name' => 'mks_Teacher',
  'vname' => 'LBL_MKS_TEACHER_MKS_GROUPMATTERTEACHERS_1_FROM_MKS_TEACHER_TITLE',
  'id_name' => 'mks_teacher_mks_groupmatterteachers_1mks_teacher_ida',
);
$dictionary["mks_GroupMatterTeachers"]["fields"]["mks_teacher_mks_groupmatterteachers_1_name"] = array (
  'name' => 'mks_teacher_mks_groupmatterteachers_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_TEACHER_MKS_GROUPMATTERTEACHERS_1_FROM_MKS_TEACHER_TITLE',
  'save' => true,
  'id_name' => 'mks_teacher_mks_groupmatterteachers_1mks_teacher_ida',
  'link' => 'mks_teacher_mks_groupmatterteachers_1',
  'table' => 'mks_teacher',
  'module' => 'mks_Teacher',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["mks_GroupMatterTeachers"]["fields"]["mks_teacher_mks_groupmatterteachers_1mks_teacher_ida"] = array (
  'name' => 'mks_teacher_mks_groupmatterteachers_1mks_teacher_ida',
  'type' => 'link',
  'relationship' => 'mks_teacher_mks_groupmatterteachers_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_TEACHER_MKS_GROUPMATTERTEACHERS_1_FROM_MKS_GROUPMATTERTEACHERS_TITLE',
);
