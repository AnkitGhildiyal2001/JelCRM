
{if strlen($fields.shipping_address_country.value) <= 0}
{assign var="value" value=$fields.shipping_address_country.default_value }
{else}
{assign var="value" value=$fields.shipping_address_country.value }
{/if}  
<input type='text' name='{$fields.shipping_address_country.name}' 
    id='{$fields.shipping_address_country.name}' size='30' 
     
    value='{$value}' title=''  tabindex='1'      >