<?php /* Smarty version 2.6.31, created on 2021-06-30 17:39:02
         compiled from cache/modules/Import/Userssecuritygroup_noninher_fields.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_translate', 'cache/modules/Import/Userssecuritygroup_noninher_fields.tpl', 7, false),)), $this); ?>

<input type="text" name="<?php echo $this->_tpl_vars['fields']['securitygroup_noninher_fields']['name']; ?>
" class="sqsEnabled" tabindex="1" id="<?php echo $this->_tpl_vars['fields']['securitygroup_noninher_fields']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['securitygroup_noninher_fields']['value']; ?>
" title='' autocomplete="off"  	 >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['securitygroup_noninher_fields']['id_name']; ?>
" 
	id="<?php echo $this->_tpl_vars['fields']['securitygroup_noninher_fields']['id_name']; ?>
" 
	>
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['securitygroup_noninher_fields']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['securitygroup_noninher_fields']['name']; ?>
" tabindex="1" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_BUTTON_TITLE'), $this);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_BUTTON_LABEL'), $this);?>
"
onclick='open_popup(
    "<?php echo $this->_tpl_vars['fields']['securitygroup_noninher_fields']['module']; ?>
", 
	600, 
	400, 
	"", 
	true, 
	false, 
	<?php echo '{"call_back_function":"set_return","form_name":"importstep3","field_to_name_array":{"id":"securitygroup_noninher_fields"}}'; ?>
, 
	"single", 
	true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['securitygroup_noninher_fields']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['securitygroup_noninher_fields']['name']; ?>
" tabindex="1" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_RELATE_TITLE'), $this);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['securitygroup_noninher_fields']['name']; ?>
', '<?php echo $this->_tpl_vars['fields']['securitygroup_noninher_fields']['id_name']; ?>
');"  value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_RELATE_LABEL'), $this);?>
" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['securitygroup_noninher_fields']['name']; ?>
']) != 'undefined'",
		enableQS
);
</script>