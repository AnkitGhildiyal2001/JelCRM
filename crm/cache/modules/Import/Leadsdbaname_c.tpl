
{if strlen($fields.dbaname_c.value) <= 0}
{assign var="value" value=$fields.dbaname_c.default_value }
{else}
{assign var="value" value=$fields.dbaname_c.value }
{/if}  
<input type='text' name='{$fields.dbaname_c.name}' 
    id='{$fields.dbaname_c.name}' size='30' 
    maxlength='255' 
    value='{$value}' title='Doing Business As '  tabindex='1'      >