<?php /* Smarty version Smarty-3.1.16, created on 2017-08-06 11:33:55
         compiled from ".\templates\login.html" */ ?>
<?php /*%%SmartyHeaderCode:158715977ea4667e9a3-89721088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05b143acdc50731311b48d7001385e844715105d' => 
    array (
      0 => '.\\templates\\login.html',
      1 => 1500945242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158715977ea4667e9a3-89721088',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5977ea467130c3_85973675',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5977ea467130c3_85973675')) {function content_5977ea467130c3_85973675($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>后台管理登陆</title>
    <meta charset="UTF-8">
    <script type="text/javascript">
      function checkLogin()
      {
    	  if(document.frm.userName.value == ""){
    		  alert("请输入用户名！");
    		  document.frm.userName.focus();
    		  return false;
    	  }
    	  else if(document.frm.password.value == ""){
    		  alert("请输入密码！");
    		  document.frm.password.focus();
    		  return false;
    	  }
      }
    </script>
  </head>
  <body>
    <form name="frm" method="post" action="login.php" onsubmit="return checkLogin()">
    <table border="1" align="center">
      <tr>
        <td colspan="2" align="center">
          <font size="6">后台管理系统</font>
        </td>
      </tr>
      <tr>
        <td>登陆名称：</td>
        <td><input type="text" name="userName" size="20"></td>
      </tr>
      <tr>
        <td>登陆密码：</td>
        <td><input type="password" name="password" size="20"></td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <input type="submit" value="登陆">
          &nbsp;&nbsp;&nbsp;
          <input type="reset" value="重置">
        </td>
      </tr>
    </table>
    </form>
  </body>
</html>










<?php }} ?>
