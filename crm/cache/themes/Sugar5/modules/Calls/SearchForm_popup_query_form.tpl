
<script>
    {literal}
    $(function () {
        var $dialog = $('<div></div>')
                .html(SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TEXT'))
                .dialog({
                    autoOpen: false,
                    title: SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TITLE'),
                    width: 700
                });

        $('.help-search').click(function () {
            $dialog.dialog('open');
            // prevent the default action, e.g., following a link
        });

    });
    {/literal}
</script>
<table width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>
                          
          

        {counter assign=index}
        {math equation="left % right"
        left=$index
        right=$templateMeta.maxColumns
        assign=modVal
        }
        {if ($index % $templateMeta.maxColumns == 1 && $index != 1)}
        {if $isHelperShown==0}
            {assign var="isHelperShown" value="1"}
            <td class="helpIcon" width="*">
                <img alt="{$APP.LBL_SEARCH_HELP_TITLE}" id="helper_popup_image" border="0"
                     src='{sugar_getimagepath file="help-dashlet.gif"}' class="help-search">
            </td>
        {else}
            <td>&nbsp;</td>
        {/if}
    </tr>
    <tr>
        {/if}

        <td scope="row" nowrap="nowrap" width='10%'>
                        <label for='name_advanced'>{sugar_translate label='LBL_SUBJECT' module='Calls'}</label>
                    </td>
        <td nowrap="nowrap" width='30%'>
                        
{if strlen($fields.name_advanced.value) <= 0}
{assign var="value" value=$fields.name_advanced.default_value }
{else}
{assign var="value" value=$fields.name_advanced.value }
{/if}  
<input type='text' name='{$fields.name_advanced.name}' 
    id='{$fields.name_advanced.name}' size='30' 
    maxlength='50' 
    value='{$value}' title=''      accesskey='9'  >
                    </td>
                
          

        {counter assign=index}
        {math equation="left % right"
        left=$index
        right=$templateMeta.maxColumns
        assign=modVal
        }
        {if ($index % $templateMeta.maxColumns == 1 && $index != 1)}
        {if $isHelperShown==0}
            {assign var="isHelperShown" value="1"}
            <td class="helpIcon" width="*">
                <img alt="{$APP.LBL_SEARCH_HELP_TITLE}" id="helper_popup_image" border="0"
                     src='{sugar_getimagepath file="help-dashlet.gif"}' class="help-search">
            </td>
        {else}
            <td>&nbsp;</td>
        {/if}
    </tr>
    <tr>
        {/if}

        <td scope="row" nowrap="nowrap" width='10%'>
                        <label for='parent_name_advanced'>{sugar_translate label='LBL_LIST_RELATED_TO' module='Calls'}</label>
                    </td>
        <td nowrap="nowrap" width='30%'>
                        
<select name='parent_type_advanced'   id='parent_type_advanced' title=''
onchange='document.popup_query_form.{$fields.parent_name_advanced.name}.value="";document.popup_query_form.parent_id.value=""; 
        changeParentQSSearchView("{$fields.parent_name_advanced.name}"); checkParentType(document.popup_query_form.parent_type_advanced.value, document.popup_query_form.btn_{$fields.parent_name_advanced.name});'>
{html_options options=$fields.parent_name_advanced.options selected=$fields.parent_type_advanced.value}
</select>
<br>
{if empty($fields.parent_name_advanced.options[$fields.parent_type_advanced.value])}
	{assign var="keepParent" value = 0}
{else}
	{assign var="keepParent value = 1}
{/if}
<input type="text" name="{$fields.parent_name_advanced.name}" id="{$fields.parent_name_advanced.name}" class="sqsEnabled"   size="" value="{$fields.parent_name_advanced.value}" autocomplete="off"><input type="hidden" name="parent_id" id="parent_id"  {if $keepParent}value="{$fields.parent_id.value}"{/if}>
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.parent_name_advanced.name}"   title="{$APP.LBL_SELECT_BUTTON_TITLE}"
	   class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}"
	   onclick='if(document.popup_query_form.parent_type_advanced.value != "") open_popup(document.popup_query_form.parent_type_advanced.value, 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"popup_query_form","field_to_name_array":{"id":"parent_id","name":"parent_name_advanced"}}{/literal}, "single", true);'><span class="suitepicon suitepicon-action-select"></span></button>
