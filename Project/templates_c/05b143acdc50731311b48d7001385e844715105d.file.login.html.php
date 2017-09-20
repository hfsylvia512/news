<?php /* Smarty version Smarty-3.1.16, created on 2017-07-21 18:06:05
         compiled from ".\templates\login.html" */ ?>
<?php /*%%SmartyHeaderCode:283595971d20d0eed83-50453022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05b143acdc50731311b48d7001385e844715105d' => 
    array (
      0 => '.\\templates\\login.html',
      1 => 1500628625,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '283595971d20d0eed83-50453022',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5971d20d1dd241_31766200',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5971d20d1dd241_31766200')) {function content_5971d20d1dd241_31766200($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户登录_新闻视界</title>
<link href="styles/reset.css" rel="stylesheet" type="text/css" media="all" />
<link href="styles/layout.css" rel="stylesheet" type="text/css" media="all" />
<link href="styles/common.css" rel="stylesheet" type="text/css" media="all" />
<script>
	function checkLogin(){
		if(document.frm.userName.value ==""){
			alert("用户名必须填写");
			document.frm.userName.focus();
			return false;
		}else if(document.frm.password.value == ""){
			alert("密码必须填写");
			document.frm.password.focus();
			return false;
		}
	}
</script>
</head>
<body>
<div id="header-wrapper">
	<div class="wrapper">
		<div id="header">
			<div class="side-left logo">
				<a href="#" title="换一个角度看新闻">新闻视界</a>
			</div>
			<div class="side-center page-title"><span>登录</span></div>
			<div class="side-right login-bar"><a href="register.php" ">免费注册</a><a href="index.php" ">返回首页</a></div>
		</div>
	</div>
</div>
<div id="login-wrapper">
	<div id="login-main">
		<form action="login.php" method="post" id="login-form" name="frm" onsubmit="return checkLogin()">
		<h1 class="login-title">用户登录</h1>
		<input type="text" class="login-input-username" name="userName" value="请输入登录账号"/>	
		<input type="password" class="login-input-password" name="password"/>
		<div class="login-remmber-me"><span><input type="checkbox" name="remember" checked="checked" value="1"/>&nbsp;下次自动登录</span><a href="#">忘记密码</a></div>	
		<input type="submit" value="登 录" class="login-submit-button"/>		
		<div class="other-login">
			<p>可以使用以下方式登录：</p>
			<ul class="other-login-list clear">
				<li><a href="#" class="qq" title="QQ登录">QQ登录</a></li>
				<li><a href="#" class="weibo" title="微博账号登录">微博账号登录</a></li>
				<li><a href="#" class="baidu" title="百度账号登录">百度账号登录</a></li>
				<li><a href="#" class="renren" title="人人网账号登录">人人网账号登录</a></li>
				<li><a href="#" class="weixin" title="微信账号登录">微信账号登录</a></li>
			</ul>
		</div>
		</form>
	</div>
</div>
</body>
</html>
<?php }} ?>
