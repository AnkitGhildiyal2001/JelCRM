<?php /* Smarty version 2.6.31, created on 2021-06-09 17:16:54
         compiled from cache/modules/Import/Leadsfull_name.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['full_name']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['full_name']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['full_name']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['full_name']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['full_name']['name']; ?>
' size='30' 
    maxlength='510' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >