<?php
 $layout_defs["AOS_Product_Categories"]["subpanel_setup"]['securitygroups_aos_product_categories'] = array (
  'order' => 100,
  'module' => 'SecurityGroups',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SECURITYGROUPS',
  'get_subpanel_data' => 'SecurityGroups',
  'top_buttons' => 
  array (    
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
