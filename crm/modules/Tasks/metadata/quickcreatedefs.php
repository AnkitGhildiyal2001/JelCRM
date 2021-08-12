<?php
// created: 2019-07-09 00:41:16
$viewdefs['Tasks']['QuickCreate'] = array(
    'templateMeta' => array(
        'form' => array(
            'hidden' => array(
                0 => '<input type="hidden" name="isSaveAndNew" value="false">',
                1 => '<input type="hidden" name="is_ajax_call" value="1">',
            ),
            'buttons' => array(
                0 => 'SAVE',
                1 => 'CANCEL',
                2 => array(
                    'customCode' => '{if $fields.status.value != "Completed"}<input title="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}" class="button" onclick="document.getElementById(\'status\').value=\'Completed\'; this.form.action.value=\'Save\'; this.form.return_module.value=\'Tasks\'; this.form.isDuplicate.value=true; this.form.isSaveAndNew.value=true; this.form.return_action.value=\'EditView\'; this.form.return_id.value=\'{$fields.id.value}\'; return check_form(\'EditView\');" type="submit" name="button" value="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_LABEL}">{/if}',
                ),
            ),
        ),
        'maxColumns' => '2',
        'widths' => array(
            0 => array(
                'label' => '10',
                'field' => '30',
            ),
            1 => array(
                'label' => '10',
                'field' => '30',
            ),
        ),
        'useTabs' => false,
        'tabDefs' => array(
            'DEFAULT' => array(
                'newTab' => false,
                'panelDefault' => 'expanded',
            ),
        ),
    ),
    'panels' => array(
        'default' => array(
            0 => array(
                0 => array(
                    'name' => 'name',
                    'displayParams' => array(
                        'required' => true,
                    ),
                ),
            ),
            1 => array(
                0 => array(
                    'name' => 'lead_legal_name',
                    'label' => 'Company Legal Name',
                    'displayParams' => array(
                        'field' => array(
                            'disabled' => 'disabled',
                        ),
                    ),
                ),
            ),
            2 => array(
                0 => array(
                    'name' => 'lead_address',
                    'label' => 'Address',
                    'displayParams' => array(
                        'field' => array(
                            'disabled' => 'disabled',
                        ),
                    ),
                ),
            ),
            3 => array(
                0 => array(
                    'name' => 'lead_estimated_claim',
                    'label' => 'Estimated Claim',
                    'displayParams' => array(
                        'field' => array(
                            'disabled' => 'disabled',
                        ),
                    ),
                ),
            ),
            4 => array(
                0 => array(
                    'name' => 'lead_tax_id',
                    'label' => 'Tax ID',
                    'displayParams' => array(
                        'field' => array(
                            'disabled' => 'disabled',
                        ),
                    ),
                ),
            ),
            5 => array(
                0 => array(
                    'name' => 'lead_phone',
                    'label' => 'Phone',
                    'displayParams' => array(
                        'field' => array(
                            'disabled' => 'disabled',
                        ),
                    ),
                ),
            ),
            6 => array(
                0 => array(
                    'name' => 'lead_email',
                    'label' => 'Email',
                    'displayParams' => array(
                        'field' => array(
                            'disabled' => 'disabled',
                        ),
                    ),
                ),
            ),
            7 => array(
                0 => array(
                    'name' => 'lead_account_executive',
                    'label' => 'Account Executive',
                    'displayParams' => array(
                        'field' => array(
                            'disabled' => 'disabled',
                        ),
                    ),
                ),
            ),
            8 => array(
                0 => array(
                    'name' => 'assigned_user_name',
                    'label' => 'LBL_ASSIGNED_TO_NAME',
                    'displayParams' => array(
                        'hideButtons' => 'true',
                        'class' => '',
                        'field' => array(
                            'disabled' => 'disabled',
                        ),
                    ),
                ),
            ),
            9 => array(
                0 => array(
                    'name' => 'description',
                    'displayParams' => array(
                        'rows' => 8,
                        'cols' => 60,
                    ),
                ),
            ),
        ),
    ),
);
