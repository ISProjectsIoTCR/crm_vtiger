<?php /* Smarty version Smarty-3.1.7, created on 2019-11-25 07:52:29
         compiled from "/var/www/html/includes/runtime/../../layouts/v7/modules/Install/InstallPostProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19882900965ddb883dba9c59-16211048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '143af08cb88e137c5473ee2d9cd4912a8af4a742' => 
    array (
      0 => '/var/www/html/includes/runtime/../../layouts/v7/modules/Install/InstallPostProcess.tpl',
      1 => 1572870387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19882900965ddb883dba9c59-16211048',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'VTIGER_VERSION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5ddb883dbafbb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ddb883dbafbb')) {function content_5ddb883dbafbb($_smarty_tpl) {?>

<br>
<center>
	<footer class="noprint">
		<div class="vtFooter">
			<p>
				<?php echo vtranslate('POWEREDBY');?>
 <?php echo $_smarty_tpl->tpl_vars['VTIGER_VERSION']->value;?>
&nbsp;
				&copy; 2004 - <?php echo date('Y');?>
&nbsp;
				<a href="//www.vtiger.com" target="_blank">vtiger.com</a>
				&nbsp;|&nbsp;
				<a href="#" onclick="window.open('copyright.html', 'copyright', 'height=115,width=575').moveTo(210, 620)"><?php echo vtranslate('LBL_READ_LICENSE');?>
</a>
				&nbsp;|&nbsp;
				<a href="https://www.vtiger.com/privacy-policy" target="_blank"><?php echo vtranslate('LBL_PRIVACY_POLICY');?>
</a>
			</p>
		</div>
	</footer>
</center>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('JSResources.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<?php }} ?>