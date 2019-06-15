<?php
$module_name = 'mks_Registration';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
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
	{sugar_getscript file="modules/Documents/documents.js"}
	{sugar_getscript file="custom/modules/mks_Registration/js/editview.js"}',
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
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'second_expiration',
            'label' => 'LBL_SECOND_EXPIRATION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'uploadfile',
            'customCode' => '{if $fields.id.value!=""}
            				{assign var="type" value="hidden"}
            		 		{else}
            		 		{assign var="type" value="file"}
            		  		{/if}
            		  		<input name="uploadfile" type = {$type} size="30" maxlength="" onchange="setvalue(this);" value="{$fields.filename.value}">{$fields.filename.value}',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        3 => 
        array (
          0 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
;
?>
