<?php
// created: 2019-08-19 13:42:35
$dictionary["Account"]["fields"]["leads_accounts_1"] = array (
  'name' => 'leads_accounts_1',
  'type' => 'link',
  'relationship' => 'leads_accounts_1',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_LEADS_ACCOUNTS_1_FROM_LEADS_TITLE',
  'id_name' => 'leads_accounts_1leads_ida',
);
$dictionary["Account"]["fields"]["leads_accounts_1_name"] = array (
  'name' => 'leads_accounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_ACCOUNTS_1_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'leads_accounts_1leads_ida',
  'link' => 'leads_accounts_1',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Account"]["fields"]["leads_accounts_1leads_ida"] = array (
  'name' => 'leads_accounts_1leads_ida',
  'type' => 'link',
  'relationship' => 'leads_accounts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_LEADS_ACCOUNTS_1_FROM_LEADS_TITLE',
);
