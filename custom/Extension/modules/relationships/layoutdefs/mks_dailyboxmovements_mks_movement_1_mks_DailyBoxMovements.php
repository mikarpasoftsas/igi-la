<?php
 // created: 2019-05-18 17:45:38
$layout_defs["mks_DailyBoxMovements"]["subpanel_setup"]['mks_dailyboxmovements_mks_movement_1'] = array (
  'order' => 100,
  'module' => 'mks_Movement',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_DAILYBOXMOVEMENTS_MKS_MOVEMENT_1_FROM_MKS_MOVEMENT_TITLE',
  'get_subpanel_data' => 'mks_dailyboxmovements_mks_movement_1',
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
