<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2014-11-17 08:09:02
$dictionary["Lead"]["fields"]["leads_calls_1"] = array (
  'name' => 'leads_calls_1',
  'type' => 'link',
  'relationship' => 'leads_calls_1',
  'source' => 'non-db',
  'module' => 'Calls',
  'bean_name' => 'Call',
  'vname' => 'LBL_LEADS_CALLS_1_FROM_CALLS_TITLE',
);


 // created: 2019-08-28 14:46:28
$dictionary['Lead']['fields']['claimnumber_c']['labelValue']='Claim Filing Number';

 

 // created: 2016-05-26 12:24:44
$dictionary['Lead']['fields']['email1']['required']=true;
$dictionary['Lead']['fields']['email1']['audited']=true;
$dictionary['Lead']['fields']['email1']['merge_filter']='disabled';

 

 // created: 2014-10-27 02:43:48
$dictionary['Lead']['fields']['multitaxid_c']['labelValue']='Multi Taxid';

 

 // created: 2014-10-27 02:46:41
$dictionary['Lead']['fields']['altsignertitle_c']['labelValue']='Signer Title';

 

 // created: 2016-05-26 12:29:08
$dictionary['Lead']['fields']['primary_address_state']['required']=false;
$dictionary['Lead']['fields']['primary_address_state']['audited']=true;
$dictionary['Lead']['fields']['primary_address_state']['comments']='State for primary address';
$dictionary['Lead']['fields']['primary_address_state']['merge_filter']='disabled';

 

// created: 2013-12-13 06:59:56
$dictionary["Lead"]["fields"]["pass1_sendinfopack_leads"] = array (
  'name' => 'pass1_sendinfopack_leads',
  'type' => 'link',
  'relationship' => 'pass1_sendinfopack_leads',
  'source' => 'non-db',
  'vname' => 'LBL_PASS1_SENDINFOPACK_LEADS_FROM_PASS1_SENDINFOPACK_TITLE',
);


 // created: 2014-10-20 08:24:55
$dictionary['Lead']['fields']['claimfilingnumber_c']['labelValue']='Claim Filing Status';

 

 // created: 2017-06-29 15:08:54
$dictionary['Lead']['fields']['taxid2_c']['labelValue']='Tax ID';

 

 // created: 2019-08-28 14:51:52
$dictionary['Lead']['fields']['claimstatus_c']['labelValue']='Claim Status';

 

 // created: 2015-08-22 11:26:07
$dictionary['Lead']['fields']['first_name']['required']=true;
$dictionary['Lead']['fields']['first_name']['audited']=true;
$dictionary['Lead']['fields']['first_name']['comments']='First name of the contact';
$dictionary['Lead']['fields']['first_name']['merge_filter']='disabled';

 

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


 // created: 2015-08-22 11:26:16
$dictionary['Lead']['fields']['last_name']['audited']=true;
$dictionary['Lead']['fields']['last_name']['comments']='Last name of the contact';
$dictionary['Lead']['fields']['last_name']['merge_filter']='disabled';

 

 // created: 2019-01-23 20:31:43
$dictionary['Lead']['fields']['cases_c']['labelValue']='Cases';

 

 // created: 2016-05-26 12:22:34
$dictionary['Lead']['fields']['primary_address_postalcode']['required']=false;
$dictionary['Lead']['fields']['primary_address_postalcode']['audited']=true;
$dictionary['Lead']['fields']['primary_address_postalcode']['comments']='Postal code for primary address';
$dictionary['Lead']['fields']['primary_address_postalcode']['merge_filter']='disabled';

 

 // created: 2019-08-28 14:55:15
$dictionary['Lead']['fields']['estclaim_c']['labelValue']='Est Claim';

 

 // created: 2014-10-27 02:48:05
$dictionary['Lead']['fields']['multilocation_c']['labelValue']='Multi Location';

 

