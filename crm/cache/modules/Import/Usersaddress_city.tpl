
{if strlen($fields.address_city.value) <= 0}
{assign var="value" value=$fields.address_city.default_value }
{else}
{assign var="value" value=$fields.address_city.value }
{/if}  
<input type='text' name='{$fields.address_city.name}' 
    id='{$fields.address_city.name}' size='30' 
    maxlength='100' 
    value='{$value}' title=''  tabindex='1'      >