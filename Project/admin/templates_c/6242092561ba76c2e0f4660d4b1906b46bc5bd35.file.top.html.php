<?php /* Smarty version Smarty-3.1.16, created on 2017-08-06 11:43:07
         compiled from ".\templates\top.html" */ ?>
<?php /*%%SmartyHeaderCode:19220597745a8833843-32692598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6242092561ba76c2e0f4660d4b1906b46bc5bd35' => 
    array (
      0 => '.\\templates\\top.html',
      1 => 1500952826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19220597745a8833843-32692598',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_597745a8879d59_82733357',
  'variables' => 
  array (
    'msg' => 0,
    'userName' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597745a8879d59_82733357')) {function content_597745a8879d59_82733357($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="styles/reset.css"/>
	<link rel="stylesheet" type="text/css" href="styles/common.css"/>
	<style type="text/css">
	.top-body{
		background: url(images/top_bg.gif);
	}
	.top-body .subject{
		font-size:36px;
		line-height: 80px;
		color: #fff;	
	}
	.top-body span{
		float:right;
		font-size:14px;
	}
	.top-body b{
		margin-right:10px;
	}
	.top-body a{
		margin-left:10px;
		color:#fff;
	}
	</style>
	<script type="text/javascript">
	  function logout()
	  {
		  if(confirm("是否退出后台管理系统？")){
			  window.parent.location = "success.php?act=logout&rst=1";
		  }
	  }
	</script>
</head>
<body class="top-body">
  <div class="wrap">
    <h1 class="subject">达内教育集团CMS系统V1.0<span><b><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
，<?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
</b>|<a href="javascript:logout()">退出登录</a></span></h1>
  </div>
</body>
</html>







<?php }} ?>
