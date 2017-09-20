<?php /* Smarty version Smarty-3.1.16, created on 2017-08-06 11:33:49
         compiled from ".\templates\success.html" */ ?>
<?php /*%%SmartyHeaderCode:125745977ea42f20c66-08329454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b42a513eaff292caaee9bdceabe8cd22655c0df5' => 
    array (
      0 => '.\\templates\\success.html',
      1 => 1500946846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125745977ea42f20c66-08329454',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5977ea430bd319_87426553',
  'variables' => 
  array (
    'jumpUrl' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5977ea430bd319_87426553')) {function content_5977ea430bd319_87426553($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>系统提示信息</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="../styles/reset.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../styles/layout.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../styles/common.css" rel="stylesheet" type="text/css" media="all" />
	<style type="text/css">
	  body{
	    text-align:center;
		font-size:20px;
	  }
	  .mainDiv{
		width:600px;
		border:1px solid gray;
		margin:100px auto 0px auto;
	  }
	  .headerDiv{
	    text-align:left;
		border-bottom:1px solid gray;
		height:25px;
		line-height:25px;
		vertical-align:middle;
		background-color:#F5F5F5;
	  }
	</style>
	<script type="text/javascript">
	  var index = 5;//时间
	  function changeTime()
	  {
		  document.getElementById("timeSpan").innerHTML = index;
		  index--;
		  if(index < 0){
			  window.location = "<?php echo $_smarty_tpl->tpl_vars['jumpUrl']->value;?>
";
		  }
		  else{
			  window.setTimeout("changeTime()",1000);
		  }
	  }
	</script>
  </head>
  <body onload="changeTime()">
    <div class="mainDiv">
	  <div class="headerDiv"><b>系统提示信息</b></div>
	  <div>
	     <br/><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
 页面将在 <span id="timeSpan">5</span> 秒钟内自动跳转！<br/>
		 <br/>如果没有自动跳转，<a href="<?php echo $_smarty_tpl->tpl_vars['jumpUrl']->value;?>
">请点击这里</a>。<br/><br/>
	  </div>
	</div>
  </body>
</html>




<?php }} ?>
