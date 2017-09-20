<?php
header("content-type:text/html;charset=utf-8");
include_once 'smarty/Smarty.class.php';
include_once 'dbio/NewsTypes.php';
include_once 'dbio/NewsArticles.php';
$smarty = new Smarty();
session_start();
//获得url中的参数
$typeId = $_GET['typeId'];
//当前页码
$currentPage = isset($_GET["currentPage"])?$_GET["currentPage"]:1;
//echo $currentPage;exit;
//var_dump($typeId);
//echo $typeId;exit;
//导航菜单的分类
$NewsTypes= NewsTypes::fetchAll();
//图片
$Nimges = NewsTypes::images($typeId);
//查询当前分类下的所有新闻
$arr=NewsArticles::getNewsByTypeId($typeId,$currentPage);
//总页数
$totalPage = $arr[0];
// echo $totalPage;exit;
$newsInfo = $arr[1];
//24小时排行
$top24 = NewsArticles::getTop24();
//var_dump($newsInfo);
//上一页
//$prev = $currentPage-1;
//下一页
//$next = $currentPage+1;
$smarty->assign("top24",$top24);
$smarty->assign('currentPage',$currentPage);
//$smarty->assign('next',$next);
//$smarty->assign('prev',$prev);
$smarty->assign('session',$_SESSION['userMsg']);
$smarty->assign('typeId',$typeId);
$smarty->assign('totalPage',$totalPage);
$smarty->assign('newsInfo',$newsInfo);
$smarty->assign("Nimges",$Nimges);
$smarty->assign("NewsTypes",$NewsTypes);
$smarty->display("newstype.html");

