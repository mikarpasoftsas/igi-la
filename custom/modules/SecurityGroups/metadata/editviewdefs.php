<?php
$module_name = 'SecurityGroups';
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
            'name' => 'name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fb_page_access_token_c',
            'label' => 'LBL_FB_PAGE_ACCESS_TOKEN',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'page_id_c',
            'label' => 'LBL_PAGE_ID',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'key_autoincrement_c',
            'label' => 'LBL_KEY_AUTOINCREMENT',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 'noninheritable',
        ),
        5 => 
        array (
          0 => 'assigned_user_name',
        ),
        6 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
