<?php
$module_name = 'mks_GroupMatterTeachers';
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
        'LBL_EDITVIEW_PANEL1' => 
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
            'name' => 'mks_groupmatters_mks_groupmatterteachers_name',
            'label' => 'LBL_MKS_GROUPMATTERS_MKS_GROUPMATTERTEACHERS_FROM_MKS_GROUPMATTERS_TITLE',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'mks_teacher_mks_groupmatterteachers_1_name',
            'label' => 'LBL_MKS_TEACHER_MKS_GROUPMATTERTEACHERS_1_FROM_MKS_TEACHER_TITLE',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 'assigned_user_name',
          1 => '',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'currency_id',
            'studio' => 'visible',
            'label' => 'LBL_CURRENCY',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'amount_theory',
            'label' => 'LBL_AMOUNT_THEORY',
          ),
          1 => 
          array (
            'name' => 'amount_practice',
            'label' => 'LBL_AMOUNT_PRACTICE',
          ),
        ),
      ),
    ),
  ),
);
;
?>
