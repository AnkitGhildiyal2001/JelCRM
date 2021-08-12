<?php /* Smarty version 2.6.31, created on 2021-06-09 17:33:27
         compiled from cache/include/InlineEditing/LeadsEditViewphone_mobile_new_c.tpl */ ?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_mobile_new_c']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['phone_mobile_new_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['phone_mobile_new_c']['value']); ?>
<?php endif; ?>  

<input type='text' name='<?php echo $this->_tpl_vars['fields']['phone_mobile_new_c']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['phone_mobile_new_c']['name']; ?>
' size='30' maxlength='255' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='1'	  class="phone" >