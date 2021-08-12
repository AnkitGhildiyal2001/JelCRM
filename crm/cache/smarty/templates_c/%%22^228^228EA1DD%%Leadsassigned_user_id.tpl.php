<?php /* Smarty version 2.6.31, created on 2021-06-30 18:52:42
         compiled from cache/modules/Import/Leadsassigned_user_id.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['assigned_user_id']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['assigned_user_id']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['assigned_user_id']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['assigned_user_id']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['assigned_user_id']['name']; ?>
' size='30' 
     
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >