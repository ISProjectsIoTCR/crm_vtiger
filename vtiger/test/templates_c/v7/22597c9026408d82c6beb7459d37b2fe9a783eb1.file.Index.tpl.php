<?php /* Smarty version Smarty-3.1.7, created on 2022-01-28 21:23:54
         compiled from "/var/www/html/includes/runtime/../../layouts/v7/modules/Settings/ExtensionStore/Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120827474661f45eea8fe018-29941730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22597c9026408d82c6beb7459d37b2fe9a783eb1' => 
    array (
      0 => '/var/www/html/includes/runtime/../../layouts/v7/modules/Settings/ExtensionStore/Index.tpl',
      1 => 1572870387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120827474661f45eea8fe018-29941730',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_61f45eea903b3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61f45eea903b3')) {function content_61f45eea903b3($_smarty_tpl) {?>
<div class="col-sm-12 col-xs-12 content-area" id="importModules"><div class="row"><div class="col-sm-4 col-xs-4"><div class="row"><div class="col-sm-8 col-xs-8"><input type="text" id="searchExtension" class="extensionSearch form-control" placeholder="<?php echo vtranslate('Search for an extension..',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"/></div></div></div></div><br><div class="contents row"><div class="col-sm-12 col-xs-12" id="extensionContainer"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ExtensionModules.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("CardSetupModals.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>