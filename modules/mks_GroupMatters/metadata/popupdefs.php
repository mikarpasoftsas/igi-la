<?php
$popupMeta = array (
    'moduleMain' => 'mks_GroupMatters',
    'varName' => 'mks_GroupMatters',
    'orderBy' => 'mks_groupmatters.name',
    'whereClauses' => array (
  'id_autoincrement' => 'mks_groupmatters.id_autoincrement',
  'matter' => 'mks_groupmatters.matter',
),
    'searchInputs' => array (
  4 => 'id_autoincrement',
  5 => 'matter',
),
    'searchdefs' => array (
  'id_autoincrement' => 
  array (
    'type' => 'autoincrement',
    'label' => 'LBL_ID_AUTOINCREMENT',
    'width' => '10%',
    'name' => 'id_autoincrement',
  ),
  'matter' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_MATTER',
    'id' => 'MKS_SUBJECTMATTER_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'matter',
  ),
),
);
