{*

/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/




*}
{literal}
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
{/literal}



{sugar_getscript file="cache/include/javascript/sugar_grp_yui_widgets.js"}
{sugar_getscript file='include/javascript/dashlets.js'}

{$chartResources}
{$mySugarChartResources}

<script type="text/javascript">
var activePage = {$activePage};
var theme = '{$theme}';
current_user_id = '{$current_user}';
jsChartsArray = new Array();
var moduleName = '{$module}';
document.body.setAttribute("class", "yui-skin-sam");
{literal}
var mySugarLoader = new YAHOO.util.YUILoader({
	require : ["my_sugar", "sugar_charts"],
    // Bug #48940 Skin always must be blank
    skin: {
        base: 'blank',
        defaultSkin: ''
    },
	onSuccess: function(){
		initMySugar();
		initmySugarCharts();
		SUGAR.mySugar.maxCount = 	{/literal}{$maxCount}{literal};
		SUGAR.mySugar.homepage_dd = new Array();
		var j = 0;

		{/literal}
		var dashletIds = {$dashletIds};

		{if !$lock_homepage}
			for(i in dashletIds) {ldelim}
				SUGAR.mySugar.homepage_dd[j] = new ygDDList('dashlet_' + dashletIds[i]);
				SUGAR.mySugar.homepage_dd[j].setHandleElId('dashlet_header_' + dashletIds[i]);
                // Bug #47097 : Dashlets not displayed after moving them
                // add new property to save real id of dashlet, it needs to have ability reload dashlet by id
                SUGAR.mySugar.homepage_dd[j].dashletID = dashletIds[i];
				SUGAR.mySugar.homepage_dd[j].onMouseDown = SUGAR.mySugar.onDrag;
				SUGAR.mySugar.homepage_dd[j].afterEndDrag = SUGAR.mySugar.onDrop;
				j++;
			{rdelim}
			{if $hiddenCounter > 0}
			for(var wp = 0; wp <= {$hiddenCounter}; wp++) {ldelim}
				SUGAR.mySugar.homepage_dd[j++] = new ygDDListBoundary('page_'+activePage+'_hidden' + wp);
			{rdelim}
			{/if}
			YAHOO.util.DDM.mode = 1;
		{/if}
		{literal}
		SUGAR.mySugar.renderDashletsDialog();
		SUGAR.mySugar.sugarCharts.loadSugarCharts(activePage);
		{/literal}
		{literal}
	}
});
mySugarLoader.addModule({
	name :"my_sugar",
	type : "js",
	fullpath: {/literal}"{sugar_getjspath file='include/MySugar/javascript/MySugar.js'}"{literal},
	varName: "initMySugar",
	requires: []
});
mySugarLoader.addModule({
	name :"sugar_charts",
	type : "js",
	fullpath: {/literal}"{sugar_getjspath file="include/SugarCharts/Jit/js/mySugarCharts.js"}"{literal},
	varName: "initmySugarCharts",
	requires: []
});
mySugarLoader.insert();
{/literal}
</script>




<div class="clear"></div>
<div id="pageContainer" class="yui-skin-sam">
<div id="pageNum_{$activePage}_div">
<table width="100%" cellspacing="0" cellpadding="0" border="0" style="margin-top: 5px;">
 	<tr>
	 	<td>

		</td>

		<td align='right'>
			{if !$lock_homepage}<!--<input id="add_dashlets" class="button" type="button" value="{$lblAddDashlets}" onclick="return SUGAR.mySugar.showDashletsDialog();"/>-->{/if}
		</td>
		
	</tr>
	<tr>
		{counter assign=hiddenCounter start=0 print=false}
		{foreach from=$columns key=colNum item=data}
		<td valign='top' >
			<ul class='noBullet' id='col_{$activePage}_{$colNum}'>
				<li id='page_{$activePage}_hidden{$hiddenCounter}b' style='height: 5px; margin-top:12px;' class='noBullet'>&nbsp;&nbsp;&nbsp;</li>
		        {foreach from=$data.dashlets key=id item=dashlet}
				<li class='noBullet' id='dashlet_{$id}'>
					<div id='dashlet_entire_{$id}' class='dashletPanel'>
						{$dashlet.script}
					{$dashlet.displayHeader}
						{$dashlet.display}
                        {$dashlet.displayFooter}
                  </div>
				</li>
				{/foreach}
				<li id='page_{$activePage}_hidden{$hiddenCounter}' style='height: 5px' class='noBullet'>&nbsp;&nbsp;&nbsp;</li>
			</ul>
		</td>
		{counter}
		{/foreach}
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

	{foreach from=$divPages key=divPageIndex item=divPageNum}
	<div id="pageNum_{$divPageNum}_div" style="display:none;">
	</div>
	{/foreach}



	<div id="dashletsDialog" style="display:none;">
		<div class="hd" id="dashletsDialogHeader"><a href="javascript:void(0)" onClick="javascript:SUGAR.mySugar.closeDashletsDialog();">
			<div class="container-close">&nbsp;</div></a>{$lblAdd}
		</div>
		<div class="bd" id="dashletsList">
			<form></form>
		</div>

	</div>
				
	
</div>

