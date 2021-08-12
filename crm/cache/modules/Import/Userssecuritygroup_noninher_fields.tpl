
<input type="text" name="{$fields.securitygroup_noninher_fields.name}" class="sqsEnabled" tabindex="1" id="{$fields.securitygroup_noninher_fields.name}" size="" value="{$fields.securitygroup_noninher_fields.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.securitygroup_noninher_fields.id_name}" 
	id="{$fields.securitygroup_noninher_fields.id_name}" 
	>
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.securitygroup_noninher_fields.name}" id="btn_{$fields.securitygroup_noninher_fields.name}" tabindex="1" title="{sugar_translate label="LBL_SELECT_BUTTON_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_SELECT_BUTTON_LABEL"}"
onclick='open_popup(
    "{$fields.securitygroup_noninher_fields.module}", 
	600, 
	400, 
	"", 
	true, 
	false, 
	{literal}{"call_back_function":"set_return","form_name":"importstep3","field_to_name_array":{"id":"securitygroup_noninher_fields"}}{/literal}, 
	"single", 
	true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.securitygroup_noninher_fields.name}" id="btn_clr_{$fields.securitygroup_noninher_fields.name}" tabindex="1" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.securitygroup_noninher_fields.name}', '{$fields.securitygroup_noninher_fields.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.securitygroup_noninher_fields.name}']) != 'undefined'",
		enableQS
);
</script>