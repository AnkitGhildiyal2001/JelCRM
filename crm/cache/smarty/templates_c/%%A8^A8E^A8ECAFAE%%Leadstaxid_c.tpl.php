<?php /* Smarty version 2.6.31, created on 2021-06-09 17:17:21
         compiled from cache/modules/Import/Leadstaxid_c.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['taxid_c']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['taxid_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['taxid_c']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['taxid_c']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['taxid_c']['name']; ?>
' size='30' maxlength='11' value='<?php echo $this->_tpl_vars['value']; ?>
' title='9-Digit TAX ID' tabindex='1'    >