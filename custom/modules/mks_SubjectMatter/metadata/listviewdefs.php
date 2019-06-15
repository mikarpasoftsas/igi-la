<?php
$module_name = 'mks_SubjectMatter';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'MKS_COURSES_MKS_SUBJECTMATTER_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MKS_COURSES_MKS_SUBJECTMATTER_1_FROM_MKS_COURSES_TITLE',
    'id' => 'MKS_COURSES_MKS_SUBJECTMATTER_1MKS_COURSES_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'TYPE_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TYPE',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
);
;
?>
