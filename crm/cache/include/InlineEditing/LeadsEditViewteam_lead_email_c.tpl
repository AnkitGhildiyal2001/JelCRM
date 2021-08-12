
{if strlen($fields.team_lead_email_c.value) <= 0}
{assign var="value" value=$fields.team_lead_email_c.default_value }
{else}
{assign var="value" value=$fields.team_lead_email_c.value }
{/if}  
<input type='text' name='{$fields.team_lead_email_c.name}' 
    id='{$fields.team_lead_email_c.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''  tabindex='1'      >