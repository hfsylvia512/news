<?php /* Smarty version Smarty-3.1.16, created on 2017-07-26 18:52:59
         compiled from ".\templates\listtype.html" */ ?>
<?php /*%%SmartyHeaderCode:881659783ed773b191-81701912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07ccc215e5423f723427300dea9a685e5c22bd9a' => 
    array (
      0 => '.\\templates\\listtype.html',
      1 => 1501057610,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '881659783ed773b191-81701912',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59783ed77c7bb8_93405080',
  'variables' => 
  array (
    'NewsTypes' => 0,
    'v' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59783ed77c7bb8_93405080')) {function content_59783ed77c7bb8_93405080($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>分类列表</title>
    <meta charset="UTF-8">
    <script>
    // 删除某一分类
    function delType(typeId){
      if(confirm("是否删除该分类?")){
        window.location = "listtype.php?typeId="+typeId;
      }
    }
    </script>
  </head>
  <body>
    <table border="1" align="center" width="600">
      <tr>
        <td>分类编号</td>
        <td>分类名称</td>
        <td>操作</td>
      </tr>
      <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['NewsTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
      <!-- 显示所有的一级分类 -->
      <?php if ($_smarty_tpl->tpl_vars['v']->value['level']==1) {?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['typeId'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['typeName'];?>
</td>

        <td><input type="button" value="删除" onclick="delType(<?php echo $_smarty_tpl->tpl_vars['v']->value['typeId'];?>
)"></td>
      </tr>
      <!-- 显示当前分类所有子菜单 -->
      <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['NewsTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>
      <!-- 当前分类，是上边那个分类是子菜单 -->
        <?php if ($_smarty_tpl->tpl_vars['vv']->value['pid']==$_smarty_tpl->tpl_vars['v']->value['typeId']) {?>
          <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['vv']->value['typeId'];?>
</td>
        <td>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vv']->value['typeName'];?>
</td>

        <td><input type="button" value="删除" onclick="delType(<?php echo $_smarty_tpl->tpl_vars['vv']->value['typeId'];?>
)"></td>
      </tr>
        <?php }?>
      <?php } ?>
      <?php }?>
      <?php } ?>
    </table>
  </body>
</html><?php }} ?>
