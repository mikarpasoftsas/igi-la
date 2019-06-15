<?php
$module_name = 'mks_CollectionConcepts';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'id_autoincrement_c' => 
      array (
        'type' => 'autoincrement',
        'default' => true,
        'label' => 'LBL_ID_AUTOINCREMENT',
        'width' => '10%',
        'name' => 'id_autoincrement_c',
      ),
      'mks_registrationreceipts_mks_collectionconcepts_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_COLLECTIONCONCEPTS_1_FROM_MKS_REGISTRATIONRECEIPTS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'MKS_REGIST10EBECEIPTS_IDA',
        'name' => 'mks_registrationreceipts_mks_collectionconcepts_1_name',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
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
        'label' => 'LBL_ID_AUTOINCREMENT',
        'width' => '10%',
        'name' => 'id_autoincrement_c',
      ),
      'date_collection_concepts_c' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_DATE_COLLECTION_CONCEPTS',
        'width' => '10%',
        'name' => 'date_collection_concepts_c',
      ),
      'mks_box_mks_collectionconcepts_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_MKS_BOX_MKS_COLLECTIONCONCEPTS_1_FROM_MKS_BOX_TITLE',
        'id' => 'MKS_BOX_MKS_COLLECTIONCONCEPTS_1MKS_BOX_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'mks_box_mks_collectionconcepts_1_name',
      ),
      'mks_paymentconcepts_mks_collectionconcepts_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_MKS_PAYMENTCONCEPTS_MKS_COLLECTIONCONCEPTS_1_FROM_MKS_PAYMENTCONCEPTS_TITLE',
        'id' => 'MKS_PAYMEN2B29ONCEPTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'mks_paymentconcepts_mks_collectionconcepts_1_name',
      ),
      'mks_collectionconcepts_mks_customplanfees_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_MKS_COLLECTIONCONCEPTS_MKS_CUSTOMPLANFEES_1_FROM_MKS_CUSTOMPLANFEES_TITLE',
        'id' => 'MKS_COLLEC6580LANFEES_IDB',
        'width' => '10%',
        'default' => true,
        'name' => 'mks_collectionconcepts_mks_customplanfees_1_name',
      ),
      'mks_registrationreceipts_mks_collectionconcepts_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_COLLECTIONCONCEPTS_1_FROM_MKS_REGISTRATIONRECEIPTS_TITLE',
        'id' => 'MKS_REGIST10EBECEIPTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'mks_registrationreceipts_mks_collectionconcepts_1_name',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
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
