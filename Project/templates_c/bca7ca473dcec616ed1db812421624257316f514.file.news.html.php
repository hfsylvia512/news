<?php /* Smarty version Smarty-3.1.16, created on 2017-08-06 14:09:21
         compiled from ".\templates\news.html" */ ?>
<?php /*%%SmartyHeaderCode:184935972a8a287c306-31559700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bca7ca473dcec616ed1db812421624257316f514' => 
    array (
      0 => '.\\templates\\news.html',
      1 => 1500708130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184935972a8a287c306-31559700',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5972a8a28b6c96_05638557',
  'variables' => 
  array (
    'NewsContent' => 0,
    'articleId' => 0,
    'reviewsCount' => 0,
    'session' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5972a8a28b6c96_05638557')) {function content_5972a8a28b6c96_05638557($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\WWW\\Psd1704\\09news\\day01\\Project\\smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['NewsContent']->value['title'];?>
</title>
<link type="text/css" rel="stylesheet" media="all" href="styles/reset.css"/>
<link type="text/css" rel="stylesheet" media="all" href="styles/layout.css"/>
<link type="text/css" rel="stylesheet" media="all" href="styles/common.css"/>
// <script>
// 	function pubClick(){
// 		document.fr.pub.window.location = "news.php?articleId=<?php echo $_smarty_tpl->tpl_vars['articleId']->value;?>
";
// 	}
// </script>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--导航结束-->

<div class="section">
	<h1 class="article-title"><?php echo $_smarty_tpl->tpl_vars['NewsContent']->value['title'];?>
</h1>
	<div class="clear">
    <div class="side-left-680" id="article">    
      <div class="article-info"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['NewsContent']->value['dateandtime'],"Y年m月d日 H:i");?>
<a href="#">评论(<?php echo $_smarty_tpl->tpl_vars['reviewsCount']->value;?>
)</a></div>
      <div class="article-body">
        <?php echo $_smarty_tpl->tpl_vars['NewsContent']->value['content'];?>

      </div>
      <div id="comment">
        <p class="comment-count"><a href="#">已有<span><?php echo $_smarty_tpl->tpl_vars['reviewsCount']->value;?>
</span>条评论，共<span><?php echo $_smarty_tpl->tpl_vars['NewsContent']->value['hints'];?>
人</span>参与</a></p>
		<form action="news.php?articleId=<?php echo $_smarty_tpl->tpl_vars['articleId']->value;?>
" method="post" name="fr">
        <textarea class="comment-content">请输入评论内容</textarea>
      
        </form>
        <div class="comment-user-cont clear">		
          <form action="login.php" method="post"name="frm" onsubmit="return checkLogin()">

        <?php if ($_smarty_tpl->tpl_vars['session']->value==null) {?>
      
          <div class="comment-user-username"><input type="text" name="username"     class="comment-input" value="请输入账号"/></div>
          <div class="comment-user-password"><input type="password" name="password" class="comment-input" value="请输入密码"/></div>
		<input type="submit" class="comment-user-link" value="登录" />
          <div class="comment-user-link"><input type="checkbox" name="remember" checked="checked" value="1"/> 下次自动登录<a href="#">注册</a><a href="#">忘记密码？</a></div>
         </form>
        <?php } else { ?>   

          <div class="comment-user-logined">
       
            <span><a href="#"><?php echo $_smarty_tpl->tpl_vars['session']->value['userName'];?>
</a></span>
            <span><a href="javascript:logout()">退出</a></span>
        
            
          </div>
          <?php }?>
		<form action="news.php?articleId=<?php echo $_smarty_tpl->tpl_vars['articleId']->value;?>
" method="post" name="fr">
			<input type="submit" value="发布" class="comment-publishing-btn" name="pub"  onclick="pubClick()"/> 
          <!-- <a href="#" class="comment-publishing-btn">发布</a> -->
         </form>
        </div>
        
      </div>
    </div>
	    <div class="side-right-300">
      <h3 class="hot-title">24小时排行榜</h3>
      <ol class="list-hot">
        <li class="hot"><span class="top-num num1">01</span><a href="http://news.sina.com.cn/c/2015-03-01/021731553483.shtml" target="_blank">广东:遇台风黄色预警等四种信号即可自行停课</a></li>
        <li class="hot"><span class="top-num num2">02</span><a href="http://news.sina.com.cn/c/2015-03-01/020931553472.shtml" target="_blank">上海迪斯尼回应单日票价500元:仍在研究</a></li>
        <li class="hot"><span class="top-num num3">03</span><a href="http://news.sina.com.cn/c/2015-03-01/020431553512.shtml" target="_blank">西安市环保局原局长等5人涉嫌受贿被捕</a></li>
        <li><span class="top-num">04</span><a href="http://news.sina.com.cn/c/2015-03-01/005931553346.shtml" target="_blank">北京国土局:暂不发放新版房产证 </a></li>
        <li><span class="top-num">05</span><a href="http://news.sina.com.cn/c/2015-02-28/233331553297.shtml" target="_blank">江西为3.36万名农民工追讨工资及赔偿金4.79亿</a></li>
        <li><span class="top-num">06</span><a href="http://news.sina.com.cn/c/2015-02-28/230931553282.shtml" target="_blank">江西乐平煤矿煤与瓦斯突出事故已确认4矿工被</a></li>
        <li><span class="top-num">07</span><a href="http://news.sina.com.cn/c/2015-02-28/225631553279.shtml" target="_blank">南昌符合标准校车仅1辆获标牌 安全隐患巨大</a></li>
        <li><span class="top-num">08</span><a href="http://news.sina.com.cn/c/2015-02-28/211631553192.shtml" target="_blank">广东化州政协副主席李沛涉嫌严重违纪被调查</a></li>
        <li><span class="top-num">09</span><a href="http://news.sina.com.cn/c/2015-02-28/202131553113.shtml" target="_blank">青海狱警违规为17名罪犯办理减刑一审获刑18年</a></li>
        <li><span class="top-num">10</span><a href="http://news.sina.com.cn/c/2015-02-28/200431553106.shtml" target="_blank">湖北黄冈人大常委会主任龙福清等2人被调查</a></li>
      </ol> 	
		
		</div>

	</div>
</div>
<!--版权区 start-->
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--版权区 end-->

</body>
</html>
<?php }} ?>
