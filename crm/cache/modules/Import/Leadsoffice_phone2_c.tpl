

{if strlen($fields.office_phone2_c.value) <= 0}
{assign var="value" value=$fields.office_phone2_c.default_value }
{else}
{assign var="value" value=$fields.office_phone2_c.value }
{/if}  

<input type='text' name='{$fields.office_phone2_c.name}' id='{$fields.office_phone2_c.name}' size='30' maxlength='255' value='{$value}' title='' tabindex='1'	  class="phone" >
