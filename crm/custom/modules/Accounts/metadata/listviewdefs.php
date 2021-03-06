<?php
$listViewDefs ['Accounts'] = 
array (
  'OTHERDOCUMENTS_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_OTHERDOCUMENTS',
    'width' => '4%',
  ),
  'AGREEMENT_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_AGREEMENT',
    'width' => '4%',
  ),
  'ESTIMATEFORM_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ESTIMATEFORM',
    'width' => '5%',
  ),
  'CASES_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CASES',
    'width' => '10%',
  ),
  'COMPANYNAME_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_COMPANYNAME',
    'width' => '10%',
    'link' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'CONTACTNAME_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_CONTACTNAME',
    'width' => '8%',
  ),
  'OFFICE_PHONE2_C' => 
  array (
    'type' => 'phone',
    'default' => true,
    'label' => 'LBL_OFFICE_PHONE2',
    'width' => '10%',
  ),
  'EMAIL1' => 
  array (
    'width' => '8%',
    'label' => 'LBL_EMAIL_ADDRESS',
    'sortable' => false,
    'link' => true,
    'customCode' => '{$EMAIL1_LINK}',
    'default' => true,
  ),
  'OTHERFIRSTNAME_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_OTHERFIRSTNAME',
    'width' => '5%',
  ),
  'OTHERLASTNAME_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_OTHERLASTNAME',
    'width' => '8%',
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '5%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
  ),
  'BILLING_ADDRESS_STATE' => 
  array (
    'width' => '7%',
    'label' => 'LBL_BILLING_ADDRESS_STATE',
    'default' => false,
  ),
  'NAME' => 
  array (
    'width' => '5%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'link' => true,
    'default' => false,
  ),
  'BILLING_ADDRESS_STREET' => 
  array (
    'width' => '15%',
    'label' => 'LBL_BILLING_ADDRESS_STREET',
    'default' => false,
  ),
  'BILLING_ADDRESS_CITY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_CITY',
    'default' => false,
  ),
  'BILLING_ADDRESS_POSTALCODE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_BILLING_ADDRESS_POSTALCODE',
    'default' => false,
  ),
  'PHONE_FAX' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PHONE_FAX',
    'default' => false,
  ),
  'PHONE_ALTERNATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_OTHER_PHONE',
    'default' => false,
  ),
  'WEBSITE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_WEBSITE',
    'default' => false,
  ),
  'DATE_MODIFIED' => 
  array (
    'width' => '5%',
    'label' => 'LBL_DATE_MODIFIED',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_CREATED',
    'default' => false,
  ),
  'PHONE_OFFICE' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_PHONE',
    'default' => false,
  ),
);
;
?>
