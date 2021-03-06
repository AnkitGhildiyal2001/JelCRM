<?php
// created: 2019-07-09 00:34:56
$viewdefs = array (
  'Accounts' => 
  array (
    'DetailView' => 
    array (
      'templateMeta' => 
      array (
        'form' => 
        array (
          'buttons' => 
          array (
            0 => 'EDIT',
            1 => 'DUPLICATE',
            2 => 'DELETE',
            3 => 'FIND_DUPLICATES',
          ),
        ),
        'maxColumns' => '2',
        'widths' => 
        array (
          0 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
          1 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
        ),
        'includes' => 
        array (
          0 => 
          array (
            'file' => 'modules/Accounts/Account.js',
          ),
        ),
        'useTabs' => false,
        'tabDefs' => 
        array (
          'LBL_ACCOUNT_INFORMATION' => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
          'LBL_EDITVIEW_PANEL3' => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
          'LBL_PANEL_ASSIGNMENT' => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
        ),
        'syncDetailEditViews' => true,
      ),
      'panels' => 
      array (
        'lbl_account_information' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'companyname_c',
              'label' => 'LBL_COMPANYNAME',
            ),
            1 => 
            array (
              'name' => 'name',
              'comment' => 'Name of the Company',
              'label' => 'LBL_NAME',
            ),
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'phone_office',
              'comment' => 'The office phone number',
              'label' => 'LBL_PHONE_OFFICE',
            ),
            1 => 
            array (
              'name' => 'phone_mobile_c',
              'label' => 'LBL_PHONE_MOBILE',
            ),
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'contactname_c',
              'label' => 'LBL_CONTACTNAME',
            ),
            1 => 
            array (
              'name' => 'phone_fax',
              'comment' => 'The fax phone number of this company',
              'label' => 'LBL_FAX',
            ),
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'otherfirstname_c',
              'label' => 'LBL_OTHERFIRSTNAME',
            ),
            1 => 
            array (
              'name' => 'otherlastname_c',
              'label' => 'LBL_OTHERLASTNAME',
            ),
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'billing_address_street',
              'label' => 'LBL_BILLING_ADDRESS',
              'type' => 'address',
              'displayParams' => 
              array (
                'key' => 'billing',
              ),
            ),
            1 => 
            array (
              'name' => 'email1',
              'studio' => 'false',
              'label' => 'LBL_EMAIL',
            ),
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'billing_address_city',
              'comment' => 'The city used for billing address',
              'label' => 'LBL_BILLING_ADDRESS_CITY',
            ),
            1 => 
            array (
              'name' => 'billing_address_state',
              'comment' => 'The state used for billing address',
              'label' => 'LBL_BILLING_ADDRESS_STATE',
            ),
          ),
          6 => 
          array (
            0 => 
            array (
              'name' => 'agreement_c',
              'label' => 'LBL_AGREEMENT',
            ),
            1 => 
            array (
              'name' => 'estimateform_c',
              'label' => 'LBL_ESTIMATEFORM',
            ),
          ),
          7 => 
          array (
            0 => 
            array (
              'name' => 'website',
              'type' => 'link',
              'label' => 'LBL_WEBSITE',
              'displayParams' => 
              array (
                'link_target' => '_blank',
              ),
            ),
            1 => 
            array (
              'name' => 'description',
              'comment' => 'Full text of the note',
              'label' => 'LBL_DESCRIPTION',
            ),
          ),
        ),
        'lbl_editview_panel3' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'casem_c',
              'label' => 'LBL_CASEM',
            ),
            1 => 
            array (
              'name' => 'accountnumber_c',
              'label' => 'LBL_ACCOUNTNUMBER',
            ),
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'taxid_c',
              'label' => 'LBL_TAXID',
            ),
            1 => 
            array (
              'name' => 'estclaim_c',
              'label' => 'LBL_ESTCLAIM',
            ),
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'claimfilingstatus_c',
              'label' => 'LBL_CLAIMFILINGSTATUS',
            ),
            1 => 
            array (
              'name' => 'otherdocuments_c',
              'label' => 'LBL_OTHERDOCUMENTS',
            ),
          ),
          3 => 
          array (
            0 => '',
          ),
        ),
        'LBL_PANEL_ASSIGNMENT' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_ASSIGNED_TO',
            ),
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'date_modified',
              'label' => 'LBL_DATE_MODIFIED',
              'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
            ),
            1 => 
            array (
              'name' => 'date_entered',
              'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
            ),
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'modified_by_name',
              'label' => 'LBL_MODIFIED_NAME',
            ),
            1 => 
            array (
              'name' => 'created_by_name',
              'label' => 'LBL_CREATED',
            ),
          ),
        ),
      ),
    ),
  ),
);