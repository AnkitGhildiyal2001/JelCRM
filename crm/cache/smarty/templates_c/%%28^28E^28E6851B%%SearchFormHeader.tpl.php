<?php /* Smarty version 2.6.31, created on 2021-06-15 11:51:49
         compiled from cache/themes/Sugar5/modules/ACLRoles/SearchFormHeader.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getjspath', 'cache/themes/Sugar5/modules/ACLRoles/SearchFormHeader.tpl', 4, false),)), $this); ?>

<div class="clear"></div>
<div class='listViewBody'>
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'include/javascript/popup_parent_helper.js'), $this);?>
"></script>
<?php echo $this->_tpl_vars['TABS']; ?>

<?php echo '
<script>
function submitOnEnter(e)
{
    var characterCode = (e && e.which) ? e.which : event.keyCode;
    if (characterCode == 13 && event.target.type !== "textarea") {
        document.getElementById(\'search_form\').submit();
        return false;
    } else {
        return true;
    }
}
</script>
'; ?>


<?php if ($this->_tpl_vars['searchFormInPopup']): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'include/SearchForm/tpls/headerPopup.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<form name='search_form' id='search_form' class='search_form<?php if (! $this->_tpl_vars['searchFormInPopup']): ?> non-popup<?php endif; ?>' method='post' action='index.php?module=<?php echo $this->_tpl_vars['module']; ?>
&action=<?php echo $this->_tpl_vars['action']; ?>
' onkeydown='submitOnEnter(event);'>
<input type='hidden' name='searchFormTab' value='<?php echo $this->_tpl_vars['displayView']; ?>
'/>
<input type='hidden' name='module' value='<?php echo $this->_tpl_vars['module']; ?>
'/>
<input type='hidden' name='action' value='<?php echo $this->_tpl_vars['action']; ?>
'/> 
<input type='hidden' name='query' value='true'/>
<?php $_from = $this->_tpl_vars['TAB_ARRAY']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['tabIteration'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['tabIteration']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tabkey'] => $this->_tpl_vars['tabData']):
        $this->_foreach['tabIteration']['iteration']++;
?>
<div id='<?php echo $this->_tpl_vars['module']; ?>
<?php echo $this->_tpl_vars['tabData']['name']; ?>
_searchSearchForm' style='<?php echo $this->_tpl_vars['tabData']['displayDiv']; ?>
' class="edit view search <?php echo $this->_tpl_vars['tabData']['name']; ?>
"><?php if ($this->_tpl_vars['tabData']['displayDiv']): ?><?php else: ?><?php echo $this->_tpl_vars['return_txt']; ?>
<?php endif; ?></div>
<?php endforeach; endif; unset($_from); ?>
<div id='<?php echo $this->_tpl_vars['module']; ?>
saved_viewsSearchForm' style='display: none;'><?php echo $this->_tpl_vars['saved_views_txt']; ?>
</div>