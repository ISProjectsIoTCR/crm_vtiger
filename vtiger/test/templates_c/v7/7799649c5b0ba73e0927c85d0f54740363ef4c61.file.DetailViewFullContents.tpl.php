<?php /* Smarty version Smarty-3.1.7, created on 2022-01-28 21:11:20
         compiled from "/var/www/html/includes/runtime/../../layouts/v7/modules/Users/DetailViewFullContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140407685161f45bf897d9d3-06359648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7799649c5b0ba73e0927c85d0f54740363ef4c61' => 
    array (
      0 => '/var/www/html/includes/runtime/../../layouts/v7/modules/Users/DetailViewFullContents.tpl',
      1 => 1572870387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140407685161f45bf897d9d3-06359648',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_MODEL' => 0,
    'NAME_FIELDS' => 0,
    'MODULE_NAME' => 0,
    'RECORD_STRUCTURE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_61f45bf8988cb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61f45bf8988cb')) {function content_61f45bf8988cb($_smarty_tpl) {?>



<?php $_smarty_tpl->tpl_vars['NAME_FIELDS'] = new Smarty_variable(array('first_name','last_name'), null, 0);?><?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value){?><?php $_smarty_tpl->tpl_vars['NAME_FIELDS'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getNameFields(), null, 0);?><?php }?><form id="detailView" data-name-fields='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['NAME_FIELDS']->value);?>
' method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('DetailViewBlockView.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0);?>
</form>
<?php }} ?>