<?php /* Smarty version Smarty-3.1.7, created on 2022-01-28 23:26:57
         compiled from "/var/www/html/includes/runtime/../../layouts/v7/modules/Vtiger/dashboards/CalendarActivities.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7392511461f47bc13008d5-12612619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09afe3ef38ec6cfdc48b32264eccd5f650ed7e71' => 
    array (
      0 => '/var/www/html/includes/runtime/../../layouts/v7/modules/Vtiger/dashboards/CalendarActivities.tpl',
      1 => 1572870387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7392511461f47bc13008d5-12612619',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SHARED_USERS' => 0,
    'SHARED_GROUPS' => 0,
    'WIDGET' => 0,
    'MODULE_NAME' => 0,
    'usersList' => 0,
    'CURRENTUSER' => 0,
    'USER_ID' => 0,
    'USER_NAME' => 0,
    'GROUP_ID' => 0,
    'GROUP_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_61f47bc13c314',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61f47bc13c314')) {function content_61f47bc13c314($_smarty_tpl) {?>

<div class="dashboardWidgetHeader clearfix">
    <?php if (count($_smarty_tpl->tpl_vars['SHARED_USERS']->value)>0||count($_smarty_tpl->tpl_vars['SHARED_GROUPS']->value)>0){?>
        <?php $_smarty_tpl->tpl_vars["usersList"] = new Smarty_variable("1", null, 0);?>
    <?php }?>
    <div class="title">
        <div class="dashboardTitle" title="<?php echo vtranslate($_smarty_tpl->tpl_vars['WIDGET']->value->getTitle(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><b><?php if (!$_smarty_tpl->tpl_vars['usersList']->value){?><?php echo vtranslate('LBL_MY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
&nbsp;<?php }?><?php echo vtranslate($_smarty_tpl->tpl_vars['WIDGET']->value->getTitle(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b></div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['usersList']->value){?>
        <div class="userList">
            <select class="select2 widgetFilter" name="type">
                <option value="<?php echo $_smarty_tpl->tpl_vars['CURRENTUSER']->value->getId();?>
" selected><?php echo vtranslate('LBL_MINE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option>
                <?php  $_smarty_tpl->tpl_vars['USER_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['USER_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['USER_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SHARED_USERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['USER_NAME']->key => $_smarty_tpl->tpl_vars['USER_NAME']->value){
$_smarty_tpl->tpl_vars['USER_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['USER_ID']->value = $_smarty_tpl->tpl_vars['USER_NAME']->key;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['USER_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['USER_NAME']->value;?>
</option>
                <?php } ?>
                <?php  $_smarty_tpl->tpl_vars['GROUP_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['GROUP_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['GROUP_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SHARED_GROUPS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['GROUP_NAME']->key => $_smarty_tpl->tpl_vars['GROUP_NAME']->value){
$_smarty_tpl->tpl_vars['GROUP_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['GROUP_ID']->value = $_smarty_tpl->tpl_vars['GROUP_NAME']->key;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['GROUP_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['GROUP_NAME']->value;?>
</option>
                <?php } ?>
                <option value="all"><?php echo vtranslate('All',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option>
            </select>
        </div>
    <?php }?>
</div>
<div name="history" class="dashboardWidgetContent" style="padding-top:15px;">
    <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/CalendarActivitiesContents.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('WIDGET'=>$_smarty_tpl->tpl_vars['WIDGET']->value), 0);?>

</div>
<div class="widgeticons dashBoardWidgetFooter">
    <div class="footerIcons pull-right">
        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/DashboardFooterIcons.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
</div><?php }} ?>