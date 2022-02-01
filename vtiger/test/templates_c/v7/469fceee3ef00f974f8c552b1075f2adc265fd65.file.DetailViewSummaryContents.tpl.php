<?php /* Smarty version Smarty-3.1.7, created on 2022-01-28 23:02:36
         compiled from "/var/www/html/includes/runtime/../../layouts/v7/modules/Potentials/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14029430161f4760c046f11-84862429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '469fceee3ef00f974f8c552b1075f2adc265fd65' => 
    array (
      0 => '/var/www/html/includes/runtime/../../layouts/v7/modules/Potentials/DetailViewSummaryContents.tpl',
      1 => 1572870387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14029430161f4760c046f11-84862429',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_61f4760c04b04',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61f4760c04b04')) {function content_61f4760c04b04($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>