<?php
header("content-type:text/html;charset=utf-8");
include_once '../smarty/Smarty.class.php';
include_once "../dbio/NewsTypes.php";
include_once 'nologin.php';
$smarty = new Smarty();
// 删除某一分类
if(isset($_GET["typeId"])){
	// 获得url中的参数
	$typeId = $_GET["typeId"];
	// 删除分类
	$result = NewsTypes::delType($typeId);
	// 提示
	header("location:success.php?act=deltype&rst={$result}");
}


//查询所有分类列表
$NewsTypes = NewsTypes::getNewsTypeAll();
//var_dump($NewsTypes);exit;
$smarty ->assign("NewsTypes",$NewsTypes);


$smarty->display("listtype.html");



