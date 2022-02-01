<?php /* Smarty version Smarty-3.1.7, created on 2022-01-28 22:42:38
         compiled from "/var/www/html/includes/runtime/../../layouts/v7/modules/Accounts/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173066111261f4715eeff3b3-89652411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '119a8f0257aa21d1fc7c24a2c49e453f00f6a1a0' => 
    array (
      0 => '/var/www/html/includes/runtime/../../layouts/v7/modules/Accounts/DetailViewSummaryContents.tpl',
      1 => 1572870387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173066111261f4715eeff3b3-89652411',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_61f4715f06e12',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61f4715f06e12')) {function content_61f4715f06e12($_smarty_tpl) {?>

<form id="detailView" class="clearfix" method="POST" style="position: relative"><div class="col-lg-12 resizable-summary-view"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></form><?php }} ?>