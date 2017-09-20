<?php 
header("content-type:text/html;charset=utf-8");
include_once "../smarty/Smarty.class.php";
include_once '../dbio/NewsTypes.php';
include_once "../dbio/NewsArticles.php";
include_once "nologin.php";
$smarty = new Smarty();
$articleId = $_GET["articleId"];
$updateNews = NewsArticles::content($articleId);
// 修改
if($_POST){
	$title = $_POST['title'];
	$content=$_POST['content'];
	$result = NewsArticles::updateNews($title,$content,$articleId);
	//echo $result;exit;
	header("location:success.php?act=update&rst={$result}");
}

//所有新闻分类
$NewsTypes = NewsTypes::getNewsTypeAll();


$smarty ->assign("NewsTypes",$NewsTypes);
$smarty ->assign("updateNews",$updateNews);
$smarty ->assign("articleId",$articleId);
$smarty ->display("updatenews.html");