// created: 2019-08-30 19:48:43
$dictionary["Lead"]["fields"]["leads_leads_1"] = array (
  'name' => 'leads_leads_1',
  'type' => 'link',
  'relationship' => 'leads_leads_1',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_LEADS_LEADS_1_FROM_LEADS_L_TITLE',
  'id_name' => 'leads_leads_1leads_ida',
);
$dictionary["Lead"]["fields"]["leads_leads_1_name"] = array (
  'name' => 'leads_leads_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_LEADS_1_FROM_LEADS_L_TITLE',
  'save' => true,
  'id_name' => 'leads_leads_1leads_ida',
  'link' => 'leads_leads_1',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Lead"]["fields"]["leads_leads_1leads_ida"] = array (
  'name' => 'leads_leads_1leads_ida',
  'type' => 'link',
  'relationship' => 'leads_leads_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_LEADS_LEADS_1_FROM_LEADS_R_TITLE',
);


 // created: 2015-08-22 11:24:19
$dictionary['Lead']['fields']['companyname_c']['labelValue']='Company Name';

 

 // created: 2019-08-28 15:12:02
$dictionary['Lead']['fields']['office_phone2_c']['labelValue']='Office Phone';

 

// created: 2019-08-19 13:16:27
$dictionary["Lead"]["fields"]["accounts_leads_1"] = array (
  'name' => 'accounts_leads_1',
  'type' => 'link',
  'relationship' => 'accounts_leads_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_LEADS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_leads_1accounts_ida',
);
$dictionary["Lead"]["fields"]["accounts_leads_1_name"] = array (
  'name' => 'accounts_leads_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_LEADS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_leads_1accounts_ida',
  'link' => 'accounts_leads_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Lead"]["fields"]["accounts_leads_1accounts_ida"] = array (
  'name' => 'accounts_leads_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_leads_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_LEADS_1_FROM_LEADS_TITLE',
);


 // created: 2015-08-22 11:26:46
$dictionary['Lead']['fields']['phone_work']['required']=true;
$dictionary['Lead']['fields']['phone_work']['comments']='Work phone number of the contact';
$dictionary['Lead']['fields']['phone_work']['merge_filter']='disabled';

 

 // created: 2019-08-28 15:35:27
$dictionary['Lead']['fields']['estimateform_c']['labelValue']='EstFrm';

 

 // created: 2019-03-07 14:46:55
$dictionary['Lead']['fields']['taxid_c']['labelValue']='TAX ID';

 

 // created: 2016-05-26 12:22:04
$dictionary['Lead']['fields']['primary_address_city']['required']=false;
$dictionary['Lead']['fields']['primary_address_city']['audited']=true;
$dictionary['Lead']['fields']['primary_address_city']['comments']='City for primary address';
$dictionary['Lead']['fields']['primary_address_city']['merge_filter']='disabled';

 

 // created: 2016-05-26 12:28:57
$dictionary['Lead']['fields']['primary_address_street']['required']=false;
$dictionary['Lead']['fields']['primary_address_street']['audited']=true;
$dictionary['Lead']['fields']['primary_address_street']['comments']='Street address for primary address';
$dictionary['Lead']['fields']['primary_address_street']['merge_filter']='disabled';

 

 // created: 2016-05-26 12:24:33
$dictionary['Lead']['fields']['dbaname_c']['labelValue']='DBA Name';

 

// created: 2021-06-03 21:20:26
$dictionary["Lead"]["fields"]["accounts_leads_2"] = array (
  'name' => 'accounts_leads_2',
  'type' => 'link',
  'relationship' => 'accounts_leads_2',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_LEADS_2_FROM_ACCOUNTS_TITLE',
);


// created: 2021-06-03 21:22:24
$dictionary["Lead"]["fields"]["leads_accounts_2"] = array (
  'name' => 'leads_accounts_2',
  'type' => 'link',
  'relationship' => 'leads_accounts_2',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_LEADS_ACCOUNTS_2_FROM_ACCOUNTS_TITLE',
);


 // created: 2019-12-06 19:56:34
$dictionary['Lead']['fields']['team_lead_c']['inline_edit']='1';
$dictionary['Lead']['fields']['team_lead_c']['labelValue']='Team Lead Name';

 

 // created: 2019-08-17 12:15:05
$dictionary['Lead']['fields']['taxid_c']['inline_edit']='1';
$dictionary['Lead']['fields']['taxid_c']['labelValue']='TaxID';

 

 // created: 2019-09-02 05:25:56
