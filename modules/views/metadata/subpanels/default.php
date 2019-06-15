<?php
$module_name='mks_CoursesDetail';
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
      'popup_module' => 'mks_CoursesDetail',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '45%',
      'default' => true,
    ),
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
    'matter' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_MATTER',
      'id' => 'MKS_SUBJECTMATTER_ID_C',
      'link' => true,
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'mks_SubjectMatter',
      'target_record_key' => 'mks_subjectmatter_id_c',
    ),
    'date_modified' => 
    array (
      'vname' => 'LBL_DATE_MODIFIED',
      'width' => '45%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'mks_CoursesDetail',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'mks_CoursesDetail',
      'width' => '5%',
      'default' => true,
    ),
  ),
);