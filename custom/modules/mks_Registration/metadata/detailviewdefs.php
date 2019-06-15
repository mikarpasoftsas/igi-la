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
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 
          array (
            'customCode' => '<input title="Generar Recibo" accessKey="R" type="button" class="button" onClick="document.location=\'index.php?entryPoint=NewAutoRegRR&new_auto_reg_rr=true&record={$fields.id.value}\'" name="receipt" value="Generar Recibo">',
          ),
          4 => 
          array (
            'customCode' => '<input type="button" class="button" onClick="showPopup(\'pdf\');" value="{$MOD.LBL_PRINT_AS_PDF}">',
          ),
        ),
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
        'LBL_DETAILVIEW_PANEL3' => 
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
      ),
      'syncDetailEditViews' => true,
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'custom/modules/mks_Registration/js/detailview.js',
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
            'name' => 'reg_num_c',
            'label' => 'LBL_REG_NUM',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'accounts_mks_registration_1_name',
            'label' => 'LBL_ACCOUNTS_MKS_REGISTRATION_1_FROM_ACCOUNTS_TITLE',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'course',
            'studio' => 'visible',
            'label' => 'LBL_COURSE',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'paymentplan',
            'studio' => 'visible',
            'label' => 'LBL_PAYMENTPLAN',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'size',
            'studio' => 'visible',
            'label' => 'LBL_SIZE',
          ),
          1 => '',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'receip_type_c',
            'studio' => 'visible',
            'label' => 'LBL_RECEIP_TYPE',
          ),
          1 => '',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'observations_c',
            'studio' => 'visible',
            'label' => 'LBL_OBSERVATIONS',
          ),
          1 => '',
        ),
      ),
      'lbl_detailview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => '',
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
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'grouppractice',
            'studio' => 'visible',
            'label' => 'LBL_GROUPPRACTICE',
          ),
          1 => '',
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
          1 => '',
        ),
        3 => 
        array (
          0 => 'assigned_user_name',
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
