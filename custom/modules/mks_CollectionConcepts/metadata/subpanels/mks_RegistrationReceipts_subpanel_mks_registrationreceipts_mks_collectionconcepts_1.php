<?php
// created: 2019-04-27 20:31:03
$subpanel_layout['list_fields'] = array (
  'id_autoincrement_c' => 
  array (
    'type' => 'autoincrement',
    'default' => true,
    'vname' => 'LBL_ID_AUTOINCREMENT',
    'width' => '10%',
    'link' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => NULL,
    'target_record_key' => NULL,
  ),
  'mks_paymentconcepts_mks_collectionconcepts_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_MKS_PAYMENTCONCEPTS_MKS_COLLECTIONCONCEPTS_1_FROM_MKS_PAYMENTCONCEPTS_TITLE',
    'id' => 'MKS_PAYMEN2B29ONCEPTS_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'mks_PaymentConcepts',
    'target_record_key' => 'mks_paymen2b29oncepts_ida',
  ),
  'amount_c' => 
  array (
    'type' => 'currency',
    'default' => true,
    'vname' => 'LBL_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'mks_CollectionConcepts',
    'width' => '4%',
    'default' => true,
  ),
  'delete_button' => 
  array (
    'vname' => 'LBL_DELETE',
    'widget_class' => 'SubPanelDeleteButton',
    'module' => 'mks_CollectionConcepts',
    'width' => '5%',
    'default' => true,
  ),

);
