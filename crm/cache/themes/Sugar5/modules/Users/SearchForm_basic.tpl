
<input type='hidden' id="orderByInput" name='orderBy' value=''/>
<input type='hidden' id="sortOrder" name='sortOrder' value=''/>
{if !isset($templateMeta.maxColumnsBasic)}
	{assign var="basicMaxColumns" value=$templateMeta.maxColumns}
{else}
    {assign var="basicMaxColumns" value=$templateMeta.maxColumnsBasic}
{/if}
<script>
{literal}
	$(function() {
	var $dialog = $('<div></div>')
		.html(SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TEXT'))
		.dialog({
			autoOpen: false,
			title: SUGAR.language.get('app_strings', 'LBL_HELP'),
			width: 700
		});
		
		$('#filterHelp').click(function() {
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
          right=$basicMaxColumns
          assign=modVal
    }
	{if ($index % $basicMaxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='1%' >
		
		<label for='first_name_basic' >{sugar_translate label='LBL_FIRST_NAME' module='Users'}</label>
    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
{if strlen($fields.first_name_basic.value) <= 0}
{assign var="value" value=$fields.first_name_basic.default_value }
{else}
{assign var="value" value=$fields.first_name_basic.value }
{/if}  
<input type='text' name='{$fields.first_name_basic.name}' 
    id='{$fields.first_name_basic.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''      accesskey='9'  >
   	   	</td>
    
      
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$basicMaxColumns
          assign=modVal
    }
	{if ($index % $basicMaxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='1%' >
		
		<label for='last_name_basic' >{sugar_translate label='LBL_LAST_NAME' module='Users'}</label>
    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
{if strlen($fields.last_name_basic.value) <= 0}
{assign var="value" value=$fields.last_name_basic.default_value }
{else}
{assign var="value" value=$fields.last_name_basic.value }
{/if}  
<input type='text' name='{$fields.last_name_basic.name}' 
    id='{$fields.last_name_basic.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''      >
   	   	</td>
    
      
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$basicMaxColumns
          assign=modVal
    }
	{if ($index % $basicMaxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='1%' >
		
		<label for='teamleader1_c_basic' >{sugar_translate label='LBL_TEAMLEADER1' module='Users'}</label>
    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
{if strlen($fields.teamleader1_c_basic.value) <= 0}
{assign var="value" value=$fields.teamleader1_c_basic.default_value }
{else}
{assign var="value" value=$fields.teamleader1_c_basic.value }
{/if}  
<input type='text' name='{$fields.teamleader1_c_basic.name}' 
    id='{$fields.teamleader1_c_basic.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''      >
   	   	</td>
    
      
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$basicMaxColumns
          assign=modVal
    }
	{if ($index % $basicMaxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='1%' >
		
		<label for='teamleaderemail_c_basic' >{sugar_translate label='LBL_TEAMLEADEREMAIL' module='Users'}</label>
    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
{if strlen($fields.teamleaderemail_c_basic.value) <= 0}
{assign var="value" value=$fields.teamleaderemail_c_basic.default_value }
{else}
{assign var="value" value=$fields.teamleaderemail_c_basic.value }
{/if}  
<input type='text' name='{$fields.teamleaderemail_c_basic.name}' 
    id='{$fields.teamleaderemail_c_basic.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''      >
   	   	</td>
    {if $formData|@count >= $basicMaxColumns+1}
    </tr>
    <tr>
	<td colspan="{$searchTableColumnCount}">
    {else}
	<td class="sumbitButtons" style="max-width: 30px;">
    {/if}
        <input tabindex="2" title="{$APP.LBL_SEARCH_BUTTON_TITLE}" onclick="SUGAR.savedViews.setChooser();" class="button" type="submit" name="button" value="{$APP.LBL_SEARCH_BUTTON_LABEL}" id="search_form_submit"/>&nbsp;
	    <input tabindex='2' title='{$APP.LBL_CLEAR_BUTTON_TITLE}' onclick='SUGAR.searchForm.clear_form(this.form); return false;' class='button' type='button' name='clear' id='search_form_clear' value='{$APP.LBL_CLEAR_BUTTON_LABEL}'/>
        {if $HAS_ADVANCED_SEARCH && !$searchFormInPopup}
	    &nbsp;&nbsp;<a id="advanced_search_link" href="javascript:void(0);" accesskey="{$APP.LBL_ADV_SEARCH_LNK_KEY}">{$APP.LNK_ADVANCED_FILTER}</a>
	    {/if}
    </td>
    <td>
        <span class="searchTabHandler advanced"><a href="javascript:void(0)"
                                                             onclick="listViewSearchIcon.toggleSearchDialog('advanced'); return false;"
                                                             aria-controls="searchList" role="tab"
                                                             data-toggle="tab">{$APP.LBL_ADVANCED_SEARCH}</a></span>
    </td>
	<td class="helpIcon" width="*"><img alt="Help" border='0' id="filterHelp" src='{sugar_getimagepath file="help-dashlet.gif"}'></td>
	</tr>
</table>
<script>
	{literal}
	$(document).ready(function () {
		$( '#advanced_search_link' ).one( "click", function() {
			//alert( "This will be displayed only once." );
			SUGAR.searchForm.searchFormSelect('{/literal}{$module}{literal}|advanced_search','{/literal}{$module}{literal}|basic_search');
		});
	});
	{/literal}
</script>{literal}<script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['search_form_reports_to_name_basic']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["reports_to_name_basic","reports_to_id_basic"],"required_list":["reports_to_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};</script>{/literal}