<?php /* Smarty version Smarty-3.1.7, created on 2022-01-28 22:42:47
         compiled from "/var/www/html/includes/runtime/../../layouts/v7/modules/Vtiger/NoComments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214699223861f47167d56695-77440502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc8a7af3049ac54ca9d59020b460d582b74b0b8a' => 
    array (
      0 => '/var/www/html/includes/runtime/../../layouts/v7/modules/Vtiger/NoComments.tpl',
      1 => 1572870387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214699223861f47167d56695-77440502',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_61f47167dea17',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61f47167dea17')) {function content_61f47167dea17($_smarty_tpl) {?>
<div class="noCommentsMsgContainer noContent"><p class="textAlignCenter"> <?php echo vtranslate('LBL_NO_COMMENTS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</p></div><?php }} ?>