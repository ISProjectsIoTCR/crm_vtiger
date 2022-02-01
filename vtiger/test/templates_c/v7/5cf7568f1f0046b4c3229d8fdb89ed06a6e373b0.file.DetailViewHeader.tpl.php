<?php /* Smarty version Smarty-3.1.7, created on 2022-01-28 22:42:35
         compiled from "/var/www/html/includes/runtime/../../layouts/v7/modules/Vtiger/DetailViewHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31750755461f4715b51f056-87079808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cf7568f1f0046b4c3229d8fdb89ed06a6e373b0' => 
    array (
      0 => '/var/www/html/includes/runtime/../../layouts/v7/modules/Vtiger/DetailViewHeader.tpl',
      1 => 1572870387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31750755461f4715b51f056-87079808',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_61f4715b61391',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61f4715b61391')) {function content_61f4715b61391($_smarty_tpl) {?>
<div class=" detailview-header-block"><div class="detailview-header"><div class="row"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("DetailViewHeaderTitle.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("DetailViewActions.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div><?php }} ?>