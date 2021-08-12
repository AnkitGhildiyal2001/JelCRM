<?php
// created: 2019-07-09 00:20:36
$viewdefs['r12_CurrentCases']['DetailView'] = array (
  'templateMeta' => 
  array (
    'maxColumns' => '2',
    'form' => 
    array (
    ),
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
    'tabDefs' => 
    array (
      1 => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      2 => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      3 => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      4 => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      5 => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
  ),
  'panels' => 
  array (
    0 => 
    array (
      0 => 
      array (
        'name' => 'document_name',
        'label' => 'LBL_DOC_NAME',
      ),
      1 => 
      array (
        'name' => 'uploadfile',
        'displayParams' => 
        array (
          'link' => 'uploadfile',
          'id' => 'id',
        ),
      ),
    ),
    1 => 
    array (
      0 => 'category_id',
      1 => 'subcategory_id',
    ),
    2 => 
    array (
      0 => 'status',
    ),
    3 => 
    array (
      0 => 'active_date',
      1 => 'exp_date',
    ),
    4 => 
    array (
      0 => 
      array (
        'name' => 'assigned_user_name',
        'label' => 'LBL_ASSIGNED_TO',
      ),
    ),
    5 => 
    array (
      0 => 
      array (
        'name' => 'description',
        'label' => 'LBL_DOC_DESCRIPTION',
      ),
    ),
  ),
);