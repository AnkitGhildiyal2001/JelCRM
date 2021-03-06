<?php
// created: 2019-07-09 00:24:55
$viewdefs['Users']['EditView'] = array (
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
        0 => 
        array (
          'name' => 'status',
          'customCode' => '{if $IS_ADMIN}@@FIELD@@{else}{$STATUS_READONLY}{/if}',
          'displayParams' => 
          array (
            'required' => true,
          ),
        ),
        1 => 'last_name',
      ),
      2 => 
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
          'name' => 'teamleader_c',
          'studio' => 'visible',
          'label' => 'LBL_TEAMLEADER',
        ),
        1 => 'phone_work',
      ),
      1 => 
      array (
        0 => 'phone_home',
        1 => 'phone_mobile',
      ),
      2 => 
      array (
        0 => 'address_street',
        1 => 'address_city',
      ),
      3 => 
      array (
        0 => 'address_state',
        1 => 'address_postalcode',
      ),
      4 => 
      array (
        0 => 'description',
        1 => 'photo',
      ),
    ),
  ),
);