<?php 
header("content-type:text/html;charset=utf-8");
include_once "../smarty/Smarty.class.php";
include_once "../dbio/NewsTypes.php";
include_once "nologin.php";
$smarty = new Smarty();
if($_POST){
	$typeName = $_POST["typeName"];
	$str = $_POST["str"];
	$arr = explode("-",$str);
   //echo $arr;exit;
	$pid = $arr[0];
	//echo $typeId;exit;
	$level = $arr[1];
	$result = NewsTypes::addType($typeName,$pid,$level);
	//提示
	header("location:success.php?act=addtype&rst={$result}");
}


$NewsTypes = NewsTypes::fetchAll();
$smarty ->assign("NewsTypes",$NewsTypes);
$smarty->display("addtype.html");