<?php
$listViewDefs ['Opportunities'] = 
array (
  'ID_AUTOINCREMENT_C' => 
  array (
    'type' => 'autoincrement',
    'default' => true,
    'label' => 'LBL_ID_AUTOINCREMENT_C',
    'width' => '10%',
    'link' => true,
  ),
  'ACCOUNT_NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'id' => 'ACCOUNT_ID',
    'module' => 'Accounts',
    'link' => true,
    'default' => true,
    'sortable' => true,
    'ACLTag' => 'ACCOUNT',
    'contextMenu' => 
    array (
      'objectType' => 'sugarAccount',
      'metaData' => 
      array (
        'return_module' => 'Contacts',
        'return_action' => 'ListView',
        'module' => 'Accounts',
        'parent_id' => '{$ACCOUNT_ID}',
        'parent_name' => '{$ACCOUNT_NAME}',
        'account_id' => '{$ACCOUNT_ID}',
        'account_name' => '{$ACCOUNT_NAME}',
      ),
    ),
    'related_fields' => 
    array (
      0 => 'account_id',
    ),
  ),
  'SALES_STAGE' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_SALES_STAGE',
    'default' => true,
  ),
  'COURSES_OF_INTEREST_C' => 
  array (
    'type' => 'text',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_COURSES_OF_INTEREST',
    'sortable' => false,
    'width' => '10%',
  ),
  'ADS_ID_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ADS_ID',
    'width' => '20%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '30%',
    'label' => 'LBL_LIST_OPPORTUNITY_NAME',
    'link' => true,
    'default' => false,
  ),
  'DATE_CLOSED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_DATE_CLOSED',
    'default' => false,
  ),
  'AMOUNT_USDOLLAR' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_AMOUNT_USDOLLAR',
    'align' => 'right',
    'default' => false,
    'currency_format' => true,
  ),
  'OPPORTUNITY_TYPE' => 
  array (
    'width' => '15%',
    'label' => 'LBL_TYPE',
    'default' => false,
  ),
  'LEAD_SOURCE' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LEAD_SOURCE',
    'default' => false,
  ),
  'NEXT_STEP' => 
  array (
    'width' => '10%',
    'label' => 'LBL_NEXT_STEP',
    'default' => false,
  ),
  'PROBABILITY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PROBABILITY',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_CREATED',
    'default' => false,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'width' => '5%',
    'label' => 'LBL_MODIFIED',
    'default' => false,
  ),
);
;
?>
