<?php /* Smarty version 2.6.31, created on 2021-06-05 14:14:44
         compiled from cache/themes/Sugar5/modules/Accounts/ConvertLead.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_translate', 'cache/themes/Sugar5/modules/Accounts/ConvertLead.tpl', 51, false),array('function', 'counter', 'cache/themes/Sugar5/modules/Accounts/ConvertLead.tpl', 118, false),array('modifier', 'default', 'cache/themes/Sugar5/modules/Accounts/ConvertLead.tpl', 103, false),array('modifier', 'strip_semicolon', 'cache/themes/Sugar5/modules/Accounts/ConvertLead.tpl', 115, false),)), $this); ?>

<span class="color"><?php echo $this->_tpl_vars['ERROR']; ?>
</span>
<h4>
<style>
input[disabled] {
background-color:lightgray;
}
</style>
<table><tr><td>
<input type="hidden" name="convert_create_Accounts" id="convert_create_Accounts" 
<?php if (( $this->_tpl_vars['def']['required'] && empty ( $this->_tpl_vars['def']['select'] ) ) || ( ! empty ( $this->_tpl_vars['def']['default_action'] ) && $this->_tpl_vars['def']['default_action'] == 'create' )): ?> value="true" <?php endif; ?>/>
<input type="hidden" name="opportunity_id" value="<?php echo $_REQUEST['opportunity_id']; ?>
">   
<input type="hidden" name="case_id" value="<?php echo $_REQUEST['case_id']; ?>
">   
<input type="hidden" name="bug_id" value="<?php echo $_REQUEST['bug_id']; ?>
">   
<input type="hidden" name="email_id" value="<?php echo $_REQUEST['email_id']; ?>
">   
<input type="hidden" name="inbound_email_id" value="<?php echo $_REQUEST['inbound_email_id']; ?>
">   
<?php if ($this->_tpl_vars['def']['required']): ?>
<script type="text/javascript">
mod_array.push('Accounts');//Bug#50590 add all required modules to mod_array
</script>
<?php endif; ?>
<?php if (! $this->_tpl_vars['def']['required'] || ! empty ( $this->_tpl_vars['def']['select'] )): ?>
<input class="checkbox" type="checkbox" name="newAccounts" id="newAccounts" onclick="toggleDisplay('createAccounts');if (typeof(addRemoveDropdownElement) == 'function') addRemoveDropdownElement('Accounts');<?php if (! empty ( $this->_tpl_vars['def']['select'] )): ?>toggleAccountsSelect();<?php endif; ?>">
<script type="text/javascript">
<?php if (! empty ( $this->_tpl_vars['def']['select'] )): ?>
 toggleAccountsSelect = function(){ 
    var inputs = document.getElementById('selectAccounts').getElementsByTagName('input');
	for(var i in inputs) {inputs[i].disabled = !inputs[i].disabled;}
	var buttons = document.getElementById('selectAccounts').getElementsByTagName('button');
    for(var i in buttons) {buttons[i].disabled = !buttons[i].disabled;}
 }
<?php endif; ?>
 <?php if (! empty ( $this->_tpl_vars['def']['default_action'] ) && $this->_tpl_vars['def']['default_action'] == 'create'): ?>
     <?php if ($this->_tpl_vars['lead_conv_activity_opt'] == 'move' || $this->_tpl_vars['lead_conv_activity_opt'] == 'copy' || $this->_tpl_vars['lead_conv_activity_opt'] == ''): ?>
        YAHOO.util.Event.onContentReady('lead_conv_ac_op_sel', function(){
     <?php else: ?>
        YAHOO.util.Event.onContentReady('createAccounts', function(){
     <?php endif; ?>
		toggleDisplay('createAccounts');
		document.getElementById('newAccounts').checked = true;
                if (typeof(addRemoveDropdownElement) == 'function')
                    addRemoveDropdownElement('Accounts');
                <?php if (! empty ( $this->_tpl_vars['def']['select'] )): ?>
		toggleAccountsSelect();
        <?php endif; ?>
        	});
 <?php endif; ?>
<?php endif; ?>
</script>
</td><td>
<?php echo smarty_function_sugar_translate(array('label' => 'LNK_NEW_ACCOUNT','module' => 'Leads'), $this);?>

</td><td>
<?php if (! empty ( $this->_tpl_vars['def']['select'] )): ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LNK_SELECT_ACCOUNTS','module' => 'Leads'), $this);?>

<?php if ($this->_tpl_vars['def']['required']): ?>
<span class="required">*</span>
<?php endif; ?>
</td><td id ="selectAccounts">

<input type="text" name="<?php echo $this->_tpl_vars['contact_def']['account_name']['name']; ?>
" class="sqsEnabled" tabindex="" id="<?php echo $this->_tpl_vars['contact_def']['account_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['contact_def']['account_name']['value']; ?>
" title='' autocomplete="off"  	 >
<input type="hidden" name="<?php echo $this->_tpl_vars['contact_def']['account_name']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['contact_def']['account_name']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['contact_def']['account_id']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['contact_def']['account_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['contact_def']['account_name']['name']; ?>
" tabindex="" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE'), $this);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL'), $this);?>
"
onclick='open_popup(
"<?php echo $this->_tpl_vars['contact_def']['account_name']['module']; ?>
", 
600, 
400, 
"<?php echo $this->_tpl_vars['initialFilter']; ?>
", 
true, 
false, 
<?php echo '{"call_back_function":"set_return_lead_conv","form_name":"ConvertLead","field_to_name_array":{"id":"account_id","name":"account_name"}}'; ?>
, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['contact_def']['account_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['contact_def']['account_name']['name']; ?>
" tabindex="" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE'), $this);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['contact_def']['account_name']['name']; ?>
', '<?php echo $this->_tpl_vars['contact_def']['account_name']['id_name']; ?>
');"  value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL'), $this);?>
" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['contact_def']['account_name']['name']; ?>
']) != 'undefined'",
		enableQS
);
</script>
<script>
if (typeof(sqs_objects) == "undefined") sqs_objects = [];
sqs_objects['ConvertLead_<?php echo $this->_tpl_vars['selectFields']['Accounts']; ?>
'] = {
    form          : 'ConvertLead',
    method        : 'query',
    modules       : ['Accounts'],
    group         : 'or',
    field_list    : ['name', 'id'],
    populate_list : ['<?php echo $this->_tpl_vars['selectFields']['Accounts']; ?>
', '<?php echo $this->_tpl_vars['contact_def'][$this->_tpl_vars['selectFields']['Accounts']]['id_name']; ?>
'],
    conditions    : [{'name':'name','op':'like_custom','end':'%','value':''}],
    required_list : ['<?php echo $this->_tpl_vars['contact_def'][$this->_tpl_vars['selectFields']['Accounts']]['id_name']; ?>
'],
    order         : 'name',
    limit         : '10'
}
</script>
<?php endif; ?>
</td></tr></table>
</h4>
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="<?php echo ((is_array($_tmp=@$this->_tpl_vars['def']['templateMeta']['panelClass'])) ? $this->_run_mod_handler('default', true, $_tmp, 'edit view') : smarty_modifier_default($_tmp, 'edit view')); ?>
" id ="createAccounts" <?php if (! $this->_tpl_vars['def']['required'] || ! empty ( $this->_tpl_vars['def']['select'] )): ?>style="display:none"<?php endif; ?>>
<tr>
<td valign="top" id='companyname_label' width='12.5%' scope="row">
</td>
<td valign="top" width='37.5%' colspan='3'>
</td>
</tr>
<tr>
<td valign="top" id='website_label' width='12.5%' scope="row">
<?php ob_start(); ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_WEBSITE','module' => 'Accounts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' colspan='3'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['website']['value'] )): ?>
<input type='text' name='Accountswebsite' id='Accountswebsite' size='30' 
maxlength='255' value='<?php echo $this->_tpl_vars['fields']['website']['value']; ?>
' title='' tabindex='0'  >
<?php else: ?>
<input type='text' name='Accountswebsite' id='Accountswebsite' size='30' 
maxlength='255'	   	   <?php if ($this->_tpl_vars['displayView'] == 'advanced_search' || $this->_tpl_vars['displayView'] == 'basic_search'): ?>value=''<?php else: ?>value='http://'<?php endif; ?> 
title='' tabindex='0'  >
<?php endif; ?>
</td>
</tr>
<tr>
<td valign="top" id='description_label' width='12.5%' scope="row">
<?php ob_start(); ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Accounts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' colspan='3'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['description']['value'] )): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['description']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['description']['value']); ?>
<?php endif; ?>
<textarea  id='Accountsdescription' name='Accountsdescription'
rows="6"
cols="80"
title='' tabindex="0" 
 ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
<?php echo ''; ?>

</td>
</tr>
<tr>
<td valign="top" id='dbaname_label' width='12.5%' scope="row">
</td>
<td valign="top" width='37.5%' colspan='3'>
</td>
<td valign="top" id='_label' width='12.5%' scope="row">
</td>
<td valign="top" width='37.5%' >
</td>
</tr>
</table><?php echo '
<script type="text/javascript">
addForm(\'ConvertLead\');addToValidateBinaryDependency(\'ConvertLead\', \'assigned_user_name\', \'alpha\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Accounts','for_js' => true), $this);?>
<?php echo ': '; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Accounts','for_js' => true), $this);?>
<?php echo '\', \'assigned_user_id\' );
</script>'; ?>
