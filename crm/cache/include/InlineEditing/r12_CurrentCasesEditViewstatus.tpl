
{if strlen($fields.status.value) <= 0}
{assign var="value" value=$fields.status.default_value }
{else}
{assign var="value" value=$fields.status.value }
{/if}  
<input type='text' name='{$fields.status.name}' 
    id='{$fields.status.name}' size='30' 
     
    value='{$value}' title=''  tabindex='1'      >