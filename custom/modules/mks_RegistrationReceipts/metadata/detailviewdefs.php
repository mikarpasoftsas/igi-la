<?php
$module_name = 'mks_RegistrationReceipts';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'customCode' => '<input title="Procesar Pago" accessKey="P" type="button" class="button" onClick="document.location=\'index.php?entryPoint=processPayment&record={$fields.id.value}\'" name="processpayment_x" id="processpayment_x" value="Procesar Pago">',
          ),
          /*1 => 
          array (
            'customCode' => '<input title="Procesar Pago A" accessKey="P" type="button" class="button" onClick="document.location=\'index.php?entryPoint=processPayment&type_rr_c=_a_c&record={$fields.id.value}\'" name="processpayment_a" id="processpayment_a" value="Procesar Pago Tipo A">',
          ),
		  */
          2 => 'DELETE',
          3 => 
          array (
            'customCode' => '<input type="button" class="button" onClick="showPopup(\'pdf\');" value="{$MOD.LBL_PRINT_AS_PDF}">',
          ),
        ),
      ),
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
        'LBL_DETAILVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'custom/modules/mks_RegistrationReceipts/js/detailview.js',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'date_receipts_c',
            'label' => 'LBL_DATE_RECEIPTS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'receip_type_c',
            'studio' => 'visible',
            'label' => 'LBL_RECEIP_TYPE',
          ),
          1 => 'name',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'mks_registration_mks_registrationreceipts_1_name',
            'label' => 'LBL_MKS_REGISTRATION_MKS_REGISTRATIONRECEIPTS_1_FROM_MKS_REGISTRATION_TITLE',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'mks_custompaymentplan_mks_registrationreceipts_1_name',
            'label' => 'LBL_MKS_CUSTOMPAYMENTPLAN_MKS_REGISTRATIONRECEIPTS_1_FROM_MKS_CUSTOMPAYMENTPLAN_TITLE',
          ),
        ),
        4 => 
        array (
          0 => 'description',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'status_registration_receipts_c',
            'studio' => 'visible',
            'label' => 'LBL_STATUS_REGISTRATION_RECEIPTS',
          ),
          1 => 
          array (
            'name' => 'balance_c',
            'label' => 'LBL_BALANCE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'payment_date_c',
            'label' => 'LBL_PAYMENT_DATE_C',
          ),
          1 => 'assigned_user_name',
        ),
      ),
      'lbl_detailview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'total_effective_c',
            'label' => 'LBL_TOTAL_EFFECTIVE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'total_transfers_c',
            'label' => 'LBL_TOTAL_TRANSFERS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'total_checks_c',
            'label' => 'LBL_TOTAL_CHECKS',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'total_cards_c',
            'label' => 'LBL_TOTAL_CARDS',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'total_discount_c',
            'label' => 'LBL_TOTAL_DISCOUNT',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'total_amount_c',
            'label' => 'LBL_TOTAL_AMOUNT',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'total_charge_c',
            'label' => 'LBL_TOTAL_CHARGE',
          ),
        ),
      ),
    ),
  ),
);
;
?>
