<?php 
include_once "../dbio/NewsArticles.php";
$articleId = $_GET["articleId"];
//回收新闻
$recycle = NewsArticles::recycle($articleId);
header("location:success.php?act=rec&rst={$recycle}");