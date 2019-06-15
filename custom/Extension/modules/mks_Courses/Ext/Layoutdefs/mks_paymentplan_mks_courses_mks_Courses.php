<?php
 // created: 2018-11-01 22:32:57
$layout_defs["mks_Courses"]["subpanel_setup"]['mks_paymentplan_mks_courses'] = array (
  'order' => 100,
  'module' => 'mks_PaymentPlan',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_PAYMENTPLAN_MKS_COURSES_FROM_MKS_PAYMENTPLAN_TITLE',
  'get_subpanel_data' => 'mks_paymentplan_mks_courses',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
