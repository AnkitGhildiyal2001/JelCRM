

<script>
    {literal}
    $(document).ready(function(){
	    $("ul.clickMenu").each(function(index, node){
	        $(node).sugarActionMenu();
	    });
    });
    {/literal}
</script>
<div class="clear"></div>
<form action="index.php" method="POST" name="{$form_name}" id="{$form_id}" {$enctype}>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="dcQuickEdit">
<tr>
<td class="buttons">
<input type="hidden" name="module" value="{$module}">
{if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="{$fields.id.value}">
{else}
<input type="hidden" name="record" value="{$fields.id.value}">
{/if}
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="{$smarty.request.return_module}">
<input type="hidden" name="return_action" value="{$smarty.request.return_action}">
<input type="hidden" name="return_id" value="{$smarty.request.return_id}">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
{if (!empty($smarty.request.return_module) || !empty($smarty.request.relate_to)) && !(isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true")}
<input type="hidden" name="relate_to" value="{if $smarty.request.return_relationship}{$smarty.request.return_relationship}{elseif $smarty.request.relate_to && empty($smarty.request.from_dcmenu)}{$smarty.request.relate_to}{elseif empty($isDCForm) && empty($smarty.request.from_dcmenu)}{$smarty.request.return_module}{/if}">
<input type="hidden" name="relate_id" value="{$smarty.request.return_id}">
{/if}
<input type="hidden" name="offset" value="{$offset}">
{assign var='place' value="_HEADER"} <!-- to be used for id for buttons with custom code in def files-->
<input type="hidden" name="isSaveAndNew" value="false">   
<input type="hidden" name="is_ajax_call" value="1">   
<div class="action_buttons">{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}"  class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_Tasks'); disableOnUnloadEditView(); _form.action.value='Save';if(check_form('form_SubpanelQuickCreate_Tasks'))return SUGAR.subpanelUtils.inlineSave(_form.id, 'Tasks_subpanel_save_button');return false;" type="submit" name="Tasks_subpanel_save_button" id="Tasks_subpanel_save_button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if}  <input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate($(this).attr('id'));return false;" type="submit" name="Tasks_subpanel_cancel_button" id="Tasks_subpanel_cancel_button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}">  <input title="{$APP.LBL_FULL_FORM_BUTTON_TITLE}" class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_Tasks'); disableOnUnloadEditView(_form); _form.return_action.value='DetailView'; _form.action.value='EditView'; if(typeof(_form.to_pdf)!='undefined') _form.to_pdf.value='0';" type="submit" name="Tasks_subpanel_full_form_button" id="Tasks_subpanel_full_form_button" value="{$APP.LBL_FULL_FORM_BUTTON_LABEL}"> <input type="hidden" name="full_form" value="full_form"> {if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Tasks", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}<div class="clear"></div></div>
</td>
<td align='right' class="edit-view-pagination">
</td>
</tr>
</table>{sugar_include include=$includes}
<span id='tabcounterJS'><script>SUGAR.TabFields=new Array();//this will be used to track tabindexes for references</script></span>
<div id="form_SubpanelQuickCreate_Tasks_tabs"
>
<div >
<div id="detailpanel_1" >
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table width="100%" border="0" cellspacing="1" cellpadding="0"  id='Default_{$module}_Subpanel'  class="yui3-skin-sam edit view panelContainer">
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='name_label' width='12.5%' data-total-columns="1" scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_SUBJECT' module='Tasks'}{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="1" colspan='3'>
{counter name="panelFieldCount"}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if}  
<input type='text' name='{$fields.name.name}' 
id='{$fields.name.name}' size='30' 
maxlength='50' 
value='{$value}' title=''      accesskey='7'  >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='lead_legal_name_label' width='12.5%' data-total-columns="1" scope="col">
{capture name="label" assign="label"}{sugar_translate label='Company Legal Name' module='Tasks'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="1" colspan='3'>
{counter name="panelFieldCount"}

{if strlen($fields.lead_legal_name.value) <= 0}
{assign var="value" value=$fields.lead_legal_name.default_value }
{else}
{assign var="value" value=$fields.lead_legal_name.value }
{/if}  
<input type='text' name='{$fields.lead_legal_name.name}' 
id='{$fields.lead_legal_name.name}' size='30' 
value='{$value}' title=''       disabled="disabled">
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='lead_address_label' width='12.5%' data-total-columns="1" scope="col">
{capture name="label" assign="label"}{sugar_translate label='Address' module='Tasks'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="1" colspan='3'>
{counter name="panelFieldCount"}

{if strlen($fields.lead_address.value) <= 0}
{assign var="value" value=$fields.lead_address.default_value }
{else}
{assign var="value" value=$fields.lead_address.value }
{/if}  
<input type='text' name='{$fields.lead_address.name}' 
id='{$fields.lead_address.name}' size='30' 
value='{$value}' title=''       disabled="disabled">
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='lead_estimated_claim_label' width='12.5%' data-total-columns="1" scope="col">
{capture name="label" assign="label"}{sugar_translate label='Estimated Claim' module='Tasks'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="1" colspan='3'>
{counter name="panelFieldCount"}

{if strlen($fields.lead_estimated_claim.value) <= 0}
{assign var="value" value=$fields.lead_estimated_claim.default_value }
{else}
{assign var="value" value=$fields.lead_estimated_claim.value }
{/if}  
<input type='text' name='{$fields.lead_estimated_claim.name}' 
id='{$fields.lead_estimated_claim.name}' size='30' 
value='{$value}' title=''       disabled="disabled">
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='lead_tax_id_label' width='12.5%' data-total-columns="1" scope="col">
{capture name="label" assign="label"}{sugar_translate label='Tax ID' module='Tasks'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="1" colspan='3'>
{counter name="panelFieldCount"}

{if strlen($fields.lead_tax_id.value) <= 0}
{assign var="value" value=$fields.lead_tax_id.default_value }
{else}
{assign var="value" value=$fields.lead_tax_id.value }
{/if}  
<input type='text' name='{$fields.lead_tax_id.name}' 
id='{$fields.lead_tax_id.name}' size='30' 
value='{$value}' title=''       disabled="disabled">
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='lead_phone_label' width='12.5%' data-total-columns="1" scope="col">
{capture name="label" assign="label"}{sugar_translate label='Phone' module='Tasks'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="1" colspan='3'>
{counter name="panelFieldCount"}

{if strlen($fields.lead_phone.value) <= 0}
{assign var="value" value=$fields.lead_phone.default_value }
{else}
{assign var="value" value=$fields.lead_phone.value }
{/if}  
<input type='text' name='{$fields.lead_phone.name}' 
id='{$fields.lead_phone.name}' size='30' 
value='{$value}' title=''       disabled="disabled">
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='lead_email_label' width='12.5%' data-total-columns="1" scope="col">
{capture name="label" assign="label"}{sugar_translate label='Email' module='Tasks'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="1" colspan='3'>
{counter name="panelFieldCount"}

{if strlen($fields.lead_email.value) <= 0}
{assign var="value" value=$fields.lead_email.default_value }
{else}
{assign var="value" value=$fields.lead_email.value }
{/if}  
<input type='text' name='{$fields.lead_email.name}' 
id='{$fields.lead_email.name}' size='30' 
value='{$value}' title=''       disabled="disabled">
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='lead_account_executive_label' width='12.5%' data-total-columns="1" scope="col">
{capture name="label" assign="label"}{sugar_translate label='Account Executive' module='Tasks'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="1" colspan='3'>
{counter name="panelFieldCount"}

{if strlen($fields.lead_account_executive.value) <= 0}
{assign var="value" value=$fields.lead_account_executive.default_value }
{else}
{assign var="value" value=$fields.lead_account_executive.value }
{/if}  
<input type='text' name='{$fields.lead_account_executive.name}' 
id='{$fields.lead_account_executive.name}' size='30' 
value='{$value}' title=''       disabled="disabled">
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='assigned_user_name_label' width='12.5%' data-total-columns="1" scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Tasks'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="1" colspan='3'>
{counter name="panelFieldCount"}

<input type="text" name="{$fields.assigned_user_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.assigned_user_name.name}" size="" value="{$fields.assigned_user_name.value}" title='' autocomplete="off"   disabled="disabled"	 >
<input type="hidden" name="{$fields.assigned_user_name.id_name}" 
id="{$fields.assigned_user_name.id_name}" 
value="{$fields.assigned_user_id.value}">
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.assigned_user_name.name}']) != 'undefined'",
		enableQS
);
</script>
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='description_label' width='12.5%' data-total-columns="2" scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPTION' module='Tasks'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="2" colspan='3'>
{counter name="panelFieldCount"}

{if empty($fields.description.value)}
{assign var="value" value=$fields.description.default_value }
{else}
{assign var="value" value=$fields.description.value }
{/if}
<textarea  id='{$fields.description.name}' name='{$fields.description.name}'
rows="8"
cols="60"
title='' tabindex="0" 
 >{$value}</textarea>
{literal}{/literal}
<td valign="top" id='_label' width='12.5%' data-total-columns="2" scope="col">
&nbsp;
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="2" >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("DEFAULT").style.display='none';</script>
{/if}
</div></div>

<script language="javascript">
    var _form_id = '{$form_id}';
    {literal}
    SUGAR.util.doWhen(function(){
        _form_id = (_form_id == '') ? 'EditView' : _form_id;
        return document.getElementById(_form_id) != null;
    }, SUGAR.themes.actionMenu);
    {/literal}
</script>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="dcQuickEdit">
<tr>
<td class="buttons">
{assign var='place' value="_FOOTER"}
<!-- to be used for id for buttons with custom code in def files-->
<input type="hidden" name="isSaveAndNew" value="false">
<input type="hidden" name="is_ajax_call" value="1">
<div class="action_buttons">{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}"  class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_Tasks'); disableOnUnloadEditView(); _form.action.value='Save';if(check_form('form_SubpanelQuickCreate_Tasks'))return SUGAR.subpanelUtils.inlineSave(_form.id, 'Tasks_subpanel_save_button');return false;" type="submit" name="Tasks_subpanel_save_button" id="Tasks_subpanel_save_button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if}  <input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate($(this).attr('id'));return false;" type="submit" name="Tasks_subpanel_cancel_button" id="Tasks_subpanel_cancel_button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}">  <input title="{$APP.LBL_FULL_FORM_BUTTON_TITLE}" class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_Tasks'); disableOnUnloadEditView(_form); _form.return_action.value='DetailView'; _form.action.value='EditView'; if(typeof(_form.to_pdf)!='undefined') _form.to_pdf.value='0';" type="submit" name="Tasks_subpanel_full_form_button" id="Tasks_subpanel_full_form_button" value="{$APP.LBL_FULL_FORM_BUTTON_LABEL}"> <input type="hidden" name="full_form" value="full_form"> {if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Tasks", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}<div class="clear"></div></div>
</td>
<td align='right' class="edit-view-pagination">
</td>
</tr>
</table>
</form>
{$set_focus_block}
<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script><script type="text/javascript">
YAHOO.util.Event.onContentReady("form_SubpanelQuickCreate_Tasks",
    function () {ldelim} initEditView(document.forms.form_SubpanelQuickCreate_Tasks) {rdelim});
//window.setTimeout(, 100);
window.onbeforeunload = function () {ldelim} return onUnloadEditView(); {rdelim};
// bug 55468 -- IE is too aggressive with onUnload event
if ($.browser.msie) {ldelim}
$(document).ready(function() {ldelim}
    $(".collapseLink,.expandLink").click(function (e) {ldelim} e.preventDefault(); {rdelim});
  {rdelim});
{rdelim}
</script>{literal}
<script type="text/javascript">
addForm('form_SubpanelQuickCreate_Tasks');addToValidate('form_SubpanelQuickCreate_Tasks', 'name', 'name', true,'{/literal}{sugar_translate label='LBL_SUBJECT' module='Tasks' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Tasks', 'date_entered_date', 'date', false,'Date Created' );
addToValidate('form_SubpanelQuickCreate_Tasks', 'date_modified_date', 'date', false,'Date Modified' );
addToValidate('form_SubpanelQuickCreate_Tasks', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='Tasks' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Tasks', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='Tasks' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Tasks', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Tasks' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Tasks', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Tasks' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Tasks', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='Tasks' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Tasks', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='Tasks' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Tasks', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='Tasks' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Tasks', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Tasks' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Tasks', 'status', 'enum', true,'{/literal}{sugar_translate label='LBL_STATUS' module='Tasks' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Tasks', 'date_due_flag', 'bool', false,'{/literal}{sugar_translate label='LBL_DATE_DUE_FLAG' module='Tasks' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Tasks', 'date_due_date', 'date', false,'Due Date' );
addToValidate('form_SubpanelQuickCreate_Tasks', 'time_due_date', 'date', false,'Due Time' );
addToValidate('form_SubpanelQuickCreate_Tasks', 'date_start_flag', 'bool', false,'{/literal}{sugar_translate label='LBL_DATE_START_FLAG' module='Tasks' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Tasks', 'date_start_date', 'date', false,'Start Date' );
addToValidateDateBefore('form_SubpanelQuickCreate_Tasks', 'date_start', 'datetimecombo', false,'{/literal}{sugar_translate label='LBL_START_DATE' module='Tasks' for_js=true}{literal}', 'date_due' );
addToValidate('form_SubpanelQuickCreate_Tasks', 'parent_type', 'parent_type', false,'{/literal}{sugar_translate label='LBL_PARENT_TYPE' module='Tasks' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Tasks', 'parent_name', 'parent', false,'{/literal}{sugar_translate label='LBL_LIST_RELATED_TO' module='Tasks' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Tasks', 'parent_id', 'id', false,'{/literal}{sugar_translate label='LBL_PARENT_ID' module='Tasks' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Tasks', 'lead_legal_name', 'id', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_STREET' module='Tasks' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Tasks', 'lead_address', 'id', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_STREET' module='Tasks' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Tasks', 'lead_account_executive', 'id', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_STREET' module='Tasks' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Tasks', 'lead_estimated_claim', 'id', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_STREET' module='Tasks' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Tasks', 'lead_tax_id', 'id', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_STREET' module='Tasks' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Tasks', 'lead_phone', 'id', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_STREET' module='Tasks' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Tasks', 'lead_email', 'id', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_STREET' module='Tasks' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Tasks', 'contact_id', 'id', false,'{/literal}{sugar_translate label='LBL_CONTACT_ID' module='Tasks' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Tasks', 'contact_phone', 'phone', false,'{/literal}{sugar_translate label='LBL_CONTACT_PHONE' module='Tasks' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Tasks', 'contact_email', 'varchar', false,'{/literal}{sugar_translate label='LBL_EMAIL_ADDRESS' module='Tasks' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Tasks', 'priority', 'enum', true,'{/literal}{sugar_translate label='LBL_PRIORITY' module='Tasks' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Tasks', 'companyname_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_COMPANYNAME ' module='Tasks' for_js=true}{literal}' );
addToValidateBinaryDependency('form_SubpanelQuickCreate_Tasks', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Tasks' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Tasks' for_js=true}{literal}', 'assigned_user_id' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['form_SubpanelQuickCreate_Tasks_assigned_user_name']={"form":"form_SubpanelQuickCreate_Tasks","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};</script>{/literal}
