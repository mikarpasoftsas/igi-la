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
        2 => 
        array (
          0 => 'date_entered',
          1 => 'date_modified',
        ),
      ),
    ),
  ),
);
;
?>
