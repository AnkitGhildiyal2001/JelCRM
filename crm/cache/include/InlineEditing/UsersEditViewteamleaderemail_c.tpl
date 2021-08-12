
{if strlen($fields.teamleaderemail_c.value) <= 0}
{assign var="value" value=$fields.teamleaderemail_c.default_value }
{else}
{assign var="value" value=$fields.teamleaderemail_c.value }
{/if}  
<input type='text' name='{$fields.teamleaderemail_c.name}' 
    id='{$fields.teamleaderemail_c.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''  tabindex='1'      >