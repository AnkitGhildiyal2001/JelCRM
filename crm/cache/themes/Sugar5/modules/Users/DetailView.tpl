
{sugar_include include=$includes}
<div id="Users_detailview_tabs"
>
<div >
<div id='detailpanel_1' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(1);">
<img border="0" id="detailpanel_1_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(1);">
<img border="0" id="detailpanel_1_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_USER_INFORMATION' module='Users'}
<script>
      document.getElementById('detailpanel_1').className += ' expanded';
    </script>
</h4>
<!-- PANEL CONTAINER HERE.. -->
<table id='LBL_USER_INFORMATION' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.user_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_USER_NAME' module='Users'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="user_name" field="user_name" width='37.5%'  >
{if !$fields.user_name.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.user_name.value) <= 0}
{assign var="value" value=$fields.user_name.default_value }
{else}
{assign var="value" value=$fields.user_name.value }
{/if} 
<span class="sugar_field" id="{$fields.user_name.name}">{$fields.user_name.value}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.first_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_FIRST_NAME' module='Users'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="name" field="first_name" width='37.5%'  >
{if !$fields.first_name.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.first_name.value) <= 0}
{assign var="value" value=$fields.first_name.default_value }
{else}
{assign var="value" value=$fields.first_name.value }
{/if} 
<span class="sugar_field" id="{$fields.first_name.name}">{$fields.first_name.value}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.status.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_STATUS' module='Users'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="enum" field="status" width='37.5%'  >
{if !$fields.status.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.status.options)}
<input type="hidden" class="sugar_field" id="{$fields.status.name}" value="{ $fields.status.options }">
{ $fields.status.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.status.name}" value="{ $fields.status.value }">
{ $fields.status.options[$fields.status.value]}
{/if}
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.last_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_LAST_NAME' module='Users'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="name" field="last_name" width='37.5%'  >
{if !$fields.last_name.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.last_name.value) <= 0}
{assign var="value" value=$fields.last_name.default_value }
{else}
{assign var="value" value=$fields.last_name.value }
{/if} 
<span class="sugar_field" id="{$fields.last_name.name}">{$fields.last_name.value}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.UserType.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_USER_TYPE' module='Users'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="enum" field="UserType" width='37.5%' colspan='3' >
{if !$fields.UserType.hidden}
{counter name="panelFieldCount"}
<span id="UserType" class="sugar_field">{$USER_TYPE_READONLY}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(1, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_USER_INFORMATION").style.display='none';</script>
{/if}
<div id='detailpanel_2' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(2);">
<img border="0" id="detailpanel_2_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(2);">
<img border="0" id="detailpanel_2_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_EMPLOYEE_INFORMATION' module='Users'}
<script>
      document.getElementById('detailpanel_2').className += ' expanded';
    </script>
</h4>
<!-- PANEL CONTAINER HERE.. -->
<table id='LBL_EMPLOYEE_INFORMATION' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.teamleader_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TEAMLEADER' module='Users'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="enum" field="teamleader_c" width='37.5%'  >
{if !$fields.teamleader_c.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.teamleader_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.teamleader_c.name}" value="{ $fields.teamleader_c.options }">
{ $fields.teamleader_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.teamleader_c.name}" value="{ $fields.teamleader_c.value }">
{ $fields.teamleader_c.options[$fields.teamleader_c.value]}
{/if}
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.phone_work.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_WORK_PHONE' module='Users'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="phone" field="phone_work" width='37.5%'  class="phone">
{if !$fields.phone_work.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.phone_work.value)}
{assign var="phone_value" value=$fields.phone_work.value }
{sugar_phone value=$phone_value usa_format="0"}
{/if}
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.phone_home.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_HOME_PHONE' module='Users'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="phone" field="phone_home" width='37.5%'  class="phone">
{if !$fields.phone_home.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.phone_home.value)}
{assign var="phone_value" value=$fields.phone_home.value }
{sugar_phone value=$phone_value usa_format="0"}
{/if}
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.phone_mobile.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_MOBILE_PHONE' module='Users'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="phone" field="phone_mobile" width='37.5%'  class="phone">
{if !$fields.phone_mobile.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.phone_mobile.value)}
{assign var="phone_value" value=$fields.phone_mobile.value }
{sugar_phone value=$phone_value usa_format="0"}
{/if}
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.address_street.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ADDRESS_STREET' module='Users'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="varchar" field="address_street" width='37.5%'  >
{if !$fields.address_street.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.address_street.value) <= 0}
{assign var="value" value=$fields.address_street.default_value }
{else}
{assign var="value" value=$fields.address_street.value }
{/if} 
<span class="sugar_field" id="{$fields.address_street.name}">{$fields.address_street.value}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.address_city.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ADDRESS_CITY' module='Users'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="varchar" field="address_city" width='37.5%'  >
{if !$fields.address_city.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.address_city.value) <= 0}
{assign var="value" value=$fields.address_city.default_value }
{else}
{assign var="value" value=$fields.address_city.value }
{/if} 
<span class="sugar_field" id="{$fields.address_city.name}">{$fields.address_city.value}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.address_state.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ADDRESS_STATE' module='Users'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="varchar" field="address_state" width='37.5%'  >
{if !$fields.address_state.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.address_state.value) <= 0}
{assign var="value" value=$fields.address_state.default_value }
{else}
{assign var="value" value=$fields.address_state.value }
{/if} 
<span class="sugar_field" id="{$fields.address_state.name}">{$fields.address_state.value}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.address_postalcode.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ADDRESS_POSTALCODE' module='Users'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="varchar" field="address_postalcode" width='37.5%'  >
{if !$fields.address_postalcode.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.address_postalcode.value) <= 0}
{assign var="value" value=$fields.address_postalcode.default_value }
{else}
{assign var="value" value=$fields.address_postalcode.value }
{/if} 
<span class="sugar_field" id="{$fields.address_postalcode.name}">{$fields.address_postalcode.value}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.description.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPTION' module='Users'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="text" field="description" width='37.5%'  >
{if !$fields.description.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.description.name|escape:'html'|url2html|nl2br}">{$fields.description.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.photo.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PHOTO' module='Users'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="image" field="photo" width='37.5%'  >
{if !$fields.photo.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.photo.name}">
{if strlen($fields.photo.value) <= 0}
<img src="" style="max-width: {if !$vardef.width}160{else}200{/if}px;" height="{if !$vardef.height}160{else}50{/if}">
{else}
<img src="index.php?entryPoint=download&id={$fields.id.value}_{$fields.photo.name}{$fields.width.value}&type={$module}" style="max-width: {if !$vardef.width}160{else}200{/if}px;" height="{if !$vardef.height}160{else}50{/if}">
{/if}
</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(2, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_EMPLOYEE_INFORMATION").style.display='none';</script>
{/if}
<div id='tabcontent0'>
<div id="detailpanel_1" class="detail view  detail508 expanded">
<div id="settings">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="detail view">
<tr>
<th colspan='4' align="left" width="100%" valign="top">
<h4>
<span>{$MOD.LBL_USER_SETTINGS}</span>
</h4>
</th>
</tr>
<tr>
<td scope="row">
<span>{$MOD.LBL_RECEIVE_NOTIFICATIONS|strip_semicolon}:</span>
</td>
<td>
<span><input class="checkbox" type="checkbox" disabled {$RECEIVE_NOTIFICATIONS}></span>
</td>
<td>
<span>{$MOD.LBL_RECEIVE_NOTIFICATIONS_TEXT}&nbsp;</span>
</td>
</tr>
<tr>
<td scope="row" valign="top">
<span>{$MOD.LBL_REMINDER|strip_semicolon}:
</td>
<!--
<td valign="top" nowrap><span>{include file="modules/Meetings/tpls/reminders.tpl"}</span></td>
-->
<td valign="top" nowrap>
<span>{include file="modules/Reminders/tpls/remindersDefaults.tpl"}</span>
</td>
<td>
<span>{$MOD.LBL_REMINDER_TEXT}&nbsp;</span>
</td>
</tr>
<tr>
<td valign="top" scope="row">
<span>{$MOD.LBL_MAILMERGE|strip_semicolon}:</span>
</td>
<td valign="top" nowrap>
<span><input tabindex='3' name='mailmerge_on' disabled class="checkbox"
type="checkbox" {$MAILMERGE_ON}></span>
</td>
<td>
<span>{$MOD.LBL_MAILMERGE_TEXT}&nbsp;</span>
</td>
</tr>
<tr>
<td valign="top" scope="row">
<span>{$MOD.LBL_SETTINGS_URL|strip_semicolon}:</span>
</td>
<td valign="top" nowrap>
<span>{$SETTINGS_URL}</span>
</td>
<td>
<span>{$MOD.LBL_SETTINGS_URL_DESC}&nbsp;</span>
</td>
</tr>
<tr>
<td scope="row" valign="top">
<span>{$MOD.LBL_EXPORT_DELIMITER|strip_semicolon}:</span>
</td>
<td>
<span>{$EXPORT_DELIMITER}</span>
</td>
<td>
<span>{$MOD.LBL_EXPORT_DELIMITER_DESC}</span>
</td>
</tr>
<tr>
<td scope="row" valign="top">
<span>{$MOD.LBL_EXPORT_CHARSET|strip_semicolon}:</span>
</td>
<td>
<span>{$EXPORT_CHARSET_DISPLAY}</span>
</td>
<td>
<span>{$MOD.LBL_EXPORT_CHARSET_DESC}</span>
</td>
</tr>
<tr>
<td scope="row" valign="top">
<span>{$MOD.LBL_USE_REAL_NAMES|strip_semicolon}:</span>
</td>
<td>
<span><input tabindex='3' name='use_real_names' disabled class="checkbox"
type="checkbox" {$USE_REAL_NAMES}></span>
</td>
<td>
<span>{$MOD.LBL_USE_REAL_NAMES_DESC}</span>
</td>
</tr>
{if $DISPLAY_EXTERNAL_AUTH}
<tr>
<td scope="row" valign="top">
<span>{$EXTERNAL_AUTH_CLASS|strip_semicolon}:</span>
</td>
<td valign="top" nowrap>
<span><input id="external_auth_only" name="external_auth_only" type="checkbox"
class="checkbox" {$EXTERNAL_AUTH_ONLY_CHECKED}></span>
</td>
<td>
<span>{$MOD.LBL_EXTERNAL_AUTH_ONLY} {$EXTERNAL_AUTH_CLASS}</span>
</td>
</tr>
{/if}
</table>
</div>
<div id='locale'>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="detail view">
<tr>
<th colspan='4' align="left" width="100%" valign="top">
<h4>
<span>{$MOD.LBL_USER_LOCALE}</span>
</h4>
</th>
</tr>
<tr>
<td width="15%" scope="row">
<span>{$MOD.LBL_DATE_FORMAT|strip_semicolon}:</span>
</td>
<td>
<span>{$DATEFORMAT}&nbsp;</span>
</td>
<td>
<span>{$MOD.LBL_DATE_FORMAT_TEXT}&nbsp;</span>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<span>{$MOD.LBL_TIME_FORMAT|strip_semicolon}:</span>
</td>
<td>
<span>{$TIMEFORMAT}&nbsp;</span>
</td>
<td>
<span>{$MOD.LBL_TIME_FORMAT_TEXT}&nbsp;</span>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<span>{$MOD.LBL_TIMEZONE|strip_semicolon}:</span>
</td>
<td nowrap>
<span>{$TIMEZONE}&nbsp;</span>
</td>
<td>
<span>{$MOD.LBL_ZONE_TEXT}&nbsp;</span>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<span>{$MOD.LBL_CURRENCY|strip_semicolon}:</span>
</td>
<td>
<span>{$CURRENCY_DISPLAY}&nbsp;</span>
</td>
<td>
<span>{$MOD.LBL_CURRENCY_TEXT}&nbsp;</span>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<span>{$MOD.LBL_CURRENCY_SIG_DIGITS|strip_semicolon}:</span>
</td>
<td>
<span>{$CURRENCY_SIG_DIGITS}&nbsp;</span>
</td>
<td>
<span>{$MOD.LBL_CURRENCY_SIG_DIGITS_DESC}&nbsp;</span>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<span>{$MOD.LBL_NUMBER_GROUPING_SEP|strip_semicolon}:</span>
</td>
<td>
<span>{$NUM_GRP_SEP}&nbsp;</span>
</td>
<td>
<span>{$MOD.LBL_NUMBER_GROUPING_SEP_TEXT}&nbsp;</span>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<span>{$MOD.LBL_DECIMAL_SEP|strip_semicolon}:</span>
</td>
<td>
<span>{$DEC_SEP}&nbsp;</span>
</td>
<td>
<span></span>{$MOD.LBL_DECIMAL_SEP_TEXT}&nbsp;</td>
</tr>
</tr>
<tr>
<td width="15%" scope="row">
<span>{$MOD.LBL_LOCALE_DEFAULT_NAME_FORMAT|strip_semicolon}:</span>
</td>
<td>
<span>{$NAME_FORMAT}&nbsp;</span>
</td>
<td>
<span></span>{$MOD.LBL_LOCALE_NAME_FORMAT_DESC}&nbsp;</td>
</tr>
</table>
</div>
<div id='calendar_options'>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="detail view">
<tr>
<th colspan='4' align="left" width="100%" valign="top">
<h4>
<span>{$MOD.LBL_CALENDAR_OPTIONS}</span>
</h4>
</th>
</tr>
<tr>
<td width="15%" scope="row">
<span>{$MOD.LBL_PUBLISH_KEY|strip_semicolon}:</span>
</td>
<td width="20%">
<span>{$CALENDAR_PUBLISH_KEY}&nbsp;</span>
</td>
<td width="65%">
<span>{$MOD.LBL_CHOOSE_A_KEY}&nbsp;</span>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<span>
<nobr>{$MOD.LBL_YOUR_PUBLISH_URL|strip_semicolon}:</nobr>
</span>
</td>
<td colspan=2>{if $CALENDAR_PUBLISH_KEY}{$CALENDAR_PUBLISH_URL}{else}{$MOD.LBL_NO_KEY}{/if}</td>
</tr>
<tr>
<td width="15%" scope="row">
<span>{$MOD.LBL_SEARCH_URL|strip_semicolon}:</span>
</td>
<td colspan=2>
<span>{if $CALENDAR_PUBLISH_KEY}{$CALENDAR_SEARCH_URL}{else}{$MOD.LBL_NO_KEY}{/if}</span>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<span>{$MOD.LBL_ICAL_PUB_URL|strip_semicolon}: {sugar_help text=$MOD.LBL_ICAL_PUB_URL_HELP}</span>
</td>
<td colspan=2>
<span>{if $CALENDAR_PUBLISH_KEY}{$CALENDAR_ICAL_URL}{else}{$MOD.LBL_NO_KEY}{/if}</span>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<span>{$MOD.LBL_FDOW|strip_semicolon}:</span>
</td>
<td>
<span>{$FDOWDISPLAY}&nbsp;</span>
</td>
<td>
<span></span>{$MOD.LBL_FDOW_TEXT}&nbsp;</td>
</tr>
</table>
</div>
<div id='google_options'>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="detail view">
<tr>
<th align="left" scope="row" colspan="4"><h4>{$MOD.LBL_GOOGLE_API_SETTINGS}</h4></th>
</tr>
<tr>
<td width="17%" scope="row">
<slot>{$MOD.LBL_GOOGLE_API_TOKEN}:</slot>&nbsp;{sugar_help text=$MOD.LBL_GOOGLE_API_TOKEN_HELP}
</td>
<td width="20%">
Current API Token is: <span style="color:{$GOOGLE_API_TOKEN_COLOR}">{$GOOGLE_API_TOKEN}</span>
</td>
<td width="63%">
<slot>&nbsp;</slot>
</td>
</tr>
<tr>
<td width="17%" scope="row">
<slot>{$MOD.LBL_GSYNC_CAL}:</slot>
</td>
<td>
<slot><input class="checkbox" type="checkbox" disabled {$GSYNC_CAL}></slot>
</td>
</tr>
</table>
</div>
<div id='edit_tabs'>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="detail view">
<tr>
<th colspan='4' align="left" width="100%" valign="top">
<h4>
<span>{$MOD.LBL_LAYOUT_OPTIONS}</span>
</h4>
</th>
</tr>
<tr>
<td width="15%" scope="row">
<span>{$MOD.LBL_USE_GROUP_TABS|strip_semicolon}:</span>
</td>
<td>
<span><input class="checkbox" type="checkbox" disabled {$USE_GROUP_TABS}></span>
</td>
<td>
<span>{$MOD.LBL_NAVIGATION_PARADIGM_DESCRIPTION}&nbsp;</span>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<span>{$MOD.LBL_SUBPANEL_TABS|strip_semicolon}:</span>
</td>
<td>
<span><input class="checkbox" type="checkbox" disabled {$SUBPANEL_TABS}></span>
</td>
<td>
<span>{$MOD.LBL_SUBPANEL_TABS_DESCRIPTION}&nbsp;</span>
</td>
</tr>
</table>
</div>
</div>
</div>
<div id='tabcontent1'>
<div id="detailpanel_2" class="detail view  detail508 expanded">
<div id="advanced">
<TABLE width='100%' class='detail view' border='0' cellpadding=0 cellspacing = 1  ><TR><td style="background: transparent;"></td><td style="text-align: center;" scope="row"><b>Access</b></td><td style="text-align: center;" scope="row"><b>Delete</b></td><td style="text-align: center;" scope="row"><b>Edit</b></td><td style="text-align: center;" scope="row"><b>Export</b></td><td style="text-align: center;" scope="row"><b>Import</b></td><td style="text-align: center;" scope="row"><b>List</b></td><td style="text-align: center;" scope="row"><b>Mass Update</b></td><td style="text-align: center;" scope="row"><b>View</b></td></TR><TR><td nowrap width='1%' scope="row"><b>Accounts</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Alerts</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Bugs</b></td><td  width='12.5%' align='center'><div align='center' class="aclDisabled"><b>Disabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Calls</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Calls Reschedule</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Campaigns</b></td><td  width='12.5%' align='center'><div align='center' class="aclDisabled"><b>Disabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Case Events</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Case Updates</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Cases</b></td><td  width='12.5%' align='center'><div align='center' class="aclDisabled"><b>Disabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Contacts</b></td><td  width='12.5%' align='center'><div align='center' class="aclDisabled"><b>Disabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Contracts</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Current Cases</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Documents</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>EAPM</b></td><td  width='12.5%' align='center'><div align='center' class="aclDisabled"><b>Disabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Email - Templates</b></td><td  width='12.5%' align='center'><div align='center' class="aclDisabled"><b>Disabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Email Marketing</b></td><td  width='12.5%' align='center'><div align='center' class="aclDisabled"><b>Disabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Emails</b></td><td  width='12.5%' align='center'><div align='center' class="aclDisabled"><b>Disabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Events</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b></b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Index</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Index Event</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Invoices</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>KB - Categories</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Knowledge Base</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Leads</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Locations</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Maps</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Maps - Address Cache</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Maps - Areas</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Maps - Markers</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Meetings</b></td><td  width='12.5%' align='center'><div align='center' class="aclDisabled"><b>Disabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Notes</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Opportunities</b></td><td  width='12.5%' align='center'><div align='center' class="aclDisabled"><b>Disabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Outbound Email Accounts</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>PDF - Templates</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Process Audit</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Products</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Products - Categories</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Project Task Templates</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Project Tasks</b></td><td  width='12.5%' align='center'><div align='center' class="aclDisabled"><b>Disabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Projects</b></td><td  width='12.5%' align='center'><div align='center' class="aclDisabled"><b>Disabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Projects - Templates</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Quotes</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Reports</b></td><td  width='12.5%' align='center'><div align='center' class="aclDisabled"><b>Disabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Scheduled Reports</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Security Suite Management</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Spots</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Survey Question Options</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Survey Question Responses</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Survey Questions</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Survey Responses</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Surveys</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Targets</b></td><td  width='12.5%' align='center'><div align='center' class="aclDisabled"><b>Disabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Targets - Lists</b></td><td  width='12.5%' align='center'><div align='center' class="aclDisabled"><b>Disabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Tasks</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Template Section Line</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>WorkFlow</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR></TABLE>
</div>
</div>
</div>
</div>
<script type="text/javascript" src="include/InlineEditing/inlineEditing.js"></script>
<script type="text/javascript" src="modules/Favorites/favorites.js"></script>
<script type='text/javascript' src='{sugar_getjspath file='modules/Users/DetailView.js'}'></script>