<?php
$module_name='mks_Registration';
$subpanel_layout = array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'mks_Registration',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'document_name' => 
    array (
      'name' => 'document_name',
      'vname' => 'LBL_LIST_DOCUMENT_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '45%',
      'default' => true,
    ),
	/*
    'opportunity' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_OPPORTUNITY',
      'id' => 'OPPORTUNITY_ID_C',
      'link' => true,
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'Opportunities',
      'target_record_key' => 'opportunity_id_c',
    ),
	*/
    'course' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_COURSE',
      'id' => 'MKS_COURSES_ID_C',
      'link' => true,
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'mks_Courses',
      'target_record_key' => 'mks_courses_id_c',
    ),
    'grouptheory' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_GROUPTHEORY',
      'id' => 'MKS_ACADEMICGROUPS_ID_C',
      'link' => true,
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'mks_AcademicGroups',
      'target_record_key' => 'mks_academicgroups_id_c',
    ),
    'grouppractice' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_GROUPPRACTICE',
      'id' => 'MKS_ACADEMICGROUPS_ID1_C',
      'link' => true,
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'mks_AcademicGroups',
      'target_record_key' => 'mks_academicgroups_id1_c',
    ),
    'first_expiration' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_ FIRST_EXPIRATION',
      'width' => '10%',
      'default' => true,
    ),
  ),
);