<?php /* Smarty version Smarty-3.1.16, created on 2017-07-26 20:18:00
         compiled from ".\templates\recycleNews.html" */ ?>
<?php /*%%SmartyHeaderCode:147725978765d81da78-54069507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4094b4d6ef5b70551466f70eaef386b3634befa' => 
    array (
      0 => '.\\templates\\recycleNews.html',
      1 => 1501071476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147725978765d81da78-54069507',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5978765d840cf2_49995778',
  'variables' => 
  array (
    'delnews' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5978765d840cf2_49995778')) {function content_5978765d840cf2_49995778($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\WWW\\Psd1704\\09news\\day01\\Project\\smarty\\plugins\\modifier.date_format.php';
?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>回收列表</title>
	<script>
		function recycle(articleId){
			window.location = "remove.php?articleId="+articleId;
		}
	</script>
</head>
<body>
	<table border="1" width="900px" align="center">
		<tr>
			<th>编号</th>
			<th>分类名称</th>
			<th>新闻标题</th>
			<th>发布时间</th>
			<th>操作</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['delnews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<tr>
			<th><?php echo $_smarty_tpl->tpl_vars['v']->value['articleId'];?>
</th>
			<th><?php echo $_smarty_tpl->tpl_vars['v']->value['typeName'];?>
</th>
			<th><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</th>
			<th><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['dateandtime'],"Y-m-d H:i:s");?>
</th>
			<th>
				<input type="button" value="回收" onclick="recycle(<?php echo $_smarty_tpl->tpl_vars['v']->value['articleId'];?>
)">
			</th>
		</tr>
		<?php } ?>
	</table>

</body>
</html><?php }} ?>
