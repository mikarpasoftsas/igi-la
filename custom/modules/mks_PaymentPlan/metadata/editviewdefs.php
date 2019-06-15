<?php
$module_name = 'mks_PaymentPlan';
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
      'syncDetailEditViews' => false,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'mks_paymentplan_mks_courses_name',
            'label' => 'LBL_MKS_PAYMENTPLAN_MKS_COURSES_FROM_MKS_COURSES_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'amount',
            'label' => 'LBL_AMOUNT',
			'displayParams'=>array('size'=>10),
          ),
          1 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
;
?>
