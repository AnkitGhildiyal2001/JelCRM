<?php
$popupMeta = array (
    'moduleMain' => 'Employees',
    'varName' => 'Employee',
    'orderBy' => 'employees.first_name, employees.last_name',
    'whereClauses' => array (
  'first_name' => 'employees.first_name',
  'last_name' => 'employees.last_name',
),
    'searchInputs' => array (
  0 => 'first_name',
  1 => 'last_name',
),
    'listviewdefs' => array (
  'USER_NAME' => 
  array (
    'type' => 'user_name',
    'studio' => 
    array (
      'no_duplicate' => true,
      'editview' => false,
      'detailview' => true,
      'quickcreate' => false,
      'basic_search' => false,
      'advanced_search' => false,
    ),
    'label' => 'LBL_USER_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'user_name',
  ),
  'TITLE' => 
  array (
    'width' => '15%',
    'label' => 'LBL_TITLE',
    'link' => true,
    'default' => true,
    'name' => 'title',
  ),
  'FIRST_NAME' => 
  array (
    'type' => 'name',
    'label' => 'LBL_FIRST_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'first_name',
  ),
  'LAST_NAME' => 
  array (
    'type' => 'name',
    'label' => 'LBL_LAST_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'last_name',
  ),
  'PHONE_MOBILE' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_MOBILE_PHONE',
    'width' => '10%',
    'default' => true,
    'name' => 'phone_mobile',
  ),
  'PHONE_HOME' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_HOME_PHONE',
    'width' => '10%',
    'default' => true,
    'name' => 'phone_home',
  ),
  'PHONE_WORK' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_PHONE',
    'link' => true,
    'default' => true,
    'name' => 'phone_work',
  ),
  'EMAIL1' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_EMAIL',
    'link' => true,
    'customCode' => '{$EMAIL1_LINK}',
    'default' => true,
    'sortable' => false,
    'name' => 'email1',
  ),
  'ADDRESS_STREET' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS_STREET',
    'width' => '10%',
    'default' => true,
    'name' => 'address_street',
  ),
  'ADDRESS_CITY' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS_CITY',
    'width' => '10%',
    'default' => true,
    'name' => 'address_city',
  ),
  'ADDRESS_STATE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS_STATE',
    'width' => '10%',
    'default' => true,
    'name' => 'address_state',
  ),
  'ADDRESS_POSTALCODE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS_POSTALCODE',
    'width' => '10%',
    'default' => true,
    'name' => 'address_postalcode',
  ),
  'TEAMLEADER1_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_TEAMLEADER1',
    'width' => '10%',
    'name' => 'teamleader1_c',
  ),
  'TEAMLEADEREMAIL_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_TEAMLEADEREMAIL',
    'width' => '10%',
    'name' => 'teamleaderemail_c',
  ),
  'EMPLOYEE_STATUS' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_EMPLOYEE_STATUS',
    'link' => false,
    'default' => true,
    'name' => 'employee_status',
  ),
),
);
