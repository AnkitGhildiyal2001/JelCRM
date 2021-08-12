<?php
$popupMeta = array (
    'moduleMain' => 'User',
    'varName' => 'USER',
    'orderBy' => 'user_name',
    'whereClauses' => array (
  'first_name' => 'users.first_name',
  'last_name' => 'users.last_name',
  'user_name' => 'users.user_name',
  'is_group' => 'users.is_group',
),
    'searchInputs' => array (
  0 => 'first_name',
  1 => 'last_name',
  2 => 'user_name',
  3 => 'is_group',
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '30%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'related_fields' => 
    array (
      0 => 'last_name',
      1 => 'first_name',
    ),
    'orderBy' => 'last_name',
    'default' => true,
    'name' => 'name',
  ),
  'EMAIL1' => 
  array (
    'width' => '30%',
    'sortable' => false,
    'label' => 'LBL_LIST_EMAIL',
    'link' => true,
    'default' => true,
    'name' => 'email1',
  ),
  'PHONE_WORK' => 
  array (
    'width' => '25%',
    'label' => 'LBL_LIST_PHONE',
    'link' => true,
    'default' => true,
    'name' => 'phone_work',
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
    'width' => '5%',
    'default' => true,
    'name' => 'address_state',
  ),
  'ADDRESS_POSTALCODE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS_POSTALCODE',
    'width' => '5%',
    'default' => true,
    'name' => 'address_postalcode',
  ),
  'STATUS' => 
  array (
    'width' => '5%',
    'label' => 'LBL_STATUS',
    'link' => false,
    'default' => true,
    'name' => 'status',
  ),
  'REPORTS_TO_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_REPORTS_TO_NAME',
    'id' => 'REPORTS_TO_ID',
    'width' => '10%',
    'default' => true,
    'name' => 'reports_to_name',
  ),
  'IS_ADMIN' => 
  array (
    'width' => '5%',
    'label' => 'LBL_ADMIN',
    'link' => false,
    'default' => true,
    'name' => 'is_admin',
  ),
),
);
