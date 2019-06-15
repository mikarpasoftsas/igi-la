<?php
$module_name = 'mks_CoursesDetail';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'COURSE' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_COURSE',
    'id' => 'MKS_COURSES_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'MATTER' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_MATTER',
    'id' => 'MKS_SUBJECTMATTER_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'TYPE_MATTER' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TYPE_MATTER',
    'width' => '10%',
    'default' => true,
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
