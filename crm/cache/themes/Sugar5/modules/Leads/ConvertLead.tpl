
<span class="color">{$ERROR}</span>
<h4>
<style>
input[disabled] {ldelim}
background-color:lightgray;
{rdelim}
</style>
<table><tr><td>
<input type="hidden" name="convert_create_Leads" id="convert_create_Leads" 
{if ($def.required && empty($def.select)) || (!empty($def.default_action) && $def.default_action == "create")} value="true" {/if}/>
<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">   
<input type="hidden" name="case_id" value="{$smarty.request.case_id}">   
<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">   
<input type="hidden" name="email_id" value="{$smarty.request.email_id}">   
<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">   
{if $def.required }
<script type="text/javascript">
mod_array.push('Leads');//Bug#50590 add all required modules to mod_array
</script>
{/if}
{if !$def.required || !empty($def.select)}
<input class="checkbox" type="checkbox" name="newLeads" id="newLeads" onclick="toggleDisplay('createLeads');if (typeof(addRemoveDropdownElement) == 'function') addRemoveDropdownElement('Leads');{if !empty($def.select)}toggleLeadsSelect();{/if}">
<script type="text/javascript">
 {if !empty($def.default_action) && $def.default_action == "create"}
     {if $lead_conv_activity_opt == 'move' || $lead_conv_activity_opt == 'copy' || $lead_conv_activity_opt == ''}
        YAHOO.util.Event.onContentReady('lead_conv_ac_op_sel', function(){ldelim}
     {else}
        YAHOO.util.Event.onContentReady('createLeads', function(){ldelim}
     {/if}
		toggleDisplay('createLeads');
		document.getElementById('newLeads').checked = true;
                if (typeof(addRemoveDropdownElement) == 'function')
                    addRemoveDropdownElement('Leads');
        	{rdelim});
 {/if}
{/if}
</script>
</td><td>
{sugar_translate label='LNK_NEW_LEAD' module='Leads'}
</td><td>
</td></tr></table>
</h4>
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="{$def.templateMeta.panelClass|default:'edit view'}" id ="createLeads" {if !$def.required || !empty($def.select)}style="display:none"{/if}>
<tr>
<td valign="top" id='dbaname_label' width='12.5%' scope="row">
</td>
<td valign="top" width='37.5%' colspan='3'>
</td>
</tr>
<tr>
<td valign="top" id='cases_label' width='12.5%' scope="row">
</td>
<td valign="top" width='37.5%' colspan='3'>
</td>
</tr>
<tr>
<td valign="top" id='primary_address_postalcode_label' width='12.5%' scope="row">
{capture name="label" assign="label"}
{sugar_translate label='LBL_PRIMARY_ADDRESS_POSTALCODE' module='Leads'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' colspan='3'>
{counter name="panelFieldCount" print=false}

{if strlen($fields.primary_address_postalcode.value) <= 0}
{assign var="value" value=$fields.primary_address_postalcode.default_value }
{else}
{assign var="value" value=$fields.primary_address_postalcode.value }
{/if}  
<input type='text' name='Leadsprimary_address_postalcode' 
id='Leadsprimary_address_postalcode' size='30' 
maxlength='20' 
value='{$value}' title=''      >
</td>
<td valign="top" id='_label' width='12.5%' scope="row">
</td>
<td valign="top" width='37.5%' >
</td>
</tr>
</table>{literal}
<script type="text/javascript">
addForm('ConvertLead');addToValidateBinaryDependency('ConvertLead', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Leads' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Leads' for_js=true}{literal}', 'assigned_user_id' );
</script>{/literal}
