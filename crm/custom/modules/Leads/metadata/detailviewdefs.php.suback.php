<?php
// created: 2019-07-09 00:34:56
$viewdefs = array (
  'Leads' => 
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
            3 => 
            array (
              'customCode' => '{if $bean->aclAccess("edit")}<input title="{$MOD.LBL_CONVERTLEAD_TITLE}" accessKey="{$MOD.LBL_CONVERTLEAD_BUTTON_KEY}" type="button" class="button" onClick="document.location=\'index.php?module=Leads&action=ConvertLead&record={$fields.id.value}\'" name="convert" value="{$MOD.LBL_CONVERTLEAD}">{/if}',
            ),
            4 => 'FIND_DUPLICATES',
            5 => 
            array (
              'customCode' => '<input title="{$APP.LBL_MANAGE_SUBSCRIPTIONS}" class="button" onclick="this.form.return_module.value=\'Leads\'; this.form.return_action.value=\'DetailView\';this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Leads\';" type="submit" name="Manage Subscriptions" value="{$APP.LBL_MANAGE_SUBSCRIPTIONS}">',
            ),
          ),
          'headerTpl' => 'modules/Leads/tpls/DetailViewHeader.tpl',
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
            'file' => 'modules/Leads/Lead.js',
          ),
        ),
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
              'comment' => 'First name of the contact',
              'label' => 'LBL_FIRST_NAME',
            ),
            1 => 
            array (
              'name' => 'last_name',
              'comment' => 'Last name of the contact',
              'label' => 'LBL_LAST_NAME',
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
              'label' => 'LBL_PRIMARY_ADDRESS',
              'type' => 'address',
              'displayParams' => 
              array (
                'key' => 'primary',
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
    ),
  ),
);