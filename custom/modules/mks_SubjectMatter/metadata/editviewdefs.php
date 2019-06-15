<?php
$module_name = 'mks_SubjectMatter';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
	  'includes' => 
      array (
        0 => 
        array (
          'file' => 'custom/modules/mks_SubjectMatter/js/editview.js',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'type_c',
            'studio' => 'visible',
            'label' => 'LBL_TYPE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'mks_courses_mks_subjectmatter_1_name',
            'label' => 'LBL_MKS_COURSES_MKS_SUBJECTMATTER_1_FROM_MKS_COURSES_TITLE',
          ),
        ),
        2 => 
        array (
          0 => 'name',
        ),
        3 => 
        array (
          0 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
;
?>
