<?php /* Smarty version Smarty-3.1.16, created on 2017-08-06 12:49:01
         compiled from ".\templates\newstype.html" */ ?>
<?php /*%%SmartyHeaderCode:148335975b7a756ef77-48086355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f046a6d0adf3d4173ec21d054d8fca224901601e' => 
    array (
      0 => '.\\templates\\newstype.html',
      1 => 1501994940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148335975b7a756ef77-48086355',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5975b7a76edcd1_75559355',
  'variables' => 
  array (
    'typeId' => 0,
    'Nimges' => 0,
    'k' => 0,
    'v' => 0,
    'newsInfo' => 0,
    'currentPage' => 0,
    'totalPage' => 0,
    'i' => 0,
    'top24' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5975b7a76edcd1_75559355')) {function content_5975b7a76edcd1_75559355($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'E:\\WWW\\Psd1704\\09news\\day01\\Project\\smarty\\plugins\\modifier.truncate.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新闻视界_国内新闻</title>
<link type="text/css" rel="stylesheet" media="all" href="styles/reset.css"/>
<link type="text/css" rel="stylesheet" media="all" href="styles/layout.css"/>
<link type="text/css" rel="stylesheet" media="all" href="styles/common.css"/>
<script src="scripts/jquery-1.10.0.min.js"></script>
<script>
  var index=0;
  
  function changImg(){

    $("#focus-image li").fadeOut(300);
    $('#img'+index).fadeIn(300);
    $("#focus-text li").fadeOut(300);
    $("#txt"+index).fadeIn(300);
    $("#focus-num li").removeClass("current");
    $("#num"+index).addClass("current");
    index++;
    index = index>2?0:index;
    window.setTimeout("changImg()",3000);
  }
  $(function(){
      $('#focus-num>li').click(function(){         
          $('#focus-image>li:visible').fadeOut(300);
          $('#focus-image>li:eq('+ $(this).index() + ')').fadeIn(300);
          $("#focus-text li:visible").fadeOut(300);
          $('#focus-text li:eq('+$(this).index()+')').fadeIn(300);
          $(this).addClass('current').siblings().removeClass('current');          
        });
  });
  function changePage(currentPage){
  	 //判断页码必须为整数：正则表达式
  	 if(/^\d+$/.test(currentPage)){
	  //判断页码必须是：1<=页码<总页数
  	window.location = "newsType.php?typeId=<?php echo $_smarty_tpl->tpl_vars['typeId']->value;?>
&currentPage="+currentPage;
    }
  }
</script>
</head>
<body onload="changImg()">
<!-- 网页的头 -->
<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="section clear">
  <div class="side-left-680">
    <div id="focus-wrapper2">
      <ul id="focus-image">
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Nimges']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
        <li id="img<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imagepath'];?>
" alt="" width="680px" height="320px"/></a></li>  
        <?php } ?>    
      </ul>
      <div id="focus-mask"></div>
      <ul id="focus-text">
      <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Nimges']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
        <li id="txt<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></li>
     <?php } ?>
      </ul>
      <ol class="clear" id="focus-num">
       < <li id="num0"class="current">1</li>
        <li id="num1">2</li>
        <li id="num2">3</li> 
      </ol>    
    </div>  
    <div>
      <!-- 每个新闻 -->
      <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['newsInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
      <div class="news-list-item clear">
      <?php if ($_smarty_tpl->tpl_vars['v']->value['imagepath']!='') {?>
        <div class="news-list-item-pic"><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imagepath'];?>
" alt=""/></a></div>
        <?php } else { ?>
          <div class="news-list-item-pic"><a href="#"><img src="images/logo.png" alt=""/></a></div>
        <?php }?>
        <div class="news-list-item-txt">
          <h1><a href="news.php?articleId=<?php echo $_smarty_tpl->tpl_vars['v']->value['articleId'];?>
"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['v']->value['title']);?>
</a></h1>
          <p><?php echo preg_replace('!<[^>]*?>!', ' ', smarty_modifier_truncate($_smarty_tpl->tpl_vars['v']->value['content'],100));?>
</p>
        </div>
      </div>
      <?php } ?>
      <!-- 分页栏 -->
      <div class="page-list clear">
      <?php if ($_smarty_tpl->tpl_vars['currentPage']->value!=1) {?>
        <a href="newstype.php?typeId=<?php echo $_smarty_tpl->tpl_vars['typeId']->value;?>
&currentPage=<?php echo $_smarty_tpl->tpl_vars['currentPage']->value-1;?>
" class="pre">&lt;</a>
      <?php }?>
        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['totalPage']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['totalPage']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
        <a id ="cl<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"href="newstype.php?typeId=<?php echo $_smarty_tpl->tpl_vars['typeId']->value;?>
&currentPage=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
        <?php }} ?>
        <?php if ($_smarty_tpl->tpl_vars['currentPage']->value!=$_smarty_tpl->tpl_vars['totalPage']->value) {?>
        <a href="newstype.php?typeId=<?php echo $_smarty_tpl->tpl_vars['typeId']->value;?>
&currentPage=<?php echo $_smarty_tpl->tpl_vars['currentPage']->value+1;?>
" class="next">&gt;</a>
        <?php }?>
        <input type="text" name="goto-page-num" id="goto-page-num" value="<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
" onblur="changePage(this.value)"/>
      </div>
    </div>
  </div>
  <div class="side-right-300">
    <h3 class="hot-title">24小时排行榜</h3>
    <ol class="list-hot">
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['top24']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['k']->value<3) {?>
      <li class="hot"><span class="top-num num1">0<?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</span><a href="news.php?articleId=<?php echo $_smarty_tpl->tpl_vars['v']->value['articleId'];?>
" target="_blank"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['v']->value['title'],22);?>
</a></li>
    <?php } else { ?>
    <li><span class="top-num"><?php if ($_smarty_tpl->tpl_vars['k']->value<9) {?>0<?php }?><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</span><a href="news.php?articleId=<?php echo $_smarty_tpl->tpl_vars['v']->value['articleId'];?>
" target="_blank"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['v']->value['title'],22);?>
</a></li>
    <?php }?>
    <?php } ?>
        </ol>    
  </div>
</div>

<!-- 网页的脚 -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</body>
</html>



<?php }} ?>
