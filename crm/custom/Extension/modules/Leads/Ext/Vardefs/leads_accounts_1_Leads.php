<?php
// created: 2019-08-19 13:42:35
$dictionary["Lead"]["fields"]["leads_accounts_1"] = array (
  'name' => 'leads_accounts_1',
  'type' => 'link',
  'relationship' => 'leads_accounts_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_LEADS_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'leads_accounts_1accounts_idb',
);
$dictionary["Lead"]["fields"]["leads_accounts_1_name"] = array (
  'name' => 'leads_accounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'leads_accounts_1accounts_idb',
  'link' => 'leads_accounts_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Lead"]["fields"]["leads_accounts_1accounts_idb"] = array (
  'name' => 'leads_accounts_1accounts_idb',
  'type' => 'link',
  'relationship' => 'leads_accounts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_LEADS_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
);
