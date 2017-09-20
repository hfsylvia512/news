<?php /* Smarty version Smarty-3.1.16, created on 2017-07-26 20:50:58
         compiled from ".\templates\listuser.html" */ ?>
<?php /*%%SmartyHeaderCode:2172159789032e0a4f9-62590771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e6dff7cf756cd75e68b74318907f5568a894727' => 
    array (
      0 => '.\\templates\\listuser.html',
      1 => 1501073362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2172159789032e0a4f9-62590771',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userInfo' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59789032e4cb87_41105595',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59789032e4cb87_41105595')) {function content_59789032e4cb87_41105595($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\WWW\\Psd1704\\09news\\day01\\Project\\smarty\\plugins\\modifier.date_format.php';
?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户列表</title>
</head>
<body>
	<table border="1" width="500px" align="center">
		<tr>
			<th>ID</th>
			<th>姓名</th>
			<th>邮箱</th>
			<th>权限</th>
			<th>注册时间</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['userId'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['userName'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['mailBox'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['roleName'];?>
</td>
			<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['dateandtime'],"Y-m-d H:i:s");?>
</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html><?php }} ?>
