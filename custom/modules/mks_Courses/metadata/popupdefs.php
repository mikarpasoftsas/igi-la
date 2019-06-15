<?php
$popupMeta = array (
    'moduleMain' => 'mks_Courses',
    'varName' => 'mks_Courses',
    'orderBy' => 'mks_courses.name',
    'whereClauses' => array (
  'name' => 'mks_courses.name',
  'type_course' => 'mks_courses.type_course',
  'status_course' => 'mks_courses.status_course',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'type_course',
  5 => 'status_course',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'type_course' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TYPE_COURSE',
    'width' => '10%',
    'name' => 'type_course',
  ),
  'status_course' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_STATUS_COURSE',
    'width' => '10%',
    'name' => 'status_course',
  ),
),
);