$dictionary['Lead']['fields']['phone_mobile_new_c']['inline_edit']='1';
$dictionary['Lead']['fields']['phone_mobile_new_c']['labelValue']='Mobile Number:';

 

 // created: 2019-08-28 14:59:03
$dictionary['Lead']['fields']['office_phone2_c']['inline_edit']='1';
$dictionary['Lead']['fields']['office_phone2_c']['labelValue']='Office Phone:::';

 

 // created: 2019-09-02 05:09:42
$dictionary['Lead']['fields']['phone_mobile_c']['inline_edit']='1';
$dictionary['Lead']['fields']['phone_mobile_c']['labelValue']='Contact\'s Mobile:::';

 

 // created: 2019-08-17 12:33:52
$dictionary['Lead']['fields']['cases_c']['inline_edit']='1';
$dictionary['Lead']['fields']['cases_c']['labelValue']='Cases';

 

 // created: 2019-08-12 12:27:29
$dictionary['Lead']['fields']['companyname_c']['inline_edit']='1';
$dictionary['Lead']['fields']['companyname_c']['labelValue']='Company Legal Name';

 

 // created: 2019-08-26 00:52:06
$dictionary['Lead']['fields']['phone_work']['required']=false;
$dictionary['Lead']['fields']['phone_work']['comments']='Work phone number of the contact';
$dictionary['Lead']['fields']['phone_work']['merge_filter']='disabled';
$dictionary['Lead']['fields']['phone_work']['inline_edit']=true;

 

 // created: 2019-08-12 13:06:25
$dictionary['Lead']['fields']['primary_address_country']['inline_edit']=true;

 

 // created: 2019-10-01 16:08:23
$dictionary['Lead']['fields']['chapter_c']['inline_edit']='1';
$dictionary['Lead']['fields']['chapter_c']['labelValue']='Chapter';

 

 // created: 2019-08-12 11:27:18
$dictionary['Lead']['fields']['title']['inline_edit']=true;
$dictionary['Lead']['fields']['title']['comments']='The title of the contact';
$dictionary['Lead']['fields']['title']['merge_filter']='disabled';

 

 // created: 2019-08-28 14:45:01
$dictionary['Lead']['fields']['claimnumber_c']['inline_edit']='1';
$dictionary['Lead']['fields']['claimnumber_c']['labelValue']='Claim Filing Number';

 

 // created: 2019-08-26 00:52:49
$dictionary['Lead']['fields']['phone_office_c']['inline_edit']='1';
$dictionary['Lead']['fields']['phone_office_c']['labelValue']='Office Phone:';

 

 // created: 2019-08-26 00:24:29
$dictionary['Lead']['fields']['dbaname_c']['inline_edit']='1';
$dictionary['Lead']['fields']['dbaname_c']['labelValue']='Company DBA Name';

 

 // created: 2021-06-05 12:31:18
$dictionary['Lead']['fields']['jel_percent_c']['inline_edit']='1';
$dictionary['Lead']['fields']['jel_percent_c']['labelValue']='JEL Percentage';

 

 // created: 2019-12-06 20:02:04
$dictionary['Lead']['fields']['team_lead_email_c']['inline_edit']='1';
$dictionary['Lead']['fields']['team_lead_email_c']['labelValue']='Team Lead Email';

 

 // created: 2019-08-17 11:59:28
$dictionary['Lead']['fields']['claimfilingnumber_c']['inline_edit']='1';
$dictionary['Lead']['fields']['claimfilingnumber_c']['labelValue']='Claim Filing Number';

 

 // created: 2019-08-28 14:55:48
$dictionary['Lead']['fields']['estclaim_c']['inline_edit']='1';
$dictionary['Lead']['fields']['estclaim_c']['labelValue']='Est Claim';

 

 // created: 2019-08-17 12:04:28

 

 // created: 2019-09-01 11:40:28
$dictionary['Lead']['fields']['claimstatus_c']['inline_edit']='1';
$dictionary['Lead']['fields']['claimstatus_c']['labelValue']='LBL_CLAIMSTATUS';

 
?>