<button type="button" name="btn_clr_{$fields.parent_name_advanced.name}"   title="{$APP.LBL_CLEAR_BUTTON_TITLE}"  class="button lastChild" onclick="this.form.{$fields.parent_name_advanced.name}.value = ''; this.form.{$fields.parent_name_advanced.id_name}.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}">
<span class="suitepicon suitepicon-action-clear"></span>
</button>
</span>
{literal}
<script type="text/javascript">
if (typeof(changeParentQSSearchView) == 'undefined'){
function changeParentQSSearchView(field) {
	field = YAHOO.util.Dom.get(field);
    var form = field.form;
    var sqsId = form.id + "_" + field.id;
    var typeField =  form.elements["parent_type_advanced"];
    var new_module = typeField.value;
    if(typeof(disabledModules[new_module]) != 'undefined') {
		sqs_objects[sqsId]["disable"] = true;
		field.readOnly = true;
	} else {
		sqs_objects[sqsId]["disable"] = false;
		field.readOnly = false;
    }
	//Update the SQS globals to reflect the new module choice
    sqs_objects[sqsId]["modules"] = new Array(new_module);
    if (typeof(QSFieldsArray[sqsId]) != 'undefined')
    {
        QSFieldsArray[sqsId].sqs.modules = new Array(new_module);
    }
	if(typeof QSProcessedFieldsArray != 'undefined')
    {
	   QSProcessedFieldsArray[sqsId] = false;
    }
    enableQS(false);
}}
YAHOO.util.Event.onContentReady(
{/literal}
"{$fields.parent_name_advanced.name}"
{literal}
, function() {
    changeParentQSSearchView(
{/literal}
"{$fields.parent_name_advanced.name}"
{literal}
    );
});
</script>
<script>var disabledModules={"Bugs":"Bugs","Cases":"Cases","Contacts":"Contacts","Opportunities":"Opportunities","Project":"Project","ProjectTask":"ProjectTask","Prospects":"Prospects"};</script>
{/literal}
                    </td>
                
          

        {counter assign=index}
        {math equation="left % right"
        left=$index
        right=$templateMeta.maxColumns
        assign=modVal
        }
        {if ($index % $templateMeta.maxColumns == 1 && $index != 1)}
        {if $isHelperShown==0}
            {assign var="isHelperShown" value="1"}
            <td class="helpIcon" width="*">
                <img alt="{$APP.LBL_SEARCH_HELP_TITLE}" id="helper_popup_image" border="0"
                     src='{sugar_getimagepath file="help-dashlet.gif"}' class="help-search">
            </td>
        {else}
            <td>&nbsp;</td>
        {/if}
    </tr>
    <tr>
        {/if}

        <td scope="row" nowrap="nowrap" width='10%'>
                        <label for='current_user_only_advanced'>{sugar_translate label='LBL_CURRENT_USER_FILTER' module='Calls'}</label>
                    </td>
        <td nowrap="nowrap" width='30%'>
                        
