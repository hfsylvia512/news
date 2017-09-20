<?php /* Smarty version Smarty-3.1.16, created on 2017-07-26 19:57:39
         compiled from ".\templates\listnews.html" */ ?>
<?php /*%%SmartyHeaderCode:22768597745b11673e3-75881299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a1868f7fb8635c2dc4333bf57f8870fd42751a8' => 
    array (
      0 => '.\\templates\\listnews.html',
      1 => 1501070250,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22768597745b11673e3-75881299',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_597745b118e4e9_40009815',
  'variables' => 
  array (
    'listnews' => 0,
    'v' => 0,
    'totalPage' => 0,
    'currentPage' => 0,
    'articleId' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597745b118e4e9_40009815')) {function content_597745b118e4e9_40009815($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\WWW\\Psd1704\\09news\\day01\\Project\\smarty\\plugins\\modifier.date_format.php';
?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>新闻列表</title>
	<script>
		//修改某一新闻
		   function updateNews(articleId)
      {
    	  window.location = "updatenews.php?articleId="+articleId;
      }
      //删除某一新闻
      function delNews(articleId){
      	window.location = "recycle.php?articleId="+articleId;
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
 $_from = $_smarty_tpl->tpl_vars['listnews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['articleId'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['typeName'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>
			<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['dateandtime'],"Y-m-d H:i:s");?>
</td>
			<td>
				<input type="button" value="修改" onclick="updateNews(<?php echo $_smarty_tpl->tpl_vars['v']->value['articleId'];?>
)">
				<input type="button" value="删除" onclick="delNews(<?php echo $_smarty_tpl->tpl_vars['v']->value['articleId'];?>
)">
			</td>
		</tr>
		<?php } ?>
		<tr>
			<td align="center" colspan="5">
				共<?php echo $_smarty_tpl->tpl_vars['totalPage']->value;?>
页&nbsp;&nbsp;当前显示第<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
页&nbsp;&nbsp;
				<?php if ($_smarty_tpl->tpl_vars['currentPage']->value==1) {?>
				首页&nbsp;&nbsp;上一页
				<?php } else { ?>
					<a href="listnews.php?articleId=<?php echo $_smarty_tpl->tpl_vars['articleId']->value;?>
">首页</a>&nbsp;&nbsp; <a href="listnews.php?articleId=<?php echo $_smarty_tpl->tpl_vars['articleId']->value;?>
&currentPage=<?php echo $_smarty_tpl->tpl_vars['currentPage']->value-1;?>
">上一页</a>
				<?php }?>
				&nbsp;&nbsp;
				<?php if ($_smarty_tpl->tpl_vars['currentPage']->value==$_smarty_tpl->tpl_vars['totalPage']->value) {?>
			 	上一页&nbsp;&nbsp;尾页
			 	<?php } else { ?>
			 	<a href="listnews.php?articleId=<?php echo $_smarty_tpl->tpl_vars['articleId']->value;?>
&currentPage=<?php echo $_smarty_tpl->tpl_vars['currentPage']->value+1;?>
">下一页</a> &nbsp;&nbsp;<a href="listnews.php?articleId=<?php echo $_smarty_tpl->tpl_vars['articleId']->value;?>
&currentPage=<?php echo $_smarty_tpl->tpl_vars['totalPage']->value;?>
">尾页</a>
				<?php }?>
			</td>
		</tr>
	</table>

</body>
</html><?php }} ?>
