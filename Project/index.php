<?php 
header('content-type:text/html;charset=utf-8');
include_once 'smarty/Smarty.class.php';
include_once 'dbio/NewsTypes.php';
include_once 'dbio/NewsArticles.php';
include_once 'dbio/FriendLink.php';
session_start();
$smarty = new Smarty();
//导航菜单的分类
$NewsTypes= NewsTypes::fetchAll();

//最新发表的新闻内容
$NewsArticles = NewsArticles::title();

//国内新闻
$NewsInland = NewsArticles::getTop10(9);

//港澳新闻
$Newsindentation = NewsArticles::getTop10(10);

//环球
$Newsround = NewsArticles::getTop10(11);

//点击量
$Newsclick = NewsArticles::click();

//评论数
$Newsreview = NewsArticles::review();
//国际最新消息
$NewsInternation = NewsArticles::internation();
//海外观察
$NewsOverseas = NewsArticles::overseas();
//图像
$NewsImages = NewsArticles::gjTop8();
//友情连接
$Link = FriendLink::link();
//精选图片
$Nimages = NewsArticles::images();

$_SESSION["userMsg"]=isset($_SESSION["userMsg"])?$_SESSION["userMsg"]:"";

$smarty->assign("session",$_SESSION["userMsg"]);
//精选图片
$smarty->assign('Nimages',$Nimages);
//友情连接
$smarty->assign('FriendLink',$Link);
//图像
$smarty->assign('NewsImages',$NewsImages);
//海外观察
$smarty->assign('NewsOverseas',$NewsOverseas);

//国际最新消息
$smarty ->assign('NewsInternation',$NewsInternation);
//评论数
$smarty->assign('Newsreview',$Newsreview );
//点击量
$smarty->assign('Newsclick',$Newsclick);
//环球
$smarty->assign('Newsround',$Newsround);
//港澳新闻
$smarty->assign('Newsindentation',$Newsindentation);
//国内新闻
$smarty->assign('NewsInland',$NewsInland);
//导航菜单的分类
$smarty->assign('NewsTypes',$NewsTypes);
//最新发表的新闻内容
$smarty->assign('NewsArticles',$NewsArticles);

$smarty->display('index.html');