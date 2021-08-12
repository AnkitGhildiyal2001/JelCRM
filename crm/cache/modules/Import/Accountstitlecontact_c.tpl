
{if strlen($fields.titlecontact_c.value) <= 0}
{assign var="value" value=$fields.titlecontact_c.default_value }
{else}
{assign var="value" value=$fields.titlecontact_c.value }
{/if}  
<input type='text' name='{$fields.titlecontact_c.name}' 
    id='{$fields.titlecontact_c.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''  tabindex='1'      >