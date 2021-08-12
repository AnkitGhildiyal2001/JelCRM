<?php /* Smarty version 2.6.31, created on 2021-06-05 20:10:14
         compiled from cache/modules/Import/Accountsemployees.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['employees']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['employees']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['employees']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['employees']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['employees']['name']; ?>
' size='30' 
    maxlength='10' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >