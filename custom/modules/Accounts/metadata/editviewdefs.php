<?php
$viewdefs ['Accounts'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Accounts/Account.js',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_ACCOUNT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => false,
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'first_name_c',
            'label' => 'LBL_FIRST_NAME',
          ),
          1 => 
          array (
            'name' => 'last_name_c',
            'label' => 'LBL_LAST_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'id_type_c',
            'studio' => 'visible',
            'label' => 'LBL_ID_TYPE_C',
          ),
          1 => 
          array (
            'name' => 'id_local_c',
            'label' => 'LBL_ID_LOCAL_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'sexo_c',
            'studio' => 'visible',
            'label' => 'LBL_SEXO_C',
          ),
          1 => 
          array (
            'name' => 'phone_mobile_c',
            'label' => 'LBL_PHONE_MOBILE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'phone_home_c',
            'label' => 'LBL_PHONE_HOME',
          ),
          1 => 
          array (
            'name' => 'phone_office',
            'label' => 'LBL_PHONE_OFFICE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'phone_alternate',
            'comment' => 'An alternate phone number',
            'label' => 'LBL_PHONE_ALT',
          ),
          1 => 
          array (
            'name' => 'birthdate_c',
            'label' => 'LBL_BIRTHDATE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'means_notice_c',
            'studio' => 'visible',
            'label' => 'LBL_MEANS_NOTICE_C',
          ),
          1 => 'account_type',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'avatar_c',
            'studio' => 'visible',
            'label' => 'LBL_AVATAR',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_home_c',
            'label' => 'LBL_PRIMARY_ADDRESS_HOME_C',
          ),
          1 => 
          array (
            'name' => 'primary_address_number_c',
            'label' => 'LBL_PRIMARY_ADDRESS_NUMBER_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_floor_c',
            'label' => 'LBL_PRIMARY_ADDRESS_FLOOR_C',
          ),
          1 => 
          array (
            'name' => 'billing_address_state',
            'comment' => 'The state used for billing address',
            'label' => 'LBL_BILLING_ADDRESS_STATE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'primary_addres_between_stree_c',
            'label' => 'LBL_PRIMARY_ADDRES_BETWEEN_STREE',
          ),
          1 => 
          array (
            'name' => 'billing_address_postalcode',
            'comment' => 'The postal code used for billing address',
            'label' => 'LBL_BILLING_ADDRESS_POSTALCODE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_location_c',
            'label' => 'LBL_PRIMARY_ADDRESS_LOCATION_C',
          ),
          1 => 
          array (
            'name' => 'billing_address_city',
            'comment' => 'The city used for billing address',
            'label' => 'LBL_BILLING_ADDRESS_CITY',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_neighborhood_c',
            'label' => 'LBL_PRIMARY_ADDRESS_NEIGHBORHOOD',
          ),
        ),
      ),
    ),
  ),
);
;
?>
