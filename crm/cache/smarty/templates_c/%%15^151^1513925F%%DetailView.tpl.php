<?php /* Smarty version 2.6.31, created on 2021-06-07 12:15:05
         compiled from cache/themes/Sugar5/modules/Users/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/themes/Sugar5/modules/Users/DetailView.tpl', 2, false),array('function', 'counter', 'cache/themes/Sugar5/modules/Users/DetailView.tpl', 7, false),array('function', 'sugar_getimagepath', 'cache/themes/Sugar5/modules/Users/DetailView.tpl', 10, false),array('function', 'sugar_translate', 'cache/themes/Sugar5/modules/Users/DetailView.tpl', 13, false),array('function', 'sugar_getimage', 'cache/themes/Sugar5/modules/Users/DetailView.tpl', 42, false),array('function', 'sugar_phone', 'cache/themes/Sugar5/modules/Users/DetailView.tpl', 196, false),array('function', 'sugar_help', 'cache/themes/Sugar5/modules/Users/DetailView.tpl', 636, false),array('function', 'sugar_getjspath', 'cache/themes/Sugar5/modules/Users/DetailView.tpl', 725, false),array('modifier', 'strip_semicolon', 'cache/themes/Sugar5/modules/Users/DetailView.tpl', 28, false),array('modifier', 'escape', 'cache/themes/Sugar5/modules/Users/DetailView.tpl', 357, false),array('modifier', 'url2html', 'cache/themes/Sugar5/modules/Users/DetailView.tpl', 357, false),array('modifier', 'nl2br', 'cache/themes/Sugar5/modules/Users/DetailView.tpl', 357, false),)), $this); ?>

<?php echo smarty_function_sugar_include(array('include' => $this->_tpl_vars['includes']), $this);?>

<div id="Users_detailview_tabs"
>
<div >
<div id='detailpanel_1' class='detail view  detail508 expanded'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(1);">
<img border="0" id="detailpanel_1_img_hide" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "basic_search.gif"), $this);?>
"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(1);">
<img border="0" id="detailpanel_1_img_show" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "advanced_search.gif"), $this);?>
"></a>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_USER_INFORMATION','module' => 'Users'), $this);?>

<script>
      document.getElementById('detailpanel_1').className += ' expanded';
    </script>
</h4>
<!-- PANEL CONTAINER HERE.. -->
<table id='LBL_USER_INFORMATION' class="panelContainer" cellspacing='<?php echo $this->_tpl_vars['gridline']; ?>
'>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['user_name']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_USER_NAME','module' => 'Users'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="user_name" field="user_name" width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['user_name']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['user_name']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['user_name']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['user_name']['value']); ?>
<?php endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['user_name']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['user_name']['value']; ?>
</span>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['first_name']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_FIRST_NAME','module' => 'Users'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="name" field="first_name" width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['first_name']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['first_name']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['first_name']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['first_name']['value']); ?>
<?php endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['first_name']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['first_name']['value']; ?>
</span>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['status']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS','module' => 'Users'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="enum" field="status" width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['status']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>



<?php if (is_string ( $this->_tpl_vars['fields']['status']['options'] )): ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['status']['options']; ?>
">
<?php echo $this->_tpl_vars['fields']['status']['options']; ?>

<?php else: ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['status']['value']; ?>
">
<?php echo $this->_tpl_vars['fields']['status']['options'][$this->_tpl_vars['fields']['status']['value']]; ?>

<?php endif; ?>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['last_name']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_LAST_NAME','module' => 'Users'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="name" field="last_name" width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['last_name']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['last_name']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['last_name']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['last_name']['value']); ?>
<?php endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['last_name']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['last_name']['value']; ?>
</span>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['UserType']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_USER_TYPE','module' => 'Users'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="enum" field="UserType" width='37.5%' colspan='3' >
<?php if (! $this->_tpl_vars['fields']['UserType']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<span id="UserType" class="sugar_field"><?php echo $this->_tpl_vars['USER_TYPE_READONLY']; ?>
</span>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() { initPanel(1, 'expanded'); }); </script>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_USER_INFORMATION").style.display='none';</script>
<?php endif; ?>
<div id='detailpanel_2' class='detail view  detail508 expanded'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(2);">
<img border="0" id="detailpanel_2_img_hide" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "basic_search.gif"), $this);?>
"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(2);">
<img border="0" id="detailpanel_2_img_show" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "advanced_search.gif"), $this);?>
"></a>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EMPLOYEE_INFORMATION','module' => 'Users'), $this);?>

<script>
      document.getElementById('detailpanel_2').className += ' expanded';
    </script>
</h4>
<!-- PANEL CONTAINER HERE.. -->
<table id='LBL_EMPLOYEE_INFORMATION' class="panelContainer" cellspacing='<?php echo $this->_tpl_vars['gridline']; ?>
'>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['teamleader_c']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_TEAMLEADER','module' => 'Users'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="enum" field="teamleader_c" width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['teamleader_c']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>



<?php if (is_string ( $this->_tpl_vars['fields']['teamleader_c']['options'] )): ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['teamleader_c']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['teamleader_c']['options']; ?>
">
<?php echo $this->_tpl_vars['fields']['teamleader_c']['options']; ?>

<?php else: ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['teamleader_c']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['teamleader_c']['value']; ?>
">
<?php echo $this->_tpl_vars['fields']['teamleader_c']['options'][$this->_tpl_vars['fields']['teamleader_c']['value']]; ?>

<?php endif; ?>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['phone_work']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_WORK_PHONE','module' => 'Users'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="phone" field="phone_work" width='37.5%'  class="phone">
<?php if (! $this->_tpl_vars['fields']['phone_work']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['phone_work']['value'] )): ?>
<?php $this->assign('phone_value', $this->_tpl_vars['fields']['phone_work']['value']); ?>
<?php echo smarty_function_sugar_phone(array('value' => $this->_tpl_vars['phone_value'],'usa_format' => '0'), $this);?>

<?php endif; ?>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['phone_home']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_HOME_PHONE','module' => 'Users'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="phone" field="phone_home" width='37.5%'  class="phone">
<?php if (! $this->_tpl_vars['fields']['phone_home']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['phone_home']['value'] )): ?>
<?php $this->assign('phone_value', $this->_tpl_vars['fields']['phone_home']['value']); ?>
<?php echo smarty_function_sugar_phone(array('value' => $this->_tpl_vars['phone_value'],'usa_format' => '0'), $this);?>

<?php endif; ?>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['phone_mobile']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_MOBILE_PHONE','module' => 'Users'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="phone" field="phone_mobile" width='37.5%'  class="phone">
<?php if (! $this->_tpl_vars['fields']['phone_mobile']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['phone_mobile']['value'] )): ?>
<?php $this->assign('phone_value', $this->_tpl_vars['fields']['phone_mobile']['value']); ?>
<?php echo smarty_function_sugar_phone(array('value' => $this->_tpl_vars['phone_value'],'usa_format' => '0'), $this);?>

<?php endif; ?>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['address_street']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_ADDRESS_STREET','module' => 'Users'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="varchar" field="address_street" width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['address_street']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['address_street']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['address_street']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['address_street']['value']); ?>
<?php endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['address_street']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['address_street']['value']; ?>
</span>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['address_city']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_ADDRESS_CITY','module' => 'Users'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="varchar" field="address_city" width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['address_city']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['address_city']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['address_city']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['address_city']['value']); ?>
<?php endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['address_city']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['address_city']['value']; ?>
</span>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['address_state']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_ADDRESS_STATE','module' => 'Users'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="varchar" field="address_state" width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['address_state']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['address_state']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['address_state']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['address_state']['value']); ?>
<?php endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['address_state']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['address_state']['value']; ?>
</span>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['address_postalcode']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_ADDRESS_POSTALCODE','module' => 'Users'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="varchar" field="address_postalcode" width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['address_postalcode']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['address_postalcode']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['address_postalcode']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['address_postalcode']['value']); ?>
<?php endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['address_postalcode']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['address_postalcode']['value']; ?>
</span>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['description']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Users'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="text" field="description" width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['description']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span class="sugar_field" id="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['description']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['description']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html_entity_decode') : smarty_modifier_escape($_tmp, 'html_entity_decode')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</span>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['photo']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_PHOTO','module' => 'Users'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="image" field="photo" width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['photo']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['photo']['name']; ?>
">
<?php if (strlen ( $this->_tpl_vars['fields']['photo']['value'] ) <= 0): ?>
<img src="" style="max-width: <?php if (! $this->_tpl_vars['vardef']['width']): ?>160<?php else: ?>200<?php endif; ?>px;" height="<?php if (! $this->_tpl_vars['vardef']['height']): ?>160<?php else: ?>50<?php endif; ?>">
<?php else: ?>
<img src="index.php?entryPoint=download&id=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
_<?php echo $this->_tpl_vars['fields']['photo']['name']; ?>
<?php echo $this->_tpl_vars['fields']['width']['value']; ?>
&type=<?php echo $this->_tpl_vars['module']; ?>
" style="max-width: <?php if (! $this->_tpl_vars['vardef']['width']): ?>160<?php else: ?>200<?php endif; ?>px;" height="<?php if (! $this->_tpl_vars['vardef']['height']): ?>160<?php else: ?>50<?php endif; ?>">
<?php endif; ?>
</span>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() { initPanel(2, 'expanded'); }); </script>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_EMPLOYEE_INFORMATION").style.display='none';</script>
<?php endif; ?>
<div id='tabcontent0'>
<div id="detailpanel_1" class="detail view  detail508 expanded">
<div id="settings">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="detail view">
<tr>
<th colspan='4' align="left" width="100%" valign="top">
<h4>
<span><?php echo $this->_tpl_vars['MOD']['LBL_USER_SETTINGS']; ?>
</span>
</h4>
</th>
</tr>
<tr>
<td scope="row">
<span><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_RECEIVE_NOTIFICATIONS'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</span>
</td>
<td>
<span><input class="checkbox" type="checkbox" disabled <?php echo $this->_tpl_vars['RECEIVE_NOTIFICATIONS']; ?>
></span>
</td>
<td>
<span><?php echo $this->_tpl_vars['MOD']['LBL_RECEIVE_NOTIFICATIONS_TEXT']; ?>
&nbsp;</span>
</td>
</tr>
<tr>
<td scope="row" valign="top">
<span><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_REMINDER'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<!--
<td valign="top" nowrap><span><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/Meetings/tpls/reminders.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></span></td>
-->
<td valign="top" nowrap>
<span><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/Reminders/tpls/remindersDefaults.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></span>
</td>
<td>
<span><?php echo $this->_tpl_vars['MOD']['LBL_REMINDER_TEXT']; ?>
&nbsp;</span>
</td>
</tr>
<tr>
<td valign="top" scope="row">
<span><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_MAILMERGE'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</span>
</td>
<td valign="top" nowrap>
<span><input tabindex='3' name='mailmerge_on' disabled class="checkbox"
type="checkbox" <?php echo $this->_tpl_vars['MAILMERGE_ON']; ?>
></span>
</td>
<td>
<span><?php echo $this->_tpl_vars['MOD']['LBL_MAILMERGE_TEXT']; ?>
&nbsp;</span>
</td>
</tr>
<tr>
<td valign="top" scope="row">
<span><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_SETTINGS_URL'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</span>
</td>
<td valign="top" nowrap>
<span><?php echo $this->_tpl_vars['SETTINGS_URL']; ?>
</span>
</td>
<td>
<span><?php echo $this->_tpl_vars['MOD']['LBL_SETTINGS_URL_DESC']; ?>
&nbsp;</span>
</td>
</tr>
<tr>
<td scope="row" valign="top">
<span><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_EXPORT_DELIMITER'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</span>
</td>
<td>
<span><?php echo $this->_tpl_vars['EXPORT_DELIMITER']; ?>
</span>
</td>
<td>
<span><?php echo $this->_tpl_vars['MOD']['LBL_EXPORT_DELIMITER_DESC']; ?>
</span>
</td>
</tr>
<tr>
<td scope="row" valign="top">
<span><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_EXPORT_CHARSET'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</span>
</td>
<td>
<span><?php echo $this->_tpl_vars['EXPORT_CHARSET_DISPLAY']; ?>
</span>
</td>
<td>
<span><?php echo $this->_tpl_vars['MOD']['LBL_EXPORT_CHARSET_DESC']; ?>
</span>
</td>
</tr>
<tr>
<td scope="row" valign="top">
<span><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_USE_REAL_NAMES'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</span>
</td>
<td>
<span><input tabindex='3' name='use_real_names' disabled class="checkbox"
type="checkbox" <?php echo $this->_tpl_vars['USE_REAL_NAMES']; ?>
></span>
</td>
<td>
<span><?php echo $this->_tpl_vars['MOD']['LBL_USE_REAL_NAMES_DESC']; ?>
</span>
</td>
</tr>
<?php if ($this->_tpl_vars['DISPLAY_EXTERNAL_AUTH']): ?>
<tr>
<td scope="row" valign="top">
<span><?php echo ((is_array($_tmp=$this->_tpl_vars['EXTERNAL_AUTH_CLASS'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</span>
</td>
<td valign="top" nowrap>
<span><input id="external_auth_only" name="external_auth_only" type="checkbox"
class="checkbox" <?php echo $this->_tpl_vars['EXTERNAL_AUTH_ONLY_CHECKED']; ?>
></span>
</td>
<td>
<span><?php echo $this->_tpl_vars['MOD']['LBL_EXTERNAL_AUTH_ONLY']; ?>
 <?php echo $this->_tpl_vars['EXTERNAL_AUTH_CLASS']; ?>
</span>
</td>
</tr>
<?php endif; ?>
</table>
</div>
<div id='locale'>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="detail view">
<tr>
<th colspan='4' align="left" width="100%" valign="top">
<h4>
<span><?php echo $this->_tpl_vars['MOD']['LBL_USER_LOCALE']; ?>
</span>
</h4>
</th>
</tr>
<tr>
<td width="15%" scope="row">
<span><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_DATE_FORMAT'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</span>
</td>
<td>
<span><?php echo $this->_tpl_vars['DATEFORMAT']; ?>
&nbsp;</span>
</td>
<td>
<span><?php echo $this->_tpl_vars['MOD']['LBL_DATE_FORMAT_TEXT']; ?>
&nbsp;</span>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<span><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_TIME_FORMAT'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</span>
</td>
<td>
<span><?php echo $this->_tpl_vars['TIMEFORMAT']; ?>
&nbsp;</span>
</td>
<td>
<span><?php echo $this->_tpl_vars['MOD']['LBL_TIME_FORMAT_TEXT']; ?>
&nbsp;</span>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<span><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_TIMEZONE'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</span>
</td>
<td nowrap>
<span><?php echo $this->_tpl_vars['TIMEZONE']; ?>
&nbsp;</span>
</td>
<td>
<span><?php echo $this->_tpl_vars['MOD']['LBL_ZONE_TEXT']; ?>
&nbsp;</span>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<span><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_CURRENCY'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</span>
</td>
<td>
<span><?php echo $this->_tpl_vars['CURRENCY_DISPLAY']; ?>
&nbsp;</span>
</td>
<td>
<span><?php echo $this->_tpl_vars['MOD']['LBL_CURRENCY_TEXT']; ?>
&nbsp;</span>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<span><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_CURRENCY_SIG_DIGITS'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</span>
</td>
<td>
<span><?php echo $this->_tpl_vars['CURRENCY_SIG_DIGITS']; ?>
&nbsp;</span>
</td>
<td>
<span><?php echo $this->_tpl_vars['MOD']['LBL_CURRENCY_SIG_DIGITS_DESC']; ?>
&nbsp;</span>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<span><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_NUMBER_GROUPING_SEP'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</span>
</td>
<td>
<span><?php echo $this->_tpl_vars['NUM_GRP_SEP']; ?>
&nbsp;</span>
</td>
<td>
<span><?php echo $this->_tpl_vars['MOD']['LBL_NUMBER_GROUPING_SEP_TEXT']; ?>
&nbsp;</span>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<span><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_DECIMAL_SEP'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</span>
</td>
<td>
<span><?php echo $this->_tpl_vars['DEC_SEP']; ?>
&nbsp;</span>
</td>
<td>
<span></span><?php echo $this->_tpl_vars['MOD']['LBL_DECIMAL_SEP_TEXT']; ?>
&nbsp;</td>
</tr>
</tr>
<tr>
<td width="15%" scope="row">
<span><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_LOCALE_DEFAULT_NAME_FORMAT'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</span>
</td>
<td>
<span><?php echo $this->_tpl_vars['NAME_FORMAT']; ?>
&nbsp;</span>
</td>
<td>
<span></span><?php echo $this->_tpl_vars['MOD']['LBL_LOCALE_NAME_FORMAT_DESC']; ?>
&nbsp;</td>
</tr>
</table>
</div>
<div id='calendar_options'>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="detail view">
<tr>
<th colspan='4' align="left" width="100%" valign="top">
<h4>
<span><?php echo $this->_tpl_vars['MOD']['LBL_CALENDAR_OPTIONS']; ?>
</span>
</h4>
</th>
</tr>
<tr>
<td width="15%" scope="row">
<span><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_PUBLISH_KEY'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</span>
</td>
<td width="20%">
<span><?php echo $this->_tpl_vars['CALENDAR_PUBLISH_KEY']; ?>
&nbsp;</span>
</td>
<td width="65%">
<span><?php echo $this->_tpl_vars['MOD']['LBL_CHOOSE_A_KEY']; ?>
&nbsp;</span>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<span>
<nobr><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_YOUR_PUBLISH_URL'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</nobr>
</span>
</td>
<td colspan=2><?php if ($this->_tpl_vars['CALENDAR_PUBLISH_KEY']): ?><?php echo $this->_tpl_vars['CALENDAR_PUBLISH_URL']; ?>
<?php else: ?><?php echo $this->_tpl_vars['MOD']['LBL_NO_KEY']; ?>
<?php endif; ?></td>
</tr>
<tr>
<td width="15%" scope="row">
<span><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_SEARCH_URL'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</span>
</td>
<td colspan=2>
<span><?php if ($this->_tpl_vars['CALENDAR_PUBLISH_KEY']): ?><?php echo $this->_tpl_vars['CALENDAR_SEARCH_URL']; ?>
<?php else: ?><?php echo $this->_tpl_vars['MOD']['LBL_NO_KEY']; ?>
<?php endif; ?></span>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<span><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_ICAL_PUB_URL'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
: <?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_ICAL_PUB_URL_HELP']), $this);?>
</span>
</td>
<td colspan=2>
<span><?php if ($this->_tpl_vars['CALENDAR_PUBLISH_KEY']): ?><?php echo $this->_tpl_vars['CALENDAR_ICAL_URL']; ?>
<?php else: ?><?php echo $this->_tpl_vars['MOD']['LBL_NO_KEY']; ?>
<?php endif; ?></span>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<span><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_FDOW'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</span>
</td>
<td>
<span><?php echo $this->_tpl_vars['FDOWDISPLAY']; ?>
&nbsp;</span>
</td>
<td>
<span></span><?php echo $this->_tpl_vars['MOD']['LBL_FDOW_TEXT']; ?>
&nbsp;</td>
</tr>
</table>
</div>
<div id='google_options'>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="detail view">
<tr>
<th align="left" scope="row" colspan="4"><h4><?php echo $this->_tpl_vars['MOD']['LBL_GOOGLE_API_SETTINGS']; ?>
</h4></th>
</tr>
<tr>
<td width="17%" scope="row">
<slot><?php echo $this->_tpl_vars['MOD']['LBL_GOOGLE_API_TOKEN']; ?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_GOOGLE_API_TOKEN_HELP']), $this);?>

</td>
<td width="20%">
Current API Token is: <span style="color:<?php echo $this->_tpl_vars['GOOGLE_API_TOKEN_COLOR']; ?>
"><?php echo $this->_tpl_vars['GOOGLE_API_TOKEN']; ?>
</span>
</td>
<td width="63%">
<slot>&nbsp;</slot>
</td>
</tr>
<tr>
<td width="17%" scope="row">
<slot><?php echo $this->_tpl_vars['MOD']['LBL_GSYNC_CAL']; ?>
:</slot>
</td>
<td>
<slot><input class="checkbox" type="checkbox" disabled <?php echo $this->_tpl_vars['GSYNC_CAL']; ?>
></slot>
</td>
</tr>
</table>
</div>
<div id='edit_tabs'>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="detail view">
<tr>
<th colspan='4' align="left" width="100%" valign="top">
<h4>
<span><?php echo $this->_tpl_vars['MOD']['LBL_LAYOUT_OPTIONS']; ?>
</span>
</h4>
</th>
</tr>
<tr>
<td width="15%" scope="row">
<span><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_USE_GROUP_TABS'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</span>
</td>
<td>
<span><input class="checkbox" type="checkbox" disabled <?php echo $this->_tpl_vars['USE_GROUP_TABS']; ?>
></span>
</td>
<td>
<span><?php echo $this->_tpl_vars['MOD']['LBL_NAVIGATION_PARADIGM_DESCRIPTION']; ?>
&nbsp;</span>
</td>
</tr>
<tr>
<td width="15%" scope="row">
<span><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_SUBPANEL_TABS'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</span>
</td>
<td>
<span><input class="checkbox" type="checkbox" disabled <?php echo $this->_tpl_vars['SUBPANEL_TABS']; ?>
></span>
</td>
<td>
<span><?php echo $this->_tpl_vars['MOD']['LBL_SUBPANEL_TABS_DESCRIPTION']; ?>
&nbsp;</span>
</td>
</tr>
</table>
</div>
</div>
</div>
<div id='tabcontent1'>
<div id="detailpanel_2" class="detail view  detail508 expanded">
<div id="advanced">
<TABLE width='100%' class='detail view' border='0' cellpadding=0 cellspacing = 1  ><TR><td style="background: transparent;"></td><td style="text-align: center;" scope="row"><b>Access</b></td><td style="text-align: center;" scope="row"><b>Delete</b></td><td style="text-align: center;" scope="row"><b>Edit</b></td><td style="text-align: center;" scope="row"><b>Export</b></td><td style="text-align: center;" scope="row"><b>Import</b></td><td style="text-align: center;" scope="row"><b>List</b></td><td style="text-align: center;" scope="row"><b>Mass Update</b></td><td style="text-align: center;" scope="row"><b>View</b></td></TR><TR><td nowrap width='1%' scope="row"><b>Accounts</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Alerts</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Bugs</b></td><td  width='12.5%' align='center'><div align='center' class="aclDisabled"><b>Disabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Calls</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Calls Reschedule</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Campaigns</b></td><td  width='12.5%' align='center'><div align='center' class="aclDisabled"><b>Disabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Case Events</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Case Updates</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Cases</b></td><td  width='12.5%' align='center'><div align='center' class="aclDisabled"><b>Disabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Contacts</b></td><td  width='12.5%' align='center'><div align='center' class="aclDisabled"><b>Disabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Contracts</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Current Cases</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Documents</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>EAPM</b></td><td  width='12.5%' align='center'><div align='center' class="aclDisabled"><b>Disabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Email - Templates</b></td><td  width='12.5%' align='center'><div align='center' class="aclDisabled"><b>Disabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Email Marketing</b></td><td  width='12.5%' align='center'><div align='center' class="aclDisabled"><b>Disabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Emails</b></td><td  width='12.5%' align='center'><div align='center' class="aclDisabled"><b>Disabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Events</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b></b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Index</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Index Event</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Invoices</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>KB - Categories</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Knowledge Base</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Leads</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Locations</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Maps</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Maps - Address Cache</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Maps - Areas</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Maps - Markers</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Meetings</b></td><td  width='12.5%' align='center'><div align='center' class="aclDisabled"><b>Disabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Notes</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Opportunities</b></td><td  width='12.5%' align='center'><div align='center' class="aclDisabled"><b>Disabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Outbound Email Accounts</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>PDF - Templates</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Process Audit</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Products</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Products - Categories</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Project Task Templates</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Project Tasks</b></td><td  width='12.5%' align='center'><div align='center' class="aclDisabled"><b>Disabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Projects</b></td><td  width='12.5%' align='center'><div align='center' class="aclDisabled"><b>Disabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Projects - Templates</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Quotes</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Reports</b></td><td  width='12.5%' align='center'><div align='center' class="aclDisabled"><b>Disabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Scheduled Reports</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Security Suite Management</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Spots</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Survey Question Options</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Survey Question Responses</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Survey Questions</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Survey Responses</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Surveys</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Targets</b></td><td  width='12.5%' align='center'><div align='center' class="aclDisabled"><b>Disabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Targets - Lists</b></td><td  width='12.5%' align='center'><div align='center' class="aclDisabled"><b>Disabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Tasks</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclNone"><b>None</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclOwner"><b>Owner</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>Template Section Line</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR><TR><td nowrap width='1%' scope="row"><b>WorkFlow</b></td><td  width='12.5%' align='center'><div align='center' class="aclEnabled"><b>Enabled</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td><td  width='12.5%' align='center'><div align='center' class="aclAll"><b>All</b></div></td></TR></TABLE>
</div>
</div>
</div>
</div>
<script type="text/javascript" src="include/InlineEditing/inlineEditing.js"></script>
<script type="text/javascript" src="modules/Favorites/favorites.js"></script>
<script type='text/javascript' src='<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/Users/DetailView.js'), $this);?>
'></script>