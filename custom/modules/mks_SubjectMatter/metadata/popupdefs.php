<?php
$popupMeta = array (
    'moduleMain' => 'mks_SubjectMatter',
    'varName' => 'mks_SubjectMatter',
    'orderBy' => 'mks_subjectmatter.name',
    'whereClauses' => array (
  'name' => 'mks_subjectmatter.name',
  'type_c' => 'mks_subjectmatter_cstm.type_c',
  'mks_courses_mks_subjectmatter_1_name' => 'mks_subjectmatter.mks_courses_mks_subjectmatter_1_name',
),
    'searchInputs' => array (
  1 => 'name',
  2 => 'type_c',
  3 => 'mks_courses_mks_subjectmatter_1_name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'type_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'name' => 'type_c',
  ),
  'mks_courses_mks_subjectmatter_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MKS_COURSES_MKS_SUBJECTMATTER_1_FROM_MKS_COURSES_TITLE',
    'id' => 'MKS_COURSES_MKS_SUBJECTMATTER_1MKS_COURSES_IDA',
    'width' => '10%',
    'name' => 'mks_courses_mks_subjectmatter_1_name',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '40%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'MKS_COURSES_MKS_SUBJECTMATTER_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MKS_COURSES_MKS_SUBJECTMATTER_1_FROM_MKS_COURSES_TITLE',
    'id' => 'MKS_COURSES_MKS_SUBJECTMATTER_1MKS_COURSES_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'mks_courses_mks_subjectmatter_1_name',
  ),
  'TYPE_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TYPE',
    'width' => '40%',
    'name' => 'type_c',
  ),
),
);
