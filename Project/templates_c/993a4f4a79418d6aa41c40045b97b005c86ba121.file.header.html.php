<?php /* Smarty version Smarty-3.1.16, created on 2017-08-06 12:07:05
         compiled from ".\templates\header.html" */ ?>
<?php /*%%SmartyHeaderCode:316925971ce9d51fd39-88249530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '993a4f4a79418d6aa41c40045b97b005c86ba121' => 
    array (
      0 => '.\\templates\\header.html',
      1 => 1501992419,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '316925971ce9d51fd39-88249530',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5971ce9d5c3e57_57357654',
  'variables' => 
  array (
    'session' => 0,
    'NewsTypes' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5971ce9d5c3e57_57357654')) {function content_5971ce9d5c3e57_57357654($_smarty_tpl) {?><script>
	//退出登录  如果确定退出就是只能是退出
	function logout(){
		if(confirm('是否退出登录?')){
			window.location = "success.php?act=logout&rst=1";
		}
	}
</script>
<!-- 通用顶部导航开始-->
<div id="top-navi-wrap">
	<div class="clearfix" id="top-navi">
		<div class="side-left">
			<a href="#">巴西世界杯一再爆冷 卫冕冠军西班牙出局</a>
			<a href="#">瑞士人为啥最幸福</a>　
			<a href="#">中国病人庞麦郎</a>
		</div>
		<div class="side-right">
		<?php if ($_smarty_tpl->tpl_vars['session']->value==null) {?>
			<a href="login.php" target="_blank" class="top-nav-login-title">登录</a>
		<?php }?>
			<div class="top-nav-select-title">
		<?php if ($_smarty_tpl->tpl_vars['session']->value==null) {?>
				<a href="register.php" target="_blank">免费注册</a>
		<?php } else { ?>
				<span>您好，<a href="#" class="current-user"><?php echo $_smarty_tpl->tpl_vars['session']->value['userName'];?>
</a></span>
				<a href="javascript:logout()">退出</a>
		<?php }?>
			</div>
		</div>
	</div>
</div>
<!-- 通用顶部导航结束 -->
<!--header start-->
<div class="clear" id="header">
		<div id="logo"><a href="#" title="换一个角度看新闻"></a></div>
		<div id="search-bar">
			<form name="search-form" action="" method="get">
				<input type="text" name="keywords" id="keywords" value="党报连发治军铁腕新政"/>
				<input type="submit" value="" id="search-submit-button"/>
			</form>
		</div>
</div>
<!--header end-->
<!--导航开始-->
<div id="navigation">
	<ul class="clear">
		<li><a href="index.php" target="_blank">首页</a></li>
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['NewsTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<li><a href="newsType.php?typeId=<?php echo $_smarty_tpl->tpl_vars['v']->value['typeId'];?>
" ><?php echo $_smarty_tpl->tpl_vars['v']->value['typeName'];?>
</a></li>
		<?php } ?>
	</ul>
</div>
<!--导航结束--><?php }} ?>
