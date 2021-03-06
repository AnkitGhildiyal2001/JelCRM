<?php
$viewdefs ['Users'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
      'form' => 
      array (
        'headerTpl' => 'modules/Users/tpls/EditViewHeader.tpl',
        'footerTpl' => 'modules/Users/tpls/EditViewFooter.tpl',
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_USER_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EMPLOYEE_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'LBL_USER_INFORMATION' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'user_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 'first_name',
        ),
        1 => 
        array (
          0 => 'last_name',
          1 => 
          array (
            'name' => 'aenumber_c',
            'label' => 'LBL_AENUMBER',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'tlid_c',
            'label' => 'LBL_TLID',
          ),
          1 => 'phone_mobile',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'UserType',
            'customCode' => '{if $IS_ADMIN}{$USER_TYPE_DROPDOWN}{else}{$USER_TYPE_READONLY}{/if}',
          ),
        ),
      ),
      'LBL_EMPLOYEE_INFORMATION' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'reports_to_name',
            'customCode' => '{if $IS_ADMIN}@@FIELD@@{else}{$REPORTS_TO_READONLY}{/if}',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'teamleaderemail_c',
            'label' => 'LBL_TEAMLEADEREMAIL',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'customCode' => '{if $IS_ADMIN}@@FIELD@@{else}{$STATUS_READONLY}{/if}',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        3 => 
        array (
          0 => 'phone_work',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'teamleader1_c',
            'label' => 'LBL_TEAMLEADER1',
          ),
        ),
        5 => 
        array (
          0 => 'address_street',
          1 => 'address_city',
        ),
        6 => 
        array (
          0 => 'address_state',
          1 => 'address_postalcode',
        ),
        7 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
