<?php /* Smarty version 2.6.11, created on 2016-04-14 22:02:37
         compiled from include/MySugar/tpls/MySugar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getscript', 'include/MySugar/tpls/MySugar.tpl', 60, false),array('function', 'sugar_getjspath', 'include/MySugar/tpls/MySugar.tpl', 119, false),array('function', 'counter', 'include/MySugar/tpls/MySugar.tpl', 152, false),)), $this); ?>
<?php echo '
<style>
.menu{
	z-index:100;
}

.subDmenu{
	z-index:100;
}

div.moduleTitle {
height: 10px;
	}
</style>
'; ?>




<?php echo smarty_function_sugar_getscript(array('file' => "cache/include/javascript/sugar_grp_yui_widgets.js"), $this);?>

<?php echo smarty_function_sugar_getscript(array('file' => 'include/javascript/dashlets.js'), $this);?>


<?php echo $this->_tpl_vars['chartResources']; ?>

<?php echo $this->_tpl_vars['mySugarChartResources']; ?>


<script type="text/javascript">
var activePage = <?php echo $this->_tpl_vars['activePage']; ?>
;
var theme = '<?php echo $this->_tpl_vars['theme']; ?>
';
current_user_id = '<?php echo $this->_tpl_vars['current_user']; ?>
';
jsChartsArray = new Array();
var moduleName = '<?php echo $this->_tpl_vars['module']; ?>
';
document.body.setAttribute("class", "yui-skin-sam");
<?php echo '
var mySugarLoader = new YAHOO.util.YUILoader({
	require : ["my_sugar", "sugar_charts"],
    // Bug #48940 Skin always must be blank
    skin: {
        base: \'blank\',
        defaultSkin: \'\'
    },
	onSuccess: function(){
		initMySugar();
		initmySugarCharts();
		SUGAR.mySugar.maxCount = 	';  echo $this->_tpl_vars['maxCount'];  echo ';
		SUGAR.mySugar.homepage_dd = new Array();
		var j = 0;

		'; ?>

		var dashletIds = <?php echo $this->_tpl_vars['dashletIds']; ?>
;

		<?php if (! $this->_tpl_vars['lock_homepage']): ?>
			for(i in dashletIds) {
				SUGAR.mySugar.homepage_dd[j] = new ygDDList('dashlet_' + dashletIds[i]);
				SUGAR.mySugar.homepage_dd[j].setHandleElId('dashlet_header_' + dashletIds[i]);
                // Bug #47097 : Dashlets not displayed after moving them
                // add new property to save real id of dashlet, it needs to have ability reload dashlet by id
                SUGAR.mySugar.homepage_dd[j].dashletID = dashletIds[i];
				SUGAR.mySugar.homepage_dd[j].onMouseDown = SUGAR.mySugar.onDrag;
				SUGAR.mySugar.homepage_dd[j].afterEndDrag = SUGAR.mySugar.onDrop;
				j++;
			}
			<?php if ($this->_tpl_vars['hiddenCounter'] > 0): ?>
			for(var wp = 0; wp <= <?php echo $this->_tpl_vars['hiddenCounter']; ?>
; wp++) {
				SUGAR.mySugar.homepage_dd[j++] = new ygDDListBoundary('page_'+activePage+'_hidden' + wp);
			}
			<?php endif; ?>
			YAHOO.util.DDM.mode = 1;
		<?php endif; ?>
		<?php echo '
		SUGAR.mySugar.renderDashletsDialog();
		SUGAR.mySugar.sugarCharts.loadSugarCharts(activePage);
		'; ?>

		<?php echo '
	}
});
mySugarLoader.addModule({
	name :"my_sugar",
	type : "js",
	fullpath: '; ?>
"<?php echo smarty_function_sugar_getjspath(array('file' => 'include/MySugar/javascript/MySugar.js'), $this);?>
"<?php echo ',
	varName: "initMySugar",
	requires: []
});
mySugarLoader.addModule({
	name :"sugar_charts",
	type : "js",
	fullpath: '; ?>
"<?php echo smarty_function_sugar_getjspath(array('file' => "include/SugarCharts/Jit/js/mySugarCharts.js"), $this);?>
"<?php echo ',
	varName: "initmySugarCharts",
	requires: []
});
mySugarLoader.insert();
'; ?>

</script>




<div class="clear"></div>
<div id="pageContainer" class="yui-skin-sam">
<div id="pageNum_<?php echo $this->_tpl_vars['activePage']; ?>
_div">
<table width="100%" cellspacing="0" cellpadding="0" border="0" style="margin-top: 5px;">
 	<tr>
	 	<td>

		</td>

		<td align='right'>
			<?php if (! $this->_tpl_vars['lock_homepage']): ?><!--<input id="add_dashlets" class="button" type="button" value="<?php echo $this->_tpl_vars['lblAddDashlets']; ?>
" onclick="return SUGAR.mySugar.showDashletsDialog();"/>--><?php endif; ?>
		</td>
		
	</tr>
	<tr>
		<?php echo smarty_function_counter(array('assign' => 'hiddenCounter','start' => 0,'print' => false), $this);?>

		<?php $_from = $this->_tpl_vars['columns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['colNum'] => $this->_tpl_vars['data']):
?>
		<td valign='top' >
			<ul class='noBullet' id='col_<?php echo $this->_tpl_vars['activePage']; ?>
_<?php echo $this->_tpl_vars['colNum']; ?>
'>
				<li id='page_<?php echo $this->_tpl_vars['activePage']; ?>
_hidden<?php echo $this->_tpl_vars['hiddenCounter']; ?>
b' style='height: 5px; margin-top:12px;' class='noBullet'>&nbsp;&nbsp;&nbsp;</li>
		        <?php $_from = $this->_tpl_vars['data']['dashlets']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['dashlet']):
?>
				<li class='noBullet' id='dashlet_<?php echo $this->_tpl_vars['id']; ?>
'>
					<div id='dashlet_entire_<?php echo $this->_tpl_vars['id']; ?>
' class='dashletPanel'>
						<?php echo $this->_tpl_vars['dashlet']['script']; ?>

					<?php echo $this->_tpl_vars['dashlet']['displayHeader']; ?>

						<?php echo $this->_tpl_vars['dashlet']['display']; ?>

                        <?php echo $this->_tpl_vars['dashlet']['displayFooter']; ?>

                  </div>
				</li>
				<?php endforeach; endif; unset($_from); ?>
				<li id='page_<?php echo $this->_tpl_vars['activePage']; ?>
_hidden<?php echo $this->_tpl_vars['hiddenCounter']; ?>
' style='height: 5px' class='noBullet'>&nbsp;&nbsp;&nbsp;</li>
			</ul>
		</td>
		<?php echo smarty_function_counter(array(), $this);?>

		<?php endforeach; endif; unset($_from); ?>
	</tr>
</table>
<!--<table class="table_right h3Row" border="1" cellpadding="0"  cellpadding="0" width="98%">  
<tr>
<td nowrap=""><h3><span>Recent Cases</span></h3></td>
<tr height="20" bgcolor="#ebebed" class="evenListRowS1">

  <td width="151">Cases Name</td>
  <td width="166">File URL</td>		
  
</tr>

<tr height="20" class="evenListRowS1">
  <td width="151">Automotive Parts</td>
  <td width="166"><a href="INFOPK.AUTOMOTIVE.6-10-14.pdf">Information Pack</a></td> 
</tr>
<tr height="20" class="evenListRowS1">
  <td width="151">Cathode Ray Tube</td>
  <td width="166"><a href="CRT-TXID.INFOPK.4-15-14.pdf">Information Pack</a></td> 
</tr>
<tr height="20" class="evenListRowS1">
  <td width="151">Dynamic Random Access Memory</td>
  <td width="166"><a href="INFO.SRAM_.6-10-14.pdf">Information Pack</a></td> 
</tr>

<tr height="20" class="evenListRowS1">
  <td width="151">Freight Forwarders</td>
  <td width="166"><a href="INFO.FREIGHTFORWARDERS.6-10-14.pdf">Information Pack</a></td> 
</tr>

<tr height="20" class="evenListRowS1">
  <td width="151">LCD Indirect Flat Panel</td>
  <td width="166"><a href="INFO.LCD_.6-10-14.pdf">Information Pack</a></td> 
</tr>

<tr height="20" class="evenListRowS1">
  <td width="151">Optical Disk Drive</td>
  <td width="166"><a href="OPTICALDISKDRIVE-TXIDO.INFOPK.4-15-14.pdf">Information Pack</a></td> 
</tr>

<tr height="20" class="evenListRowS1">
  <td width="151">Payment Card Interchange Fee</td>
  <td width="166"><a href="INFO.VISA_.6-10-14.pdf">Information Pack</a></td> 
</tr>

</table>-->
	</div>

	<?php $_from = $this->_tpl_vars['divPages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['divPageIndex'] => $this->_tpl_vars['divPageNum']):
?>
	<div id="pageNum_<?php echo $this->_tpl_vars['divPageNum']; ?>
_div" style="display:none;">
	</div>
	<?php endforeach; endif; unset($_from); ?>



	<div id="dashletsDialog" style="display:none;">
		<div class="hd" id="dashletsDialogHeader"><a href="javascript:void(0)" onClick="javascript:SUGAR.mySugar.closeDashletsDialog();">
			<div class="container-close">&nbsp;</div></a><?php echo $this->_tpl_vars['lblAdd']; ?>

		</div>
		<div class="bd" id="dashletsList">
			<form></form>
		</div>

	</div>
				
	
</div>
