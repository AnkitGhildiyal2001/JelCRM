<?php
// created: 2019-07-09 00:20:24
$viewdefs['Leads']['EditView'] = array (
  'templateMeta' => 
  array (
    'form' => 
    array (
      'hidden' => 
      array (
        0 => '<input type="hidden" name="prospect_id" value="{if isset($smarty.request.prospect_id)}{$smarty.request.prospect_id}{else}{$bean->prospect_id}{/if}">',
        1 => '<input type="hidden" name="account_id" value="{if isset($smarty.request.account_id)}{$smarty.request.account_id}{else}{$bean->account_id}{/if}">',
        2 => '<input type="hidden" name="contact_id" value="{if isset($smarty.request.contact_id)}{$smarty.request.contact_id}{else}{$bean->contact_id}{/if}">',
        3 => '<input type="hidden" name="opportunity_id" value="{if isset($smarty.request.opportunity_id)}{$smarty.request.opportunity_id}{else}{$bean->opportunity_id}{/if}">',
      ),
      'buttons' => 
      array (
        0 => 'SAVE',
        1 => 'CANCEL',
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
    'javascript' => '<script type="text/javascript" language="Javascript">function copyAddressRight(form)  {ldelim} form.alt_address_street.value = form.primary_address_street.value;form.alt_address_city.value = form.primary_address_city.value;form.alt_address_state.value = form.primary_address_state.value;form.alt_address_postalcode.value = form.primary_address_postalcode.value;form.alt_address_country.value = form.primary_address_country.value;return true; {rdelim} function copyAddressLeft(form)  {ldelim} form.primary_address_street.value =form.alt_address_street.value;form.primary_address_city.value = form.alt_address_city.value;form.primary_address_state.value = form.alt_address_state.value;form.primary_address_postalcode.value =form.alt_address_postalcode.value;form.primary_address_country.value = form.alt_address_country.value;return true; {rdelim} </script>',
    'useTabs' => false,
    'syncDetailEditViews' => true,
    'tabDefs' => 
    array (
      'LBL_CONTACT_INFORMATION' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_PANEL_ADVANCED' => 
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
  ),
  'panels' => 
  array (
    'LBL_CONTACT_INFORMATION' => 
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
          'name' => 'taxid2_c',
          'label' => 'LBL_TAXID2',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'dbaname_c',
          'label' => 'LBL_DBANAME',
        ),
        1 => 'title',
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'first_name',
          'customCode' => '{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name"  id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
        ),
        1 => 
        array (
          'name' => 'last_name',
          'displayParams' => 
          array (
            'required' => true,
          ),
        ),
      ),
      3 => 
      array (
        0 => 'phone_work',
        1 => 'phone_mobile',
      ),
      4 => 
      array (
        0 => 'email1',
        1 => 'phone_fax',
      ),
      5 => 
      array (
        0 => 'website',
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'primary_address_street',
          'hideLabel' => true,
          'type' => 'address',
          'displayParams' => 
          array (
            'key' => 'primary',
            'rows' => 2,
            'cols' => 30,
            'maxlength' => 150,
          ),
        ),
        1 => 
        array (
          'name' => 'primary_address_city',
          'comment' => 'City for primary address',
          'label' => 'LBL_PRIMARY_ADDRESS_CITY',
        ),
      ),
      7 => 
      array (
        0 => 
        array (
          'name' => 'primary_address_state',
          'comment' => 'State for primary address',
          'label' => 'LBL_PRIMARY_ADDRESS_STATE',
        ),
        1 => 
        array (
          'name' => 'primary_address_postalcode',
          'comment' => 'Postal code for primary address',
          'label' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
        ),
      ),
      8 => 
      array (
        0 => 'description',
      ),
    ),
    'LBL_PANEL_ADVANCED' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'cases_c',
          'studio' => 'visible',
          'label' => 'LBL_CASES',
        ),
        1 => 'status',
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'claimfilingnumber_c',
          'studio' => 'visible',
          'label' => 'LBL_CLAIMFILINGNUMBER',
        ),
        1 => 'opportunity_amount',
      ),
      2 => 
      array (
        0 => 'refered_by',
        1 => 'do_not_call',
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
    ),
  ),
);