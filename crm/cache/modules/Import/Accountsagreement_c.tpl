
{if strlen($fields.agreement_c.value) <= 0}
{assign var="value" value=$fields.agreement_c.default_value }
{else}
{assign var="value" value=$fields.agreement_c.value }
{/if}  
<input type='text' name='{$fields.agreement_c.name}' 
    id='{$fields.agreement_c.name}' size='30' 
    maxlength='6' 
    value='{$value}' title=''  tabindex='1'      >