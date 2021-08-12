
{if strlen($fields.taxid_c.value) <= 0}
{assign var="value" value=$fields.taxid_c.default_value }
{else}
{assign var="value" value=$fields.taxid_c.value }
{/if}  
<input type='text' name='{$fields.taxid_c.name}' 
    id='{$fields.taxid_c.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''  tabindex='1'      >