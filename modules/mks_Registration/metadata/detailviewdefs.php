<?php
$module_name = 'mks_Registration';
$_object_name = 'mks_registration';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'form' => 
      array (
      ),
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
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'opportunity',
            'studio' => 'visible',
            'label' => 'LBL_OPPORTUNITY',
          ),
          1 => 
          array (
            'name' => 'mks_registration_contacts_name',
            'label' => 'LBL_MKS_REGISTRATION_CONTACTS_FROM_CONTACTS_TITLE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'course',
            'studio' => 'visible',
            'label' => 'LBL_COURSE',
          ),
          1 => 
          array (
            'name' => 'size',
            'studio' => 'visible',
            'label' => 'LBL_SIZE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'grouppractice',
            'studio' => 'visible',
            'label' => 'LBL_GROUPPRACTICE',
          ),
          1 => 
          array (
            'name' => 'grouptheory',
            'studio' => 'visible',
            'label' => 'LBL_GROUPTHEORY',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'first_expiration',
            'label' => 'LBL_ FIRST_EXPIRATION',
          ),
          1 => 
          array (
            'name' => 'second_expiration',
            'label' => 'LBL_SECOND_EXPIRATION',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'photo',
            'studio' => 'visible',
            'label' => 'LBL_PHOTO',
          ),
          1 => 'uploadfile',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'paymentplan',
            'studio' => 'visible',
            'label' => 'LBL_PAYMENTPLAN',
          ),
          1 => '',
        ),
        7 => 
        array (
          0 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
;
?>
