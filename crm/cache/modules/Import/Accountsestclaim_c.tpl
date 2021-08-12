
{if strlen($fields.estclaim_c.value) <= 0}
{assign var="value" value=$fields.estclaim_c.default_value }
{else}
{assign var="value" value=$fields.estclaim_c.value }
{/if}  
<input type='text' name='{$fields.estclaim_c.name}' 
    id='{$fields.estclaim_c.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''  tabindex='1'      >