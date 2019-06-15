<?php
$popupMeta = array (
    'moduleMain' => 'mks_MovementType',
    'varName' => 'mks_MovementType',
    'orderBy' => 'mks_movementtype.name',
    'whereClauses' => array (
  'name' => 'mks_movementtype.name',
  'category' => 'mks_movementtype.category',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'category',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'category' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_CATEGORY',
    'id' => 'MKS_CATEGORYTYPESMOVEMENT_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'category',
  ),
),
);
