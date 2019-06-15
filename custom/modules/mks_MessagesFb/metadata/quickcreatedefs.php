<?php
$module_name = 'mks_MessagesFb';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
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
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'accounts_mks_messagesfb_1_name',
            'label' => 'LBL_ACCOUNTS_MKS_MESSAGESFB_1_FROM_ACCOUNTS_TITLE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'mks_messagesfb_opportunities_name',
            'label' => 'LBL_MKS_MESSAGESFB_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'sender',
            'label' => 'LBL_SENDER',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'recipient',
            'label' => 'LBL_RECIPIENT',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'type',
            'studio' => 'visible',
            'label' => 'LBL_TYPE',
          ),
        ),
        6 => 
        array (
          0 => 'assigned_user_name',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'studio' => 'visible',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
    ),
  ),
);
;
?>
