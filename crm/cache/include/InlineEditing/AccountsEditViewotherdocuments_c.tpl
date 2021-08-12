
{if strlen($fields.otherdocuments_c.value) <= 0}
{assign var="value" value=$fields.otherdocuments_c.default_value }
{else}
{assign var="value" value=$fields.otherdocuments_c.value }
{/if}  
<input type='text' name='{$fields.otherdocuments_c.name}' 
    id='{$fields.otherdocuments_c.name}' size='30' 
    maxlength='8' 
    value='{$value}' title=''  tabindex='1'      >