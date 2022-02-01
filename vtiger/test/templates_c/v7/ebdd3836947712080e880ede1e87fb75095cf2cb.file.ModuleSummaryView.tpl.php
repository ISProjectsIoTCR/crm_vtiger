<?php /* Smarty version Smarty-3.1.7, created on 2022-01-28 23:02:35
         compiled from "/var/www/html/includes/runtime/../../layouts/v7/modules/Potentials/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205771550561f4760be83570-26473169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebdd3836947712080e880ede1e87fb75095cf2cb' => 
    array (
      0 => '/var/www/html/includes/runtime/../../layouts/v7/modules/Potentials/ModuleSummaryView.tpl',
      1 => 1572870387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205771550561f4760be83570-26473169',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_61f4760beac46',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61f4760beac46')) {function content_61f4760beac46($_smarty_tpl) {?>
<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>