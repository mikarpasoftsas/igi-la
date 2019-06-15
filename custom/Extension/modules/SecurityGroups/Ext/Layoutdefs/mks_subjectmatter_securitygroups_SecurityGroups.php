<?php
 // created: 2018-09-18 21:55:03
$layout_defs["SecurityGroups"]["subpanel_setup"]['mks_subjectmatter_securitygroups'] = array (
  'order' => 100,
  'module' => 'mks_SubjectMatter',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_SUBJECTMATTER_SECURITYGROUPS_FROM_MKS_SUBJECTMATTER_TITLE',
  'get_subpanel_data' => 'mks_subjectmatter_securitygroups',
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
