<?php /* Smarty version 2.6.31, created on 2021-06-15 11:51:49
         compiled from cache/themes/Sugar5/modules/ACLRoles/SearchForm_advanced.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_translate', 'cache/themes/Sugar5/modules/ACLRoles/SearchForm_advanced.tpl', 33, false),array('function', 'sugar_getimage', 'cache/themes/Sugar5/modules/ACLRoles/SearchForm_advanced.tpl', 34, false),array('function', 'sugar_getimagepath', 'cache/themes/Sugar5/modules/ACLRoles/SearchForm_advanced.tpl', 103, false),)), $this); ?>

<script>
    <?php echo '
    $(function () {
        var $dialog = $(\'<div></div>\')
                .html(SUGAR.language.get(\'app_strings\', \'LBL_SEARCH_HELP_TEXT\'))
                .dialog({
                    autoOpen: false,
                    title: SUGAR.language.get(\'app_strings\', \'LBL_SEARCH_HELP_TITLE\'),
                    width: 700
                });

        $(\'.help-search\').click(function () {
            $dialog.dialog(\'open\');
            // prevent the default action, e.g., following a link
        });

    });
    '; ?>

</script>
<table width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>
                      </tr>
    <tr>
        <td colspan='20'>
            &nbsp;
        </td>
    </tr>
    <?php if ($this->_tpl_vars['DISPLAY_SAVED_SEARCH']): ?>
        <tr>
            <td colspan='2'>
                <a class='tabFormAdvLink' onhover href='javascript:toggleInlineSearch()'>
                    <?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_SHOW_OPTIONS'), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('alt_show_hide', ob_get_contents());ob_end_clean(); ?>
                    <?php echo smarty_function_sugar_getimage(array('alt' => $this->_tpl_vars['alt_show_hide'],'name' => 'advanced_search','ext' => ".gif",'other_attributes' => 'border="0" id="up_down_img" '), $this);?>

                    &nbsp;<?php echo $this->_tpl_vars['APP']['LNK_SAVED_VIEWS']; ?>

                </a><br>
                <input type='hidden' id='showSSDIV' name='showSSDIV' value='<?php echo $this->_tpl_vars['SHOWSSDIV']; ?>
'>
                <p>
            </td>
            <td scope='row' width='10%' nowrap="nowrap">
                <?php echo smarty_function_sugar_translate(array('label' => 'LBL_SAVE_SEARCH_AS','module' => 'SavedSearch'), $this);?>
:
            </td>
            <td width='30%' nowrap>
                <input type='text' name='saved_search_name'>
                <input type='hidden' name='search_module' value=''>
                <input type='hidden' name='saved_search_action' value=''>
                <input title='<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
' value='<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
' class='button'
                       type='button' name='saved_search_submit'
                       onclick='SUGAR.savedViews.setChooser(); return SUGAR.savedViews.saved_search_action("save");'>
            </td>
            <td scope='row' width='10%' nowrap="nowrap">
                <?php echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFY_CURRENT_FILTER','module' => 'SavedSearch'), $this);?>
:
            </td>
            <td width='30%' nowrap>
                <input class='button'
                       onclick='SUGAR.savedViews.setChooser(); return SUGAR.savedViews.saved_search_action("update")'
                       value='<?php echo $this->_tpl_vars['APP']['LBL_UPDATE']; ?>
' title='<?php echo $this->_tpl_vars['APP']['LBL_UPDATE']; ?>
' name='ss_update' id='ss_update'
                       type='button'>
                <input class='button'
                       onclick='return SUGAR.savedViews.saved_search_action("delete", "<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DELETE_CONFIRM','module' => 'SavedSearch'), $this);?>
")'
                       value='<?php echo $this->_tpl_vars['APP']['LBL_DELETE']; ?>
' title='<?php echo $this->_tpl_vars['APP']['LBL_DELETE']; ?>
' name='ss_delete' id='ss_delete'
                       type='button'>
                <br><span id='curr_search_name'></span>
            </td>
        </tr>
        <tr>
            <td colspan='6'>
                <div style='<?php echo $this->_tpl_vars['DISPLAYSS']; ?>
' id='inlineSavedSearch'>
                    <?php echo $this->_tpl_vars['SAVED_SEARCH']; ?>

                </div>
            </td>
        </tr>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['displayType'] != 'popupView'): ?>
        <tr>
            <td colspan='5'>
                <input tabindex='2' title='<?php echo $this->_tpl_vars['APP']['LBL_SEARCH_BUTTON_TITLE']; ?>
' onclick='SUGAR.savedViews.setChooser()'
                       class='button' type='submit' name='button' value='<?php echo $this->_tpl_vars['APP']['LBL_SEARCH_BUTTON_LABEL']; ?>
'
                       id='search_form_submit_advanced'/>&nbsp;
                <input tabindex='2' title='<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_TITLE']; ?>
'
                       onclick='SUGAR.searchForm.clear_form(this.form); if(document.getElementById("saved_search_select")){document.getElementById("saved_search_select").options[0].selected=true;} return false;'
                       class='button' type='button' name='clear' id='search_form_clear_advanced'
                       value='<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_LABEL']; ?>
'/>
                <?php if ($this->_tpl_vars['DOCUMENTS_MODULE']): ?>
                    &nbsp;
                    <input title="<?php echo $this->_tpl_vars['APP']['LBL_BROWSE_DOCUMENTS_BUTTON_TITLE']; ?>
" type="button" class="button"
                           value="<?php echo $this->_tpl_vars['APP']['LBL_BROWSE_DOCUMENTS_BUTTON_LABEL']; ?>
"
                           onclick='open_popup("Documents", 600, 400, "&caller=Documents", true, false, "");'/>
                <?php endif; ?>
                <a id="basic_search_link" href="javascript:void(0)"
                   accesskey="<?php echo $this->_tpl_vars['APP']['LBL_ADV_SEARCH_LNK_KEY']; ?>
"><?php echo $this->_tpl_vars['APP']['LNK_BASIC_FILTER']; ?>
</a>
        <span class='white-space'>
            &nbsp;&nbsp;&nbsp;<?php if ($this->_tpl_vars['SAVED_SEARCHES_OPTIONS']): ?>|&nbsp;&nbsp;&nbsp;<b><?php echo $this->_tpl_vars['APP']['LBL_SAVED_FILTER_SHORTCUT']; ?>
</b>&nbsp;
            <?php echo $this->_tpl_vars['SAVED_SEARCHES_OPTIONS']; ?>
 <?php endif; ?>
            <span id='go_btn_span' style='display:none'><input tabindex='2' title='go_select' id='go_select'
                                                               onclick='SUGAR.searchForm.clear_form(this.form);'
                                                               class='button' type='button' name='go_select'
                                                               value=' <?php echo $this->_tpl_vars['APP']['LBL_GO_BUTTON_LABEL']; ?>
 '/></span>
        </span>
            </td>
            <td class="help">
                <?php if ($this->_tpl_vars['DISPLAY_SEARCH_HELP']): ?>
                    <img border='0' src='<?php echo smarty_function_sugar_getimagepath(array('file' => "help-dashlet.gif"), $this);?>
' class="help-search">
                <?php endif; ?>
            </td>
        </tr>
    <?php endif; ?>
</table>

<script>
    <?php echo '
    if (typeof(loadSSL_Scripts) == \'function\') {
        loadSSL_Scripts();
    }
    '; ?>

</script>
<script>
    <?php echo '
    $(document).ready(function () {
        $(\'#basic_search_link\').one("click", function () {
            //alert( "This will be displayed only once." );
            SUGAR.searchForm.searchFormSelect(\''; ?>
<?php echo $this->_tpl_vars['module']; ?>
<?php echo '|basic_search\', \''; ?>
<?php echo $this->_tpl_vars['module']; ?>
<?php echo '|advanced_search\');
        });
    });
    '; ?>

</script><?php echo ''; ?>