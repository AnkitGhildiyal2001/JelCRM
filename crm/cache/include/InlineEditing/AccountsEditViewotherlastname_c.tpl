
{if strlen($fields.otherlastname_c.value) <= 0}
{assign var="value" value=$fields.otherlastname_c.default_value }
{else}
{assign var="value" value=$fields.otherlastname_c.value }
{/if}  
<input type='text' name='{$fields.otherlastname_c.name}' 
    id='{$fields.otherlastname_c.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''  tabindex='1'      >