<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2013-12-13 06:59:56
$dictionary["Account"]["fields"]["pass1_sendiopack_accounts"] = array (
  'name' => 'pass1_sendiopack_accounts',
  'type' => 'link',
  'relationship' => 'pass1_sendinfopack_accounts',
  'source' => 'non-db',
  'vname' => 'LBL_PASS1_SENDINFOPACK_ACCOUNTS_FROM_PASS1_SENDINFOPACK_TITLE',
);


 // created: 2019-08-28 15:51:28
$dictionary['Account']['fields']['titlecontact_c']['labelValue']='Contact\'s Title';

 

 // created: 2017-08-19 21:50:14
$dictionary['Account']['fields']['otherdocuments_c']['labelValue']='OthrDocs';

 

 // created: 2015-08-22 12:53:25
$dictionary['Account']['fields']['otherfirstname_c']['labelValue']='Signer First Name';

 

 // created: 2014-10-20 07:58:02
$dictionary['Account']['fields']['claimstatus_c']['labelValue']='Claim Status';

 

 // created: 2014-10-20 07:58:02
$dictionary['Account']['fields']['claimfilingstatus_c']['labelValue']='Claim Filing Status';

 

 // created: 2016-04-07 14:22:23
$dictionary['Account']['fields']['rating']['comments']='An arbitrary rating for this company for use in comparisons with others';
$dictionary['Account']['fields']['rating']['importable']='false';
$dictionary['Account']['fields']['rating']['merge_filter']='disabled';

 

 // created: 2015-08-22 13:07:24
$dictionary['Account']['fields']['accountnumber_c']['labelValue']='Account Number';

 

 // created: 2019-08-28 15:30:20
$dictionary['Account']['fields']['cases_c']['labelValue']='Cases';

 

 // created: 2014-10-20 07:58:03
$dictionary['Account']['fields']['estclaim_c']['labelValue']='Est Claim';

 

 // created: 2017-08-16 14:13:56
$dictionary['Account']['fields']['agreement_c']['labelValue']='Agrmnt';

 

// created: 2019-08-19 13:16:27
$dictionary["Account"]["fields"]["accounts_leads_1"] = array (
  'name' => 'accounts_leads_1',
  'type' => 'link',
  'relationship' => 'accounts_leads_1',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_LEADS_1_FROM_LEADS_TITLE',
);


 // created: 2014-10-20 07:58:03
$dictionary['Account']['fields']['companyname_c']['labelValue']='Company Name';

 

 // created: 2019-08-28 15:48:46
$dictionary['Account']['fields']['office_phone2_c']['labelValue']='Office Phone';

 

 // created: 2016-03-30 20:55:57
$dictionary['Account']['fields']['contactname_c']['labelValue']='Contact Name';

 

 // created: 2015-08-22 13:50:11
$dictionary['Account']['fields']['name']['comments']='';
$dictionary['Account']['fields']['name']['merge_filter']='disabled';
$dictionary['Account']['fields']['name']['default']='';
$dictionary['Account']['fields']['name']['required']=false;
$dictionary['Account']['fields']['name']['audited']=false;

 

 // created: 2017-08-19 21:49:58
$dictionary['Account']['fields']['estimateform_c']['labelValue']='EstFrm';

 

 // created: 2015-08-22 12:55:07
$dictionary['Account']['fields']['otherlastname_c']['labelValue']='Signer\'s Last Name';

 

 // created: 2016-10-07 15:12:19
$dictionary['Account']['fields']['taxid_c']['labelValue']='TaxID';

 

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


 // created: 2015-08-22 13:36:38
$dictionary['Account']['fields']['billing_address_street']['comments']='The street address used for billing address';
$dictionary['Account']['fields']['billing_address_street']['merge_filter']='disabled';

 

 // created: 2016-04-07 14:22:10
$dictionary['Account']['fields']['ticker_symbol']['comments']='The stock trading (ticker) symbol for the company';
$dictionary['Account']['fields']['ticker_symbol']['importable']='false';
$dictionary['Account']['fields']['ticker_symbol']['merge_filter']='disabled';

 

 // created: 2016-04-07 14:21:46
