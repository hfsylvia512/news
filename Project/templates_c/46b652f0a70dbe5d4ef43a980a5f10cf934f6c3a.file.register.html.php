<?php /* Smarty version Smarty-3.1.16, created on 2017-07-22 09:18:07
         compiled from ".\templates\register.html" */ ?>
<?php /*%%SmartyHeaderCode:282965972a7cfa68238-63956282%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46b652f0a70dbe5d4ef43a980a5f10cf934f6c3a' => 
    array (
      0 => '.\\templates\\register.html',
      1 => 1500624405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '282965972a7cfa68238-63956282',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5972a7cfa8f332_83013316',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5972a7cfa8f332_83013316')) {function content_5972a7cfa8f332_83013316($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户注册_新闻视界</title>
<link href="styles/reset.css" rel="stylesheet" type="text/css" media="all" />
<link href="styles/layout.css" rel="stylesheet" type="text/css" media="all" />
<link href="styles/common.css" rel="stylesheet" type="text/css" media="all" />
<script src="scripts/jquery-1.10.0.min.js"></script>
<script>
	function checkUserName(){
		var usernameVal=$('#username').val();
		if(usernameVal == ''){
			$('#form-username').html('注册名必须填写');
			return false;
		}
		$('#form-username').html('可以使用');
	}
	function checkPassword(){
		var passwordVal = $('#password').val();
		if(passwordVal == ''){
			$('#form-password').html('注册密码必须填写');
			return false;
		}
		$('#form-password').html('可以使用');
	}
	//确认密码
	function checkPwd(){
		var passwordVal = $("#password").val();
		var checkPwdVal = $("#checkPwd").val();
		if(checkPwdVal == ""){
			$("#form-checkPwd").html("确认密码不能为空");
			return false;
		}
		if(passwordVal != checkPwdVal){
			$("#form-checkPwd").html('两次密码输入不一致');
			return false;
		}
		$("#form-checkPwd").html('可以用');
	}
	$(function(){
		$('#form-username').html('请输入账号信息');
		$('#form-password').html('请输入账号信息');
		$('#username').blur(function(){
			return checkUserName();
		})
		$('#password').blur(function(){
			return checkPassword();
		})
		$("#checkPwd").blur(function(){
			return checkPwd();
		});
	})
	//验证码看不清换一张
	function changeImg(){
		document.getElementById("myImg").src="image.php?id="+Math.random();
	}
	//表单验证
	function checkReg(){
		if(document.frm.protocol.checked == true){
			if(document.frm.userName.value == ""){
				alert("用户名不能为空");
				document.frm.userName.focus();
				return false;
			}else if(document.frm.password.value==""){
				alert('密码不能为空');
				document.frm.password.focus();
				return false;
			}else if(document.frm.password.value != document.frm.checkPwd.value){
				alert('两次密码必须一致');
				document.frm.checkPwd.focus();
				return false;
			}else if(document.frm.verify.value == ""){
				alert("验证码不能为空！");
				document.frm.verify.focus();
				return false;
			}
			
		}else{
			alert('必须同意协议才可以注册');
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
			<div class="side-center page-title"><span>注册</span></div>
			<div class="side-right login-bar"><a href="login.php" target="_blank">快速登录</a><a href="index.php" target="_blank">返回首页</a></div>
		</div>
	</div>
</div>
<div id="register-wrapper">
	<div id="register-main">
		<div class="progress-bar-input" id="progress-bar"></div>
		<form id="register-form" method="post" action="register.php" name="frm" onsubmit="return checkReg()">
			<ul>
				<li class="clear">
					<span class="register-title side-left">账号:</span>
					<input type="text" name="userName" class="register-input-username side-left" id="username"/>
					<span class="prompt side-left" id="form-username"></span>
				</li>
				<li class="clear">
					<span class="register-title side-left">密码:</span>
					<input type="password" name="password" class="register-input-password side-left" id="password"/>
					<span class="prompt side_left"id="form-password"></span>
				</li>
				<li class="clear">
		          <span class="register-title side-left">确认密码:</span>
		          <input type="password" name="checkPwd" class="register-input-password side-left" id="checkPwd"/>
		          <span class="prompt side_left" id="form-checkPwd">请输入账号信息</span>
		        </li>
				<li class="clear">
					<span class="register-title side-left">验证码:</span>
					<input type="text" name="verify" class="register-input-verify side-left"/>
					<span class="prompt side-left" > <img src="image.php" width="100px" height="40px" onclick="changeImg()" id="myImg" title="看不清换一张" alt="看不清换一张" style="cursor:pointer;"/></span>
				</li>
				<li class="register-protocol">
					<input type="checkbox" name="protocol" checked="checked" value="1"/>我已阅读并同意《新闻视界用户服务条款与隐私保护政策》
				</li>
				<li class="register-button"><input type="submit" value="注册新账号" class="register-submit-button"/></li>
			</ul>
		</form>
	</div>
</div>
</body>
</html>
<?php }} ?>
