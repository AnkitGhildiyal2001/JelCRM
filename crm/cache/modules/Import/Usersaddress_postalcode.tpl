
{if strlen($fields.address_postalcode.value) <= 0}
{assign var="value" value=$fields.address_postalcode.default_value }
{else}
{assign var="value" value=$fields.address_postalcode.value }
{/if}  
<input type='text' name='{$fields.address_postalcode.name}' 
    id='{$fields.address_postalcode.name}' size='30' 
    maxlength='20' 
    value='{$value}' title=''  tabindex='1'      >