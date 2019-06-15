<?php
$module_name = 'mks_CollectionConcepts';
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
          0 => 
          array (
            'name' => 'date_collection_concepts_c',
            'label' => 'LBL_DATE_COLLECTION_CONCEPTS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'mks_registrationreceipts_mks_collectionconcepts_1_name',
            'label' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_COLLECTIONCONCEPTS_1_FROM_MKS_REGISTRATIONRECEIPTS_TITLE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'mks_paymentconcepts_mks_collectionconcepts_1_name',
            'label' => 'LBL_MKS_PAYMENTCONCEPTS_MKS_COLLECTIONCONCEPTS_1_FROM_MKS_PAYMENTCONCEPTS_TITLE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'currency_c',
            'studio' => 'visible',
            'label' => 'LBL_CURRENCY_C',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'amount_c',
            'label' => 'LBL_AMOUNT',
          ),
        ),
        5 => 
        array (
          0 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
;
?>
