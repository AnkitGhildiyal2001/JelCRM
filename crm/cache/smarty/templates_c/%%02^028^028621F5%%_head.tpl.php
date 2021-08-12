<?php /* Smarty version 2.6.31, created on 2021-06-03 21:22:55
         compiled from themes/Sugar5/tpls/_head.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getimagepath', 'themes/Sugar5/tpls/_head.tpl', 52, false),array('function', 'sugar_getjspath', 'themes/Sugar5/tpls/_head.tpl', 61, false),)), $this); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html <?php echo $this->_tpl_vars['langHeader']; ?>
>
<head>
<link rel="SHORTCUT ICON" href="<?php echo $this->_tpl_vars['FAVICON_URL']; ?>
">
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['APP']['LBL_CHARSET']; ?>
">
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<title><?php echo $this->_tpl_vars['APP']['LBL_BROWSER_TITLE']; ?>
</title>
<?php echo $this->_tpl_vars['SUGAR_CSS']; ?>

<?php echo $this->_tpl_vars['SUGAR_JS']; ?>

<?php echo '
<script type="text/javascript">
<!--
SUGAR.themes.theme_name      = \''; ?>
<?php echo $this->_tpl_vars['THEME']; ?>
<?php echo '\';
SUGAR.themes.theme_ie6compat = '; ?>
<?php echo $this->_tpl_vars['THEME_IE6COMPAT']; ?>
<?php echo ';
SUGAR.themes.hide_image      = \''; ?>
<?php echo smarty_function_sugar_getimagepath(array('file' => "hide.gif"), $this);?>
<?php echo '\';
SUGAR.themes.show_image      = \''; ?>
<?php echo smarty_function_sugar_getimagepath(array('file' => "show.gif"), $this);?>
<?php echo '\';
SUGAR.themes.loading_image      = \''; ?>
<?php echo smarty_function_sugar_getimagepath(array('file' => "img_loading.gif"), $this);?>
<?php echo '\';
SUGAR.themes.allThemes       = eval('; ?>
<?php echo $this->_tpl_vars['allThemes']; ?>
<?php echo ');
if ( YAHOO.env.ua )
    UA = YAHOO.env.ua;
-->
</script>
'; ?>

<script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => "cache/include/javascript/sugar_field_grp.js"), $this);?>
'></script>
</head>