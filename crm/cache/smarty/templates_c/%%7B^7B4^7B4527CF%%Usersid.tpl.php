<?php /* Smarty version 2.6.31, created on 2021-06-30 17:39:02
         compiled from cache/modules/Import/Usersid.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['id']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['id']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['id']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['id']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['id']['name']; ?>
' size='30' 
     
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >