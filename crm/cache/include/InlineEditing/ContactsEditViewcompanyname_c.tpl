
{if strlen($fields.companyname_c.value) <= 0}
{assign var="value" value=$fields.companyname_c.default_value }
{else}
{assign var="value" value=$fields.companyname_c.value }
{/if}  
<input type='text' name='{$fields.companyname_c.name}' 
    id='{$fields.companyname_c.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''  tabindex='1'      >