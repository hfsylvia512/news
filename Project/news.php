<?php
header("content-type:text/html;charset=utf-8");
include_once 'smarty/Smarty.class.php';
include_once 'dbio/NewsTypes.php';
include_once 'dbio/Reviews.php';
include_once 'dbio/NewsHints.php';
include_once 'dbio/NewsArticles.php';
session_start();
$smarty = new Smarty();
//导航菜单的分类
$NewsTypes= NewsTypes::fetchAll();
$articleId = $_GET['articleId'];
$_SESSION['articleId']=$articleId;

//echo $userId;exit;
//一条新闻内容
$NewsContent = NewsArticles::content($articleId);
//当前新闻的评论数
$reviewsCount = Reviews::getReviewsCountById($articleId);
//当前新闻点击量加一
$result = NewsArticles::addHints($articleId);
//向newshints 表添加一条点击量的记录
$NewsHints = NewsHints::addNewsHints($articleId);
//添加评论
if($_POST){
	$userId = $_SESSION['userMsg']['userId'];
	$userId = isset($_SESSION['userMsg']['userId'])?$_SESSION['userMsg']['userId']:"";
	//echo $articleId;exit;
	$content = $_POST['content'];
	//echo $content;exit;
	$ReviewsContent = Reviews::insertContent($userId,$articleId,$content);
	if($ReviewsContent > 0){
		//发表成功
		header("location:success.php?act=pub&rst=1");
	}else{
		//发表失败
		header("location:seccess.php?act=pub&rst=0");
	}
}
$smarty->assign('articleId',$articleId);
$smarty->assign('session',$_SESSION['userMsg']);
$smarty->assign("reviewsCount",$reviewsCount);
$smarty->assign("NewsContent",$NewsContent);
$smarty->assign("NewsTypes",$NewsTypes);
$smarty->display("news.html");