$dictionary['Account']['fields']['sic_code']['comments']='SIC code of the account';
$dictionary['Account']['fields']['sic_code']['importable']='false';
$dictionary['Account']['fields']['sic_code']['merge_filter']='disabled';

 

 // created: 2019-08-28 15:32:06
$dictionary['Account']['fields']['dbaname_c']['labelValue']='Company DBA Name';

 

// created: 2021-06-03 21:20:26
$dictionary["Account"]["fields"]["accounts_leads_2"] = array (
  'name' => 'accounts_leads_2',
  'type' => 'link',
  'relationship' => 'accounts_leads_2',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_ACCOUNTS_LEADS_2_FROM_LEADS_TITLE',
);


// created: 2021-06-03 21:22:24
$dictionary["Account"]["fields"]["leads_accounts_2"] = array (
  'name' => 'leads_accounts_2',
  'type' => 'link',
  'relationship' => 'leads_accounts_2',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_LEADS_ACCOUNTS_2_FROM_LEADS_TITLE',
);


 // created: 2020-02-28 13:39:33
$dictionary['Account']['fields']['taxid_c']['inline_edit']='1';
$dictionary['Account']['fields']['taxid_c']['labelValue']='TaxID';

 

 // created: 2019-09-02 05:25:59
$dictionary['Account']['fields']['phone_mobile_new_c']['inline_edit']='1';
$dictionary['Account']['fields']['phone_mobile_new_c']['labelValue']='Mobile Number:';

 

 // created: 2019-08-26 03:26:29
$dictionary['Account']['fields']['office_phone2_c']['inline_edit']='1';
$dictionary['Account']['fields']['office_phone2_c']['labelValue']='Office Phone:::';

 

 // created: 2020-03-24 13:34:45
$dictionary['Account']['fields']['cases_c']['inline_edit']='1';
$dictionary['Account']['fields']['cases_c']['labelValue']='Cases';

 

 // created: 2019-08-24 20:46:53
$dictionary['Account']['fields']['companyname_c']['inline_edit']='1';
$dictionary['Account']['fields']['companyname_c']['labelValue']='Company Legal Name';

 

 // created: 2019-08-19 14:21:32
$dictionary['Account']['fields']['titlecontact_c']['inline_edit']='1';
$dictionary['Account']['fields']['titlecontact_c']['labelValue']='Contact\'s Title';

 

 // created: 2019-08-19 14:24:46
$dictionary['Account']['fields']['firstnamecontact_c']['inline_edit']='1';
$dictionary['Account']['fields']['firstnamecontact_c']['labelValue']='firstnamecontact';

 

 // created: 2019-08-19 14:04:06
$dictionary['Account']['fields']['companydbaname_c']['inline_edit']='1';
$dictionary['Account']['fields']['companydbaname_c']['labelValue']='companydbaname';

 

 // created: 2019-08-28 15:32:30
$dictionary['Account']['fields']['dbaname_c']['inline_edit']='1';
$dictionary['Account']['fields']['dbaname_c']['labelValue']='Company DBA Name';

 

 // created: 2019-08-28 15:36:00
$dictionary['Account']['fields']['estimateform_c']['inline_edit']='1';
$dictionary['Account']['fields']['estimateform_c']['labelValue']='EstFrm';

 

 // created: 2019-08-19 14:27:47
$dictionary['Account']['fields']['first_name_c']['inline_edit']='1';
$dictionary['Account']['fields']['first_name_c']['labelValue']='Contact\'s First Name';

 

 // created: 2019-08-19 14:28:23
$dictionary['Account']['fields']['last_name_c']['inline_edit']='1';
$dictionary['Account']['fields']['last_name_c']['labelValue']='Contact\'s Last Name';

 

 // created: 2021-06-05 12:28:27
$dictionary['Account']['fields']['jelpercent_c']['inline_edit']='1';
$dictionary['Account']['fields']['jelpercent_c']['labelValue']='JEL Percent';

 
?>