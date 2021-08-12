<?php
// created: 2021-06-03 16:40:13
$subpanel_layout['list_fields'] = array (
  'full_name' => 
  array (
    'vname' => 'LBL_LIST_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'module' => 'Users',
    'width' => '25%',
    'default' => true,
  ),
  'user_name' => 
  array (
    'vname' => 'LBL_LIST_USER_NAME',
    'width' => '25%',
    'default' => true,
  ),
  'email1' => 
  array (
    'vname' => 'LBL_LIST_EMAIL',
    'width' => '25%',
    'default' => true,
  ),
  'phone_work' => 
  array (
    'vname' => 'LBL_LIST_PHONE',
    'width' => '21%',
    'default' => true,
  ),
  'reports_to_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_REPORTS_TO_NAME',
    'id' => 'REPORTS_TO_ID',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'reports_to_id',
  ),
  'teamleaderemail_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_TEAMLEADEREMAIL',
    'width' => '10%',
  ),
  'first_name' => 
  array (
    'usage' => 'query_only',
  ),
  'last_name' => 
  array (
    'usage' => 'query_only',
  ),
);