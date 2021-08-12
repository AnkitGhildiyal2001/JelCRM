<?php /* Smarty version 2.6.31, created on 2021-06-09 17:17:13
         compiled from cache/modules/Import/Leadsdbaname_c.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['dbaname_c']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['dbaname_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['dbaname_c']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['dbaname_c']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['dbaname_c']['name']; ?>
' size='30' 
    maxlength='255' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title='Doing Business As '  tabindex='1'      >