<?php
$module_name = 'jckl_DashboardDeployments';
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
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'copied_from_user',
            'studio' => 'visible',
            'label' => 'LBL_COPIED_FROM_USER',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'jckl_dashboarddeployments_jckl_dashboardtemplates_name',
          ),
        ),
      ),
    ),
  ),
);
;
?>
