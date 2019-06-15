<?php
$popupMeta = array (
    'moduleMain' => 'mks_InterestCourse',
    'varName' => 'mks_InterestCourse',
    'orderBy' => 'mks_interestcourse.name',
    'whereClauses' => array (
  'name' => 'mks_interestcourse.name',
),
    'searchInputs' => array (
  1 => 'name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
),
    'listviewdefs' => array (
  'COURSE' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_COURSE',
    'id' => 'MKS_COURSES_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'course',
  ),
  'DAY_AVAILABLE' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_DAY_AVAILABLE',
    'width' => '10%',
    'default' => true,
    'name' => 'day_available',
  ),
  'TURN' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TURN',
    'width' => '10%',
    'default' => true,
    'name' => 'turn',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => false,
    'link' => true,
    'name' => 'name',
  ),
),
);
