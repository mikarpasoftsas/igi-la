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
	{sugar_getscript file="modules/Documents/documents.js"}',
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
          0 => 'document_name',
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
            'name' => 'course',
            'studio' => 'visible',
            'label' => 'LBL_COURSE',
          ),
        ),
        2 => 
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
        3 => 
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
        4 => 
        array (
          0 => 
          array (
            'name' => 'size',
            'studio' => 'visible',
            'label' => 'LBL_SIZE',
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
          1 => '',
        ),
        6 => 
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
