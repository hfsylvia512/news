<?php /* Smarty version Smarty-3.1.16, created on 2017-07-26 17:23:54
         compiled from ".\templates\updatenews.html" */ ?>
<?php /*%%SmartyHeaderCode:5742597849f1aa07f5-31958981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ce21bdac19a5f5a76b1719de25318b4ad7c046a' => 
    array (
      0 => '.\\templates\\updatenews.html',
      1 => 1501061025,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5742597849f1aa07f5-31958981',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_597849f1ae6d04_14486654',
  'variables' => 
  array (
    'articleId' => 0,
    'updateNews' => 0,
    'NewsTypes' => 0,
    'v' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597849f1ae6d04_14486654')) {function content_597849f1ae6d04_14486654($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>新闻发布</title>
    <meta charset="UTF-8">
    <script src="../scripts/jquery-1.10.0.min.js"></script>
    <script src="../kindeditor/kindeditor.js"></script>
    <script>
      var editor;//编辑对象
      //加载编辑器
      KindEditor.ready(function(e){
        //创建编辑器
        editor = e.create("[name=content]",{
              width:"1100px",
              height:"400px"
              
        });
      });
      //验证
      function newsAdd(){
        if(document.frm.title.value == ""){
          alert("请输入标题");
          document.frm.title.focus();
          return false;
        }else if(editor.html() == ""){
          alert("请输入新闻内容");
          editor.focus();
          return false;
        }else{
          document.frm.content.value = editor.html();
          //提交表单
          document.frm.submit();
        }
      }
    </script>
  </head>
  <body>
      <form action="updatenews.php?articleId=<?php echo $_smarty_tpl->tpl_vars['articleId']->value;?>
" method="post" name="frm" onsubmit="return newsAdd()" enctype="multipart/form-data">
        <table border="1" align="center">
          <tr>
            <td>标题</td>
            <td><input type="text" name="title" size="50" value="<?php echo $_smarty_tpl->tpl_vars['updateNews']->value['title'];?>
"></td>
          </tr>
          <tr>
            <td>分类</td>
            <td width="200px">
              <select name="typeId" >
              <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['NewsTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
              <?php if ($_smarty_tpl->tpl_vars['v']->value['level']==1) {?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['typeId'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['typeName'];?>
</option>
                <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['NewsTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['vv']->value['pid']==$_smarty_tpl->tpl_vars['v']->value['typeId']) {?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['typeId'];?>
">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vv']->value['typeName'];?>
</option>
                <?php }?>
                <?php } ?>
              <?php }?>
              <?php } ?>
              </select>
            </td>
          </tr>
          
          <tr>
            <td>内容</td>
            <td><textarea name="content" ><?php echo $_smarty_tpl->tpl_vars['updateNews']->value['content'];?>
</textarea></td>
          </tr>
          <tr>
            <td>
              <td colspan="2" align="center">
          <input type="submit" value="修改新闻">
          &nbsp;&nbsp;&nbsp;
          <input type="reset" value="全部重写">
            </td>
          </tr>
        </table>
      </form>
  </body>
</html>
<script>
  document.frm.typeId.value = "<?php echo $_smarty_tpl->tpl_vars['updateNews']->value['typeId'];?>
"
</script><?php }} ?>
