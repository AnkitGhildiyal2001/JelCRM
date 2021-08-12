<?php
 // created: 2021-06-03 21:22:24
$layout_defs["Leads"]["subpanel_setup"]['leads_accounts_2'] = array (
  'order' => 100,
  'module' => 'Accounts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_LEADS_ACCOUNTS_2_FROM_ACCOUNTS_TITLE',
  'get_subpanel_data' => 'leads_accounts_2',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
