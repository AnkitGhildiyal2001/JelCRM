<?php /* Smarty version 2.6.31, created on 2021-06-05 20:10:15
         compiled from cache/modules/Import/Accountstitlecontact_c.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['titlecontact_c']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['titlecontact_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['titlecontact_c']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['titlecontact_c']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['titlecontact_c']['name']; ?>
' size='30' 
    maxlength='255' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >