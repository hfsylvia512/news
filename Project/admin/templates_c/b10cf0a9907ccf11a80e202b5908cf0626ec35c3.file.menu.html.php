<?php /* Smarty version Smarty-3.1.16, created on 2017-08-06 11:43:07
         compiled from ".\templates\menu.html" */ ?>
<?php /*%%SmartyHeaderCode:4315597745a8899160-49625735%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b10cf0a9907ccf11a80e202b5908cf0626ec35c3' => 
    array (
      0 => '.\\templates\\menu.html',
      1 => 1501073434,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4315597745a8899160-49625735',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_597745a88f2ef2_47636573',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597745a88f2ef2_47636573')) {function content_597745a88f2ef2_47636573($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="styles/reset.css"/>
  <link rel="stylesheet" type="text/css" href="styles/common.css"/>
  <style type="text/css">
    html,body{
      height: 100%;
    }
    body{
      border-right: 3px solid #055992;
      background-color:#1262B7;
    }
    #nav-tree dl {
      margin-bottom:5px;
      padding-bottom: 5px;
      border-bottom:1px dotted #fff;
    }
    #nav-tree dt {
      position: relative;
      padding-left: 50px;
      margin-bottom: 8px;
      line-height: 26px;
      height: 24px;      
      overflow: hidden;
      cursor: pointer;
      color: #fff;
      font-weight: bold;
      background: url(images/nav-tree-background.png) no-repeat right -255px;
    }
    #nav-tree dd {      
      padding-left: 50px;
      line-height: 28px;
      
    }
    #nav-tree dd a{
      color: #fff;      
    }
    span.icon {
      position: absolute;
      left: 20px;
      top: 0;
      width: 28px;
      height: 24px;
      overflow: hidden;
      background-image: url(images/nav-tree-background.png);
    }
    span.user {
      background-position: 0 0;
    }
    span.role {
      background-position: 0 -24px;
    }
    span.catelog {
      background-position: 0 -48px;
    }
    span.article {
      background-position: 0 -72px;
    }
    span.member {
      background-position: 0 -96px;
    }
    span.ad {
      background-position: 0 -120px;
    }
    span.friendlink {
      background-position: 0 -144px;
    }
    span.database {
      background-position: 0 -168px;
    }
    span.system {
      background-position: 0 -192px;
    }
    dd{
    display:none;
    }
  </style>
  <script type="text/javascript" src="../scripts/jquery-1.10.0.min.js"></script>
  <script type="text/javascript">
    function hello(aaa)
    {
      $(aaa).nextAll().toggle(500);
    }
  </script>
</head>
<body>
  <div class="wrap">
    <div id="nav-tree">
      <dl>
        <dt onclick="hello(this)"><span class="icon article"></span>新闻管理</dt>
        <dd><a href="addnews.php" target="mainFrame">发布新闻</a></dd>
        <dd><a href="listnews.php" target="mainFrame">新闻列表</a></dd>
        <dd><a href="recycleNews.php" target="mainFrame">回收站</a></dd>
      </dl>    
      <dl>
        <dt onclick="hello(this)"><span class="icon user"></span>用户管理</dt>
        <dd><a href="listuser.php" target="mainFrame">用户列表</a></dd>
        <dd><a href="#">删除会员</a></dd>
        <dd><a href="#">密码重置</a></dd>
      </dl>
      <dl>
        <dt onclick="hello(this)"><span class="icon role"></span>角色管理</dt>
        <dd><a href="#">成员管理</a></dd>
        <dd><a href="#">权限管理</a></dd>          
      </dl>
      <dl>
        <dt onclick="hello(this)"><span class="icon catelog"></span>分类管理</dt>
        <dd><a href="listtype.php" target="mainFrame">分类列表</a></dd>
        <dd><a href="addtype.php" target="mainFrame">添加分类</a></dd>
      </dl>

      <dl>
        <dt onclick="hello(this)"><span class="icon member"></span>会员管理</dt>
        <dd><a href="#">会员列表</a></dd>
        <dd><a href="#">删除会员</a></dd>
      </dl>
      <dl>
        <dt onclick="hello(this)"><span class="icon ad"></span>广告管理</dt>
        <dd><a href="#">发布广告</a></dd>
        <dd><a href="#">广告列表</a></dd>
      </dl>
      <dl>
        <dt onclick="hello(this)"><span class="icon friendlink"></span>友链管理</dt>
        <dd><a href="#">添加友链</a></dd>
        <dd><a href="#">友链列表</a></dd>
      </dl>
      <dl>
        <dt onclick="hello(this)"><span class="icon database"></span>数据库管理</dt>
        <dd><a href="#">数据库备份</a></dd>
        <dd><a href="#">数据库还原</a></dd>
      </dl>
      <dl>
        <dt onclick="hello(this)"><span class="icon system"></span>系统管理</dt>
        <dd><a href="#">网站设置</a></dd>
        <dd><a href="#">基本设置</a></dd>
      </dl>
    </div>
  </div>
</body>
</html><?php }} ?>
