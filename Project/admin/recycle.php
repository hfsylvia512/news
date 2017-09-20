<?php 
include_once "../dbio/NewsArticles.php";

$articleId = $_GET["articleId"];
//删除某一条新闻
$remove = NewsArticles::removeNews($articleId);
header("location:success.php?act=recycle&rst={$remove}");