
{if strlen($fields.document_name.value) <= 0}
{assign var="value" value=$fields.document_name.default_value }
{else}
{assign var="value" value=$fields.document_name.value }
{/if}  
<input type='text' name='{$fields.document_name.name}' 
    id='{$fields.document_name.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''  tabindex='1'      >