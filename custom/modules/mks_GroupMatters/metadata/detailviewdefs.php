<?php
$module_name = 'mks_GroupMatters';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'id_autoincrement',
            'label' => 'LBL_ID_AUTOINCREMENT',
          ),
          1 => 
          array (
            'name' => 'mks_academicgroups_mks_groupmatters_1_name',
            'label' => 'LBL_MKS_ACADEMICGROUPS_MKS_GROUPMATTERS_1_FROM_MKS_ACADEMICGROUPS_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'matter',
            'studio' => 'visible',
            'label' => 'LBL_MATTER',
          ),
          1 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
;
?>
