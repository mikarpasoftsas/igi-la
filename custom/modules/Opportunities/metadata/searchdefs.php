<?php
$searchdefs ['Opportunities'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'id_autoincrement_c' => 
      array (
        'type' => 'autoincrement',
        'default' => true,
        'label' => 'LBL_ID_AUTOINCREMENT_C',
        'width' => '10%',
        'name' => 'id_autoincrement_c',
      ),
      'account_name' => 
      array (
        'name' => 'account_name',
        'default' => true,
        'width' => '10%',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'means_notice_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_MEANS_NOTICE',
        'link' => true,
        'width' => '10%',
        'id' => 'MKS_MEANSNOTICE_ID_C',
        'name' => 'means_notice_c',
      ),
      'means_notice1_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_MEANS_NOTICE1',
        'link' => true,
        'width' => '10%',
        'id' => 'MKS_MEANSNOTICE_ID1_C',
        'name' => 'means_notice1_c',
      ),
      'sales_stage' => 
      array (
        'name' => 'sales_stage',
        'default' => true,
        'width' => '10%',
      ),
      'courses_of_interest_c' => 
      array (
        'type' => 'text',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_COURSES_OF_INTEREST',
        'sortable' => false,
        'width' => '10%',
        'name' => 'courses_of_interest_c',
      ),
      'filter_filial_c' => 
      array (
        'type' => 'text',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_FILTER_FILIAL_C',
        'sortable' => false,
        'width' => '10%',
        'name' => 'filter_filial_c',
      ),
      'ads_id_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_ADS_ID',
        'width' => '10%',
        'name' => 'ads_id_c',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'favorites_only' => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'id_autoincrement_c' => 
      array (
        'type' => 'autoincrement',
        'default' => true,
        'label' => 'LBL_ID_AUTOINCREMENT_C',
        'width' => '10%',
        'name' => 'id_autoincrement_c',
      ),
      'account_name' => 
      array (
        'name' => 'account_name',
        'default' => true,
        'width' => '10%',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'sales_stage' => 
      array (
        'name' => 'sales_stage',
        'default' => true,
        'width' => '10%',
      ),
      'means_notice_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_MEANS_NOTICE',
        'id' => 'MKS_MEANSNOTICE_ID_C',
        'link' => true,
        'width' => '10%',
        'name' => 'means_notice_c',
      ),
      'means_notice1_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_MEANS_NOTICE1',
        'id' => 'MKS_MEANSNOTICE_ID1_C',
        'link' => true,
        'width' => '10%',
        'name' => 'means_notice1_c',
      ),
      'date_closed' => 
      array (
        'name' => 'date_closed',
        'default' => true,
        'width' => '10%',
      ),
      'courses_of_interest_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_COURSES_OF_INTEREST',
        'sortable' => false,
        'width' => '10%',
        'name' => 'courses_of_interest_c',
      ),
      'ads_id_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_ADS_ID',
        'width' => '10%',
        'name' => 'ads_id_c',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
