<?php
$module_name = 'mks_Registration';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
        'hidden' => 
        array (
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
      'javascript' => '{sugar_getscript file="include/javascript/popup_parent_helper.js"}
	{sugar_getscript file="cache/include/javascript/sugar_grp_jsolait.js"}
	{sugar_getscript file="modules/Documents/documents.js"}',
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => false,
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'custom/modules/mks_Registration/js/editview.js',
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
            'name' => 'accounts_mks_registration_1_name',
            'label' => 'LBL_ACCOUNTS_MKS_REGISTRATION_1_FROM_ACCOUNTS_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'course',
            'studio' => 'visible',
            'label' => 'LBL_COURSE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'paymentplan',
            'studio' => 'visible',
            'label' => 'LBL_PAYMENTPLAN',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'size',
            'studio' => 'visible',
            'label' => 'LBL_SIZE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'receip_type_c',
            'studio' => 'visible',
            'label' => 'LBL_RECEIP_TYPE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'observations_c',
            'studio' => 'visible',
            'label' => 'LBL_OBSERVATIONS',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'grouptheory',
            'studio' => 'visible',
            'label' => 'LBL_GROUPTHEORY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'grouppractice',
            'studio' => 'visible',
            'label' => 'LBL_GROUPPRACTICE',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'first_expiration',
            'label' => 'LBL_ FIRST_EXPIRATION',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'second_expiration',
            'label' => 'LBL_SECOND_EXPIRATION',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'status_id',
            'label' => 'LBL_DOC_STATUS',
          ),
        ),
        3 => 
        array (
          0 => 'assigned_user_name',
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'debt_c',
            'label' => 'LBL_DEBT',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'surcharge_c',
            'label' => 'LBL_SURCHARGE',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'discount_c',
            'label' => 'LBL_DISCOUNT',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'total_debt_c',
            'label' => 'LBL_ TOTAL_DEBT',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'advance_c',
            'label' => 'LBL_ADVANCE_C',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'amount_fees_c',
            'studio' => 'visible',
            'label' => 'LBL_AMOUNT_FEES_C',
          ),
          1 => '',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'first_expiration_ref_c',
            'label' => 'LBL_FIRST_EXPIRATION_REF_C',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
