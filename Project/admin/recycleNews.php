<?php 
header("content-type:text/html;charset=utf-8");
include_once "../smarty/Smarty.class.php";

include_once "../dbio/NewsArticles.php";

include_once "nologin.php";
//session_start();
//$articleId = $_GET["articleId"];
$smarty = new Smarty();
// 查询删除的新闻
$delnews = NewsArticles::delNews();


$smarty ->assign("delnews",$delnews);
$smarty ->display("recycleNews.html");