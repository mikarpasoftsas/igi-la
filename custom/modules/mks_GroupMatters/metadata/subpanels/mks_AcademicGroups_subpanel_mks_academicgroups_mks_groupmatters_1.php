<?php
// created: 2018-10-25 14:13:37
$subpanel_layout['list_fields'] = array (
  'id_autoincrement' => 
  array (
    'type' => 'autoincrement',
    'vname' => 'LBL_ID_AUTOINCREMENT',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
  ),
  'matter' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'vname' => 'LBL_MATTER',
    'id' => 'MKS_SUBJECTMATTER_ID_C',
    'link' => true,
    'width' => '30%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'mks_SubjectMatter',
    'target_record_key' => 'mks_subjectmatter_id_c',
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '30%',
    'default' => true,
  ),
  'delete_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelDeleteButton',
    'module' => 'mks_GroupMatters',
    'width' => '5%',
    'default' => true,
  ),
);