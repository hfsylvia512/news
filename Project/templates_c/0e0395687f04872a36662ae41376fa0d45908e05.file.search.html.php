<?php /* Smarty version Smarty-3.1.16, created on 2017-08-02 21:09:56
         compiled from ".\templates\search.html" */ ?>
<?php /*%%SmartyHeaderCode:169035975d601303799-26399355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e0395687f04872a36662ae41376fa0d45908e05' => 
    array (
      0 => '.\\templates\\search.html',
      1 => 1501679393,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169035975d601303799-26399355',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5975d601326a14_65695701',
  'variables' => 
  array (
    'keyword' => 0,
    'search' => 0,
    'v' => 0,
    'totalPage' => 0,
    'currentPage' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5975d601326a14_65695701')) {function content_5975d601326a14_65695701($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'E:\\WWW\\Psd1704\\09news\\day01\\Project\\smarty\\plugins\\modifier.truncate.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新闻视界_国内新闻</title>
<link type="text/css" rel="stylesheet" media="all" href="styles/reset.css"/>
<link type="text/css" rel="stylesheet" media="all" href="styles/layout.css"/>
<link type="text/css" rel="stylesheet" media="all" href="styles/common.css"/>
<script>
	//文本框失去焦点，进行翻页
	function changePage(currentPage){
		if(!(/^\d+$/.test(currentPage))){
			alert("只能是数字");
			document.goto_page_num.focus();
			return false;
		}else if(1 <= currentPage ){
		window.location = "search.php?keyword=<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
&currentPage="+currentPage;
		}
	}
</script>
</head>
<body>
<!-- 通用顶部导航开始-->
<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--导航结束-->
<div class="section clear">
	<div class="side-left-680">
			
		<div>
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['search']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
			<div class="news-list-item clear">
			<?php if ($_smarty_tpl->tpl_vars['v']->value['imagepath']=='') {?>
				<div class="news-list-item-pic"><a href="news.php?articleId=<?php echo $_smarty_tpl->tpl_vars['v']->value['articleId'];?>
"><img src="images/logo.png" alt=""/></a></div>
			<?php } else { ?>
				<div class="news-list-item-pic"><a href="news.php?articleId=<?php echo $_smarty_tpl->tpl_vars['v']->value['articleId'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imagepath'];?>
" alt=""/></a></div>
			<?php }?>
				<div class="news-list-item-txt">
					<h1><a href="news.php?articleId=<?php echo $_smarty_tpl->tpl_vars['v']->value['articleId'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></h1>
					<p><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['v']->value['content']),100);?>
</p>
				</div>
			</div>
		<?php } ?>			
			<div class="page-list clear">
			共<?php echo $_smarty_tpl->tpl_vars['totalPage']->value;?>
页
			<!-- 上一页 -->
			<?php if ($_smarty_tpl->tpl_vars['currentPage']->value==1) {?>
			首页&nbsp;&nbsp;上一页
			<?php } else { ?>
				<a href="search.php?keyword=<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
&currentPage=1">首页</a>
				<a href="search.php?keyword=<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
&currentPage=<?php echo $_smarty_tpl->tpl_vars['currentPage']->value-1;?>
" class="pre">上一页</a>
			
			<?php }?>
			<!-- 数字页码 -->
			<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['totalPage']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['totalPage']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
				<a href="search.php?keyword=<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
&currentPage=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
</a>
			<?php }} ?>
			<?php if ($_smarty_tpl->tpl_vars['currentPage']->value==$_smarty_tpl->tpl_vars['totalPage']->value) {?>
			下一页&nbsp;&nbsp;尾页
			<?php } else { ?>
				<a href="search.php?keyword=<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
&currentPage=<?php echo $_smarty_tpl->tpl_vars['currentPage']->value+1;?>
" class="next">下一页</a>
				<a href="search.php?keyword=<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
&currentPage=<?php echo $_smarty_tpl->tpl_vars['totalPage']->value;?>
">尾页</a>
			
			<?php }?>
				<input type="text" name="goto_page_num" id="goto-page-num" value="<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
" onblur="changePage(this.value)"/>
			
			</div>
	  </div>
	</div>
</div>
<!--版权区 start-->
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--版权区 end-->

</body>
</html>
<?php }} ?>
