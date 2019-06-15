<?php
$module_name = 'mks_MessagesFb';
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
          0 => 'name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'sender',
            'label' => 'LBL_SENDER',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'recipient',
            'label' => 'LBL_RECIPIENT',
          ),
        ),
        3 => 
        array (
          0 => 'assigned_user_name',
        ),
        4 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
