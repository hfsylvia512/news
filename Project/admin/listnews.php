<?php 
header("content-type:text/html;charset=utf-8");
include_once "../smarty/Smarty.class.php";
include_once "../dbio/NewsArticles.php";
include_once "nologin.php";
//session_start();
$smarty = new Smarty();
$currentPage = isset($_GET["currentPage"])?$_GET["currentPage"]:1;
// 新闻列表
$arr = NewsArticles::listNews($currentPage);
$smarty ->assign("currentPage",$currentPage);
$listnews = $arr[1];

$smarty ->assign("listnews",$listnews);
$totalPage = $arr[0];
$smarty ->assign("totalPage",$totalPage);

$smarty ->display("listnews.html");