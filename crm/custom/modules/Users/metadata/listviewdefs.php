<?php
$listViewDefs ['Users'] = 
array (
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
  ),
  'EMAIL1' => 
  array (
    'width' => '30%',
    'sortable' => false,
    'label' => 'LBL_LIST_EMAIL',
    'link' => true,
    'default' => true,
  ),
  'PHONE_WORK' => 
  array (
    'width' => '25%',
    'label' => 'LBL_LIST_PHONE',
    'link' => true,
    'default' => true,
  ),
  'ADDRESS_STREET' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS_STREET',
    'width' => '10%',
    'default' => true,
  ),
  'ADDRESS_CITY' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS_CITY',
    'width' => '10%',
    'default' => true,
  ),
  'ADDRESS_STATE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS_STATE',
    'width' => '5%',
    'default' => true,
  ),
  'ADDRESS_POSTALCODE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS_POSTALCODE',
    'width' => '5%',
    'default' => true,
  ),
  'STATUS' => 
  array (
    'width' => '5%',
    'label' => 'LBL_STATUS',
    'link' => false,
    'default' => true,
  ),
  'REPORTS_TO_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_REPORTS_TO_NAME',
    'id' => 'REPORTS_TO_ID',
    'width' => '10%',
    'default' => true,
  ),
  'TEAMLEADEREMAIL_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_TEAMLEADEREMAIL',
    'width' => '10%',
  ),
  'IS_ADMIN' => 
  array (
    'width' => '5%',
    'label' => 'LBL_ADMIN',
    'link' => false,
    'default' => true,
  ),
  'IS_GROUP' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_GROUP',
    'link' => true,
    'default' => false,
  ),
  'TITLE' => 
  array (
    'width' => '15%',
    'label' => 'LBL_TITLE',
    'link' => true,
    'default' => false,
  ),
  'DEPARTMENT' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DEPARTMENT',
    'link' => true,
    'default' => false,
  ),
  'TEAMLEADER1_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_TEAMLEADER1',
    'width' => '10%',
  ),
  'USER_NAME' => 
  array (
    'width' => '25%',
    'label' => 'LBL_USER_NAME',
    'link' => true,
    'default' => false,
  ),
);
;
?>
