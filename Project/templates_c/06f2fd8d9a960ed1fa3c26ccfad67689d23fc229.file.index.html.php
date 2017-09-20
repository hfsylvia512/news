<?php /* Smarty version Smarty-3.1.16, created on 2017-08-06 11:58:09
         compiled from ".\templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:168955971ce9b310015-54044692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06f2fd8d9a960ed1fa3c26ccfad67689d23fc229' => 
    array (
      0 => '.\\templates\\index.html',
      1 => 1500687594,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168955971ce9b310015-54044692',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5971ce9d2ba827_69107397',
  'variables' => 
  array (
    'Nimages' => 0,
    'k' => 0,
    'v' => 0,
    'NewsArticles' => 0,
    'NewsInland' => 0,
    'Newsindentation' => 0,
    'Newsclick' => 0,
    'Newsreview' => 0,
    'NewsInternation' => 0,
    'Newsround' => 0,
    'NewsOverseas' => 0,
    'NewsImages' => 0,
    'FriendLink' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5971ce9d2ba827_69107397')) {function content_5971ce9d2ba827_69107397($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'E:\\WWW\\Psd1704\\09news\\day01\\Project\\smarty\\plugins\\modifier.truncate.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>首页_新闻视界</title>
<link href="styles/reset.css" rel="stylesheet" type="text/css" media="all" />
<link href="styles/layout.css" rel="stylesheet" type="text/css" media="all" />
<link href="styles/common.css" rel="stylesheet" type="text/css" media="all" />
<script src="scripts/jquery-1.10.0.min.js"></script>
<script>
	var index=0;
	function changImg(){
		$("#focus-image li").fadeOut(300);
		$("#img"+index).fadeIn(300);
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
	function showph(id){
		if(id == 1){
			document.getElementById('ol1').style.display = '';
			document.getElementById('ol2').style.display = 'none';
			document.getElementById('div1').style.borderBottom='2px solid #900';
			document.getElementById('div2').style.borderBottom='0px solid #900';
		}else{
			document.getElementById('ol1').style.display = 'none';
			document.getElementById('ol2').style.display = '';
			document.getElementById('div1').style.borderBottom='0px solid #900';
			document.getElementById('div2').style.borderBottom='2px solid #900';
		}
	}
</script>
</head>
<body onload="changImg()">
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--头条新闻开始图片轮播-->
<div class="section clear">
	<div class="side-left" id="focus-wrapper">
    <!-- 轮播的图片 -->
    <ul id="focus-image">
      <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Nimages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
      <li id="img<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><a href="news.php?articleId=<?php echo $_smarty_tpl->tpl_vars['v']->value['articleId'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imagepath'];?>
" width="600" height="320" alt=""/></a></li>
      <?php } ?>
    </ul>
    <div id="focus-mask"></div>
    <!-- 轮播的新闻标题 -->
    <ul id="focus-text">
      <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Nimages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
      <li id="txt<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><a href="news.php?articleId=<?php echo $_smarty_tpl->tpl_vars['v']->value['articleId'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></li>
      <?php } ?>
    </ul>
    <!-- 轮播的圆点 -->
    <ol class="clear" id="focus-num">
      <li id="num0" class="current">1</li>
      <li id="num1">2</li>
      <li id="num2">3</li>
    </ol>    
  </div>
  <!--头条新闻开始-->
  
	<div class="side-right" id="recommend">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['NewsArticles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<h1 class="headline" style="text-align:left;">
			<a target="_blank" href="news.php?articleId=<?php echo $_smarty_tpl->tpl_vars['v']->value['articleId'];?>
">
				<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['v']->value['title'],22);?>

			</a></h1>
		<?php } ?>
		
	</div>
</div>
<!--头条新闻结束-->
<!--国内新闻 start-->
<div class="section clear">
	<div class="section-title-wrapper">
		<a href="#" class="section-title-name section-title-china">国内新闻</a>
	</div>
	<div class="side-left">
		<div class="part-title">
			<div class="title-name">
				<a href="#">内地新闻</a>
			</div>
		</div>
		<ul class="section-part-list">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['NewsInland']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
			<li><a href="news.php?articleId=<?php echo $_smarty_tpl->tpl_vars['v']->value['articleId'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></li>
		<?php } ?>
			
        </ul>
	</div>
	<div class="side-center">
		<div class="part-title">
			<div class="title-name">
				<a href="#">港澳台新闻</a>
			</div>
		</div>
		<ul class="section-part-list">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Newsindentation']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
			<li><a href="news.php?articleId=<?php echo $_smarty_tpl->tpl_vars['v']->value['articleId'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></li>
		<?php } ?>
	
        </ul>	
	</div>
	<div class="side-right">
		<div class="part-title">
			<div onmouseover="showph(1)" id="div1" class="title-name title-name-hover">
				<a href="#">点击量排行</a>
			</div>
			<div onmouseover="showph(2)" id="div2" class="title-name title-name-no-border">
				<a href="#">评论数排行</a>
			</div>
		</div>
		<!-- 点击量排行 -->
		<ol id="ol1" class="section-part-list-with-num">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Newsclick']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
			<li><span class="top-num num<?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
"><?php if ($_smarty_tpl->tpl_vars['k']->value<9) {?>0<?php }?><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</span><a href="news.php?articleId=<?php echo $_smarty_tpl->tpl_vars['v']->value['articleId'];?>
" target="_blank"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['v']->value['title'],20);?>
</a></li>
		<?php } ?>
			
        </ol>	
        <!-- 评论数排行 -->
        <ol id="ol2" class="section-part-list-with-num" style="display:none;">
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Newsreview']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
			<li><span class="top-num num<?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
"><?php if ($_smarty_tpl->tpl_vars['k']->value<9) {?>0<?php }?><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</span><a href="news.php?articleId=<?php echo $_smarty_tpl->tpl_vars['v']->value['articleId'];?>
" target="_blank"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['v']->value['title'],21);?>
</a></li>
		<?php } ?>
			
        </ol>
	</div>
</div>
<!--国内新闻 end-->
<!--国际新闻 start-->
<div class="section clear">
	<div class="section-title-wrapper">
		<a href="#" class="section-title-name section-title-world">国际新闻</a>
	</div>
	<div class="side-left">
		<div class="part-title">
			<div class="title-name">
				<a href="#">最新消息</a>
			</div>
		</div>
		<ul class="section-part-list">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['NewsInternation']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
			<li><a href="news.php?articleId=<?php echo $_smarty_tpl->tpl_vars['v']->value['articleId'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></li>
		
		<?php } ?>	
        </ul>
	</div>
	<div class="side-center">
		<div class="part-title">
			<div class="title-name">
				<a href="#">环球视野</a>
			</div>
		</div>
		<ul class="section-part-list">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Newsround']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		
			<li><a href="news.php?articleId=<?php echo $_smarty_tpl->tpl_vars['v']->value['articleId'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></li>
		<?php } ?>
		
	
        </ul>	
	</div>
	<div class="side-right">
		<div class="part-title">
			<div class="title-name">
				<a href="#"><em class="icon1">海</em>外观察</a>
			</div>			
		</div>
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['NewsOverseas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
			<div class="pic-info clear">
			<div class="pic"><a href="news.php?articleId=<?php echo $_smarty_tpl->tpl_vars['v']->value['articleId'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imagepath'];?>
" alt=""/></a></div>
			<div class="txt"> <a href="news.php?articleId=<?php echo $_smarty_tpl->tpl_vars['v']->value['articleId'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></div>
		</div>
		<?php } ?>	
	</div>
</div>

<!--国际新闻 end-->
<!--娱乐新闻 start-->
<div class="section">
	<div class="section-title-wrapper">
		<a href="#" class="section-title-name section-title-world">国内新闻</a>
	</div>
	<div class="clear" id="ent-image-lists">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['NewsImages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
			<div class="ent-image-item">
			<a href="news.php?articleId=<?php echo $_smarty_tpl->tpl_vars['v']->value['articleId'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imagepath'];?>
" alt="" width="220" height="144"/></a>
			<p><a href="news.php?articleId=<?php echo $_smarty_tpl->tpl_vars['v']->value['articleId'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['v']->value['title'],20);?>
</a></p>
	  </div>
		<?php } ?>
		
	

	</div>
</div>
<!--娱乐新闻 end-->
<!--友情链接 start-->
<div class="section">
	<h4 class="friendlink-hr"><span class="friendlink">友情链接</span></h4>
	<div class="friendlink-cont">
		
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['FriendLink']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['k']->value%15==0) {?>
					<p>
				<?php }?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['linkUrl'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['linkName'];?>
</a> 
				<?php if ($_smarty_tpl->tpl_vars['k']->value%15!=14) {?>
					| 
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['k']->value%15==14) {?>	
					</p>
				<?php }?>
			<?php } ?>
		
	</div>
</div>
<!--友情链接 end-->
<?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</body>
</html>
<?php }} ?>
