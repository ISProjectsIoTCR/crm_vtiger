<?php /* Smarty version Smarty-3.1.7, created on 2022-01-28 22:42:38
         compiled from "/var/www/html/includes/runtime/../../layouts/v7/modules/Accounts/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6272986261f4715ea6c236-84618085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2723be276a2db9cfd457628c8ca754d06627aa96' => 
    array (
      0 => '/var/www/html/includes/runtime/../../layouts/v7/modules/Accounts/ModuleSummaryView.tpl',
      1 => 1572870387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6272986261f4715ea6c236-84618085',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_61f4715ebe9e7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61f4715ebe9e7')) {function content_61f4715ebe9e7($_smarty_tpl) {?>

<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>