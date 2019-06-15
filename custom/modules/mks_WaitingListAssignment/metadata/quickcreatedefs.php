<?php
$module_name = 'mks_WaitingListAssignment';
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
      'useTabs' => true,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_QUICKCREATE_PANEL1' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
	  'includes' => 
	   array(	
			array (
				'file' => 'custom/modules/mks_WaitingListAssignment/js/editview.js',       
			)	
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
            'name' => 'waitinglist',
            'studio' => 'visible',
            'label' => 'LBL_WAITINGLIST',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'day_available',
            'studio' => 'visible',
            'label' => 'LBL_DAY_AVAILABLE',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'turn',
            'studio' => 'visible',
            'label' => 'LBL_TURN',
          ),
          1 => '',
        ),
      ),
      'lbl_quickcreate_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'mks_waitinglistassignment_opportunities_name',
            'label' => 'LBL_MKS_WAITINGLISTASSIGNMENT_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
;
?>
