<?php /* Smarty version 2.6.31, created on 2021-06-05 14:09:56
         compiled from cache/include/InlineEditing/LeadsEditViewprimary_address_street.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['primary_address_street']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['primary_address_street']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['primary_address_street']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['primary_address_street']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['primary_address_street']['name']; ?>
' size='30' 
    maxlength='150' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >