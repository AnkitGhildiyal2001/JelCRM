
{if strlen($fields.ownership.value) <= 0}
{assign var="value" value=$fields.ownership.default_value }
{else}
{assign var="value" value=$fields.ownership.value }
{/if}  
<input type='text' name='{$fields.ownership.name}' 
    id='{$fields.ownership.name}' size='30' 
    maxlength='100' 
    value='{$value}' title=''  tabindex='1'      >