
{if strlen($fields.jelpercent_c.value) <= 0}
{assign var="value" value=$fields.jelpercent_c.default_value }
{else}
{assign var="value" value=$fields.jelpercent_c.value }
{/if}  
<input type='text' name='{$fields.jelpercent_c.name}' 
    id='{$fields.jelpercent_c.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''  tabindex='1'      >