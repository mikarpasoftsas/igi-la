<?php
// created: 2019-05-04 00:27:15
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'vname' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => NULL,
    'target_record_key' => NULL,
  ),
  'mks_registration_mks_registrationreceipts_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_MKS_REGISTRATION_MKS_REGISTRATIONRECEIPTS_1_FROM_MKS_REGISTRATION_TITLE',
    'id' => 'MKS_REGISTRATION_MKS_REGISTRATIONRECEIPTS_1MKS_REGISTRATION_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'mks_Registration',
    'target_record_key' => 'mks_registration_mks_registrationreceipts_1mks_registration_ida',
  ),
  'mks_custompaymentplan_mks_registrationreceipts_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_MKS_CUSTOMPAYMENTPLAN_MKS_REGISTRATIONRECEIPTS_1_FROM_MKS_CUSTOMPAYMENTPLAN_TITLE',
    'id' => 'MKS_CUSTOM8555ENTPLAN_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'mks_CustomPaymentPlan',
    'target_record_key' => 'mks_custom8555entplan_ida',
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ), 
);