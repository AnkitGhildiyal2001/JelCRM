<?php /* Smarty version 2.6.31, created on 2021-06-05 20:10:14
         compiled from cache/modules/Import/Accountsannual_revenue.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['annual_revenue']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['annual_revenue']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['annual_revenue']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['annual_revenue']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['annual_revenue']['name']; ?>
' size='30' 
    maxlength='100' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >