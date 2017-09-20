<?php
header("content-type:text/html;charset=utf-8");
include_once '../smarty/Smarty.class.php';
include_once 'nologin.php';
$smarty = new Smarty();
//session_start();


$h = date("H",time());//当前系统时间中的“小时”
$msg = "";
if($h < 12)
{
	$msg = "上午好";
}
else
{
	$msg = "下午好";
}


$smarty->assign("msg",$msg);
$smarty->assign("userName",$_SESSION["manager"]["userName"]);
$smarty->display("top.html");