{if strval($fields.current_user_only_advanced.value) == "1" || strval($fields.current_user_only_advanced.value) == "yes" || strval($fields.current_user_only_advanced.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="hidden" name="{$fields.current_user_only_advanced.name}" value="0"> 
<input type="checkbox" id="{$fields.current_user_only_advanced.name}" 
name="{$fields.current_user_only_advanced.name}" 
value="1" title='' tabindex="" {$checked} >
                    </td>
                
          

        {counter assign=index}
        {math equation="left % right"
        left=$index
        right=$templateMeta.maxColumns
        assign=modVal
        }
        {if ($index % $templateMeta.maxColumns == 1 && $index != 1)}
        {if $isHelperShown==0}
            {assign var="isHelperShown" value="1"}
            <td class="helpIcon" width="*">
                <img alt="{$APP.LBL_SEARCH_HELP_TITLE}" id="helper_popup_image" border="0"
                     src='{sugar_getimagepath file="help-dashlet.gif"}' class="help-search">
            </td>
        {else}
            <td>&nbsp;</td>
        {/if}
    </tr>
    <tr>
        {/if}

        <td scope="row" nowrap="nowrap" width='10%'>
                        <label for='direction_advanced'>{sugar_translate label='LBL_DIRECTION' module='Calls'}</label>
                    </td>
        <td nowrap="nowrap" width='30%'>
                        
{html_options id='direction_advanced' name='direction_advanced[]' options=$fields.direction_advanced.options size="6" class="templateGroupChooser" multiple="1" selected=$fields.direction_advanced.value}
                    </td>
                
          

        {counter assign=index}
        {math equation="left % right"
        left=$index
        right=$templateMeta.maxColumns
        assign=modVal
        }
        {if ($index % $templateMeta.maxColumns == 1 && $index != 1)}
        {if $isHelperShown==0}
            {assign var="isHelperShown" value="1"}
            <td class="helpIcon" width="*">
                <img alt="{$APP.LBL_SEARCH_HELP_TITLE}" id="helper_popup_image" border="0"
                     src='{sugar_getimagepath file="help-dashlet.gif"}' class="help-search">
            </td>
        {else}
            <td>&nbsp;</td>
        {/if}
    </tr>
    <tr>
        {/if}

        <td scope="row" nowrap="nowrap" width='10%'>
                        <label for='status_advanced'>{sugar_translate label='LBL_STATUS' module='Calls'}</label>
                    </td>
        <td nowrap="nowrap" width='30%'>
                        
{html_options id='status_advanced' name='status_advanced[]' options=$fields.status_advanced.options size="6" class="templateGroupChooser" multiple="1" selected=$fields.status_advanced.value}
                    </td>
                
          

        {counter assign=index}
        {math equation="left % right"
        left=$index
        right=$templateMeta.maxColumns
        assign=modVal
        }
        {if ($index % $templateMeta.maxColumns == 1 && $index != 1)}
        {if $isHelperShown==0}
            {assign var="isHelperShown" value="1"}
            <td class="helpIcon" width="*">
                <img alt="{$APP.LBL_SEARCH_HELP_TITLE}" id="helper_popup_image" border="0"
                     src='{sugar_getimagepath file="help-dashlet.gif"}' class="help-search">
            </td>
        {else}
            <td>&nbsp;</td>
        {/if}
    </tr>
    <tr>
        {/if}

        <td scope="row" nowrap="nowrap" width='10%'>
                        <label for='description_advanced'>{sugar_translate label='LBL_DESCRIPTION' module='Calls'}</label>
                    </td>
        <td nowrap="nowrap" width='30%'>
                        
{if empty($fields.description_advanced.value)}
{assign var="value" value=$fields.description_advanced.default_value }
{else}
{assign var="value" value=$fields.description_advanced.value }
{/if}




<textarea  id='{$fields.description_advanced.name}' name='{$fields.description_advanced.name}'
rows="6"
cols="80"
title='' tabindex="0" 
 >{$value}</textarea>


{literal}{/literal}
                    </td>
                
          

        {counter assign=index}
        {math equation="left % right"
        left=$index
        right=$templateMeta.maxColumns
        assign=modVal
        }
        {if ($index % $templateMeta.maxColumns == 1 && $index != 1)}
        {if $isHelperShown==0}
            {assign var="isHelperShown" value="1"}
            <td class="helpIcon" width="*">
                <img alt="{$APP.LBL_SEARCH_HELP_TITLE}" id="helper_popup_image" border="0"
                     src='{sugar_getimagepath file="help-dashlet.gif"}' class="help-search">
            </td>
        {else}
            <td>&nbsp;</td>
        {/if}
    </tr>
    <tr>
        {/if}

        <td scope="row" nowrap="nowrap" width='10%'>
                        <label for='assigned_user_id_advanced'>{sugar_translate label='LBL_ASSIGNED_TO' module='Calls'}</label>
                    </td>
        <td nowrap="nowrap" width='30%'>
                        
{html_options id='assigned_user_id_advanced' name='assigned_user_id_advanced[]' options=$fields.assigned_user_id_advanced.options size="6" class="templateGroupChooser" multiple="1" selected=$fields.assigned_user_id_advanced.value}
                    </td>
            </tr>
    <tr>
        <td colspan='20'>
            &nbsp;
        </td>
    </tr>
    {if $DISPLAY_SAVED_SEARCH}
        <tr>
            <td colspan='2'>
                <a class='tabFormAdvLink' onhover href='javascript:toggleInlineSearch()'>
                    {capture assign="alt_show_hide"}{sugar_translate label='LBL_ALT_SHOW_OPTIONS'}{/capture}
                    {sugar_getimage alt=$alt_show_hide name="advanced_search" ext=".gif" other_attributes='border="0" id="up_down_img" '}
                    &nbsp;{$APP.LNK_SAVED_VIEWS}
                </a><br>
                <input type='hidden' id='showSSDIV' name='showSSDIV' value='{$SHOWSSDIV}'>
                <p>
            </td>
            <td scope='row' width='10%' nowrap="nowrap">
                {sugar_translate label='LBL_SAVE_SEARCH_AS' module='SavedSearch'}:
            </td>
            <td width='30%' nowrap>
                <input type='text' name='saved_search_name'>
                <input type='hidden' name='search_module' value=''>
                <input type='hidden' name='saved_search_action' value=''>
                <input title='{$APP.LBL_SAVE_BUTTON_LABEL}' value='{$APP.LBL_SAVE_BUTTON_LABEL}' class='button'
                       type='button' name='saved_search_submit'
                       onclick='SUGAR.savedViews.setChooser(); return SUGAR.savedViews.saved_search_action("save");'>
            </td>
            <td scope='row' width='10%' nowrap="nowrap">
                {sugar_translate label='LBL_MODIFY_CURRENT_FILTER' module='SavedSearch'}:
            </td>
            <td width='30%' nowrap>
                <input class='button'
                       onclick='SUGAR.savedViews.setChooser(); return SUGAR.savedViews.saved_search_action("update")'
                       value='{$APP.LBL_UPDATE}' title='{$APP.LBL_UPDATE}' name='ss_update' id='ss_update'
                       type='button'>
                <input class='button'
                       onclick='return SUGAR.savedViews.saved_search_action("delete", "{sugar_translate label='LBL_DELETE_CONFIRM' module='SavedSearch'}")'
                       value='{$APP.LBL_DELETE}' title='{$APP.LBL_DELETE}' name='ss_delete' id='ss_delete'
                       type='button'>
                <br><span id='curr_search_name'></span>
            </td>
        </tr>
        <tr>
            <td colspan='6'>
                <div style='{$DISPLAYSS}' id='inlineSavedSearch'>
                    {$SAVED_SEARCH}
                </div>
            </td>
        </tr>
    {/if}
    {if $displayType != 'popupView'}
        <tr>
            <td colspan='5'>
                <input tabindex='2' title='{$APP.LBL_SEARCH_BUTTON_TITLE}' onclick='SUGAR.savedViews.setChooser()'
                       class='button' type='submit' name='button' value='{$APP.LBL_SEARCH_BUTTON_LABEL}'
                       id='search_form_submit_advanced'/>&nbsp;
                <input tabindex='2' title='{$APP.LBL_CLEAR_BUTTON_TITLE}'
                       onclick='SUGAR.searchForm.clear_form(this.form); if(document.getElementById("saved_search_select")){ldelim}document.getElementById("saved_search_select").options[0].selected=true;{rdelim} return false;'
                       class='button' type='button' name='clear' id='search_form_clear_advanced'
                       value='{$APP.LBL_CLEAR_BUTTON_LABEL}'/>
                {if $DOCUMENTS_MODULE}
                    &nbsp;
                    <input title="{$APP.LBL_BROWSE_DOCUMENTS_BUTTON_TITLE}" type="button" class="button"
                           value="{$APP.LBL_BROWSE_DOCUMENTS_BUTTON_LABEL}"
                           onclick='open_popup("Documents", 600, 400, "&caller=Documents", true, false, "");'/>
                {/if}
                <a id="basic_search_link" href="javascript:void(0)"
                   accesskey="{$APP.LBL_ADV_SEARCH_LNK_KEY}">{$APP.LNK_BASIC_FILTER}</a>
        <span class='white-space'>
            &nbsp;&nbsp;&nbsp;{if $SAVED_SEARCHES_OPTIONS}|&nbsp;&nbsp;&nbsp;<b>{$APP.LBL_SAVED_FILTER_SHORTCUT}</b>&nbsp;
            {$SAVED_SEARCHES_OPTIONS} {/if}
            <span id='go_btn_span' style='display:none'><input tabindex='2' title='go_select' id='go_select'
                                                               onclick='SUGAR.searchForm.clear_form(this.form);'
                                                               class='button' type='button' name='go_select'
                                                               value=' {$APP.LBL_GO_BUTTON_LABEL} '/></span>
        </span>
            </td>
            <td class="help">
                {if $DISPLAY_SEARCH_HELP}
                    <img border='0' src='{sugar_getimagepath file="help-dashlet.gif"}' class="help-search">
                {/if}
            </td>
        </tr>
    {/if}
</table>

<script>
    {literal}
    if (typeof(loadSSL_Scripts) == 'function') {
        loadSSL_Scripts();
    }
    {/literal}
</script>
<script>
    {literal}
    $(document).ready(function () {
        $('#basic_search_link').one("click", function () {
            //alert( "This will be displayed only once." );
            SUGAR.searchForm.searchFormSelect('{/literal}{$module}{literal}|basic_search', '{/literal}{$module}{literal}|advanced_search');
        });
    });
    {/literal}
</script>{literal}<script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['popup_query_form_modified_by_name_advanced']={"form":"popup_query_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["modified_by_name_advanced","modified_user_id_advanced"],"required_list":["modified_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects['popup_query_form_created_by_name_advanced']={"form":"popup_query_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["created_by_name_advanced","created_by_advanced"],"required_list":["created_by"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects['popup_query_form_assigned_user_name_advanced']={"form":"popup_query_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_advanced","assigned_user_id_advanced"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects['popup_query_form_parent_name_advanced']={"form":"popup_query_form","method":"query","modules":["Accounts"],"group":"or","field_list":["name","id"],"populate_list":["parent_name_advanced","parent_id_advanced"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['popup_query_form_contact_name_advanced']={"form":"popup_query_form","method":"get_contact_array","modules":["Contacts"],"field_list":["salutation","first_name","last_name","id"],"populate_list":["contact_name_advanced","contact_id_advanced","contact_id_advanced","contact_id_advanced"],"required_list":["contact_id"],"group":"or","conditions":[{"name":"first_name","op":"like_custom","end":"%","value":""},{"name":"last_name","op":"like_custom","end":"%","value":""}],"order":"last_name","limit":"30","no_match_text":"No Match"};</script>{/literal}