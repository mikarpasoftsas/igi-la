<?php
// created: 2018-10-25 14:26:29
$subpanel_layout['list_fields'] = array (
  'id_autoincrement' => 
  array (
    'type' => 'autoincrement',
    'vname' => 'LBL_ID_AUTOINCREMENT',
    'width' => '10%',
    'default' => true,
  ),
  'mks_teacher_mks_groupmatterteachers_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_MKS_TEACHER_MKS_GROUPMATTERTEACHERS_1_FROM_MKS_TEACHER_TITLE',
    'id' => 'MKS_TEACHER_MKS_GROUPMATTERTEACHERS_1MKS_TEACHER_IDA',
    'width' => '30%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'mks_Teacher',
    'target_record_key' => 'mks_teacher_mks_groupmatterteachers_1mks_teacher_ida',
  ),
  'amount_theory' => 
  array (
    'type' => 'currency',
    'vname' => 'LBL_AMOUNT_THEORY',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'amount_practice' => 
  array (
    'type' => 'currency',
    'vname' => 'LBL_AMOUNT_PRACTICE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '25%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'mks_GroupMatterTeachers',
    'width' => '4%',
    'default' => true,
  ),
);