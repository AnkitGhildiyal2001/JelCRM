

{if strlen($fields.phone_mobile_new_c.value) <= 0}
{assign var="value" value=$fields.phone_mobile_new_c.default_value }
{else}
{assign var="value" value=$fields.phone_mobile_new_c.value }
{/if}  

<input type='text' name='{$fields.phone_mobile_new_c.name}' id='{$fields.phone_mobile_new_c.name}' size='30' maxlength='255' value='{$value}' title='' tabindex='1'	  class="phone" >
