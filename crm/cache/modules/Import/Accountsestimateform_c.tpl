
{if strlen($fields.estimateform_c.value) <= 0}
{assign var="value" value=$fields.estimateform_c.default_value }
{else}
{assign var="value" value=$fields.estimateform_c.value }
{/if}  
<input type='text' name='{$fields.estimateform_c.name}' 
    id='{$fields.estimateform_c.name}' size='30' 
    maxlength='6' 
    value='{$value}' title=''  tabindex='1'      >