
{if strlen($fields.accountnumber_c.value) <= 0}
{assign var="value" value=$fields.accountnumber_c.default_value }
{else}
{assign var="value" value=$fields.accountnumber_c.value }
{/if}  
<input type='text' name='{$fields.accountnumber_c.name}' 
    id='{$fields.accountnumber_c.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''  tabindex='1'      >