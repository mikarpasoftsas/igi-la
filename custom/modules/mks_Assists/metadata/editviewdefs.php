<?php
$module_name = 'mks_Assists';
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
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assis_date_c',
            'label' => 'LBL_ASSIS_DATE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'mks_academicgroups_mks_assists_1_name',
            'label' => 'LBL_MKS_ACADEMICGROUPS_MKS_ASSISTS_1_FROM_MKS_ACADEMICGROUPS_TITLE',
          ),
          1 => 
          array (
            'name' => 'teacher_c',
            'studio' => 'visible',
            'label' => 'LBL_TEACHER',
          ),
        ),
        2 => 
        array (
          0 => 'description',
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
