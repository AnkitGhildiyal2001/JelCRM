
{if strlen($fields.claimfilingstatus_c.value) <= 0}
{assign var="value" value=$fields.claimfilingstatus_c.default_value }
{else}
{assign var="value" value=$fields.claimfilingstatus_c.value }
{/if}  
<input type='text' name='{$fields.claimfilingstatus_c.name}' 
    id='{$fields.claimfilingstatus_c.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''  tabindex='1'      >