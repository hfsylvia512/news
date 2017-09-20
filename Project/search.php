<?php 
header('content-type:text/html;charset=utf-8');
include_once 'smarty/Smarty.class.php';
include_once 'dbio/NewsTypes.php';
include_once 'dbio/NewsArticles.php';

session_start();

$smarty = new Smarty();

$keyword = $_GET['keyword'];
$currentPage = isset($_GET["currentPage"])?$_GET["currentPage"]:1;//当前页码
//导航
$NewsTypes= NewsTypes::fetchAll();
//搜索关键字 所有关键字 分页
$arr = NewsArticles::searchNews($keyword,$currentPage);
$totalPage = $arr[0];//总页数
$search = $arr[1];//显示的记录




$smarty ->assign("currentPage",$currentPage);
$smarty->assign("keyword",$keyword);//关键字
$smarty->assign("totalPage",$totalPage);//总页数
//登录的用户名记录
$smarty ->assign('search',$search);//显示的记录
$smarty->assign("NewsTypes",$NewsTypes);
$smarty->assign("session",$_SESSION["userMsg"]);

$smarty->display("search.html");