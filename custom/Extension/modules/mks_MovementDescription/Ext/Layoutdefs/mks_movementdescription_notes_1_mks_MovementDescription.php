<?php
 // created: 2018-09-27 13:09:12
$layout_defs["mks_MovementDescription"]["subpanel_setup"]['mks_movementdescription_notes_1'] = array (
  'order' => 100,
  'module' => 'Notes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_MOVEMENTDESCRIPTION_NOTES_1_FROM_NOTES_TITLE',
  'get_subpanel_data' => 'mks_movementdescription_notes_1',
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
