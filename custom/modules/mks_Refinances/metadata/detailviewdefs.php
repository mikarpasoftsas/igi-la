<?php
$module_name = 'mks_Refinances';
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
          //0 => 'EDIT',
          //1 => 'DUPLICATE',
          //2 => 'DELETE',
          //3 => 'FIND_DUPLICATES',
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
            'name' => 'mks_refinances_mks_registration_name',
            'label' => 'LBL_MKS_REFINANCES_MKS_REGISTRATION_FROM_MKS_REGISTRATION_TITLE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'course_c',
            'studio' => 'visible',
            'label' => 'LBL_COURSE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'grouptheory_c',
            'studio' => 'visible',
            'label' => 'LBL_GROUPTHEORY',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'grouppractice_c',
            'studio' => 'visible',
            'label' => 'LBL_GROUPPRACTICE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'debt',
            'label' => 'LBL_DEBT',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'surcharge',
            'label' => 'LBL_SURCHARGE',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'discount',
            'label' => 'LBL_DISCOUNT',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'total_debt',
            'label' => 'LBL_TOTAL_DEBT',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'first_expiration_c',
            'label' => 'LBL_FIRST_EXPIRATION',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'advance_c',
            'label' => 'LBL_ ADVANCE',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'amount_fees_c',
            'studio' => 'visible',
            'label' => 'LBL_AMOUNT_FEES',
          ),
        ),
        13 => 
        array (
          0 => 'assigned_user_name',
        ),
        14 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
