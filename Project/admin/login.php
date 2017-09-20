<?php
header("content-type:text/html;charset=utf-8");
include_once '../smarty/Smarty.class.php';
include_once '../dbio/Manager.php';
$smarty = new Smarty();
session_start();

//表单提交(管理员登陆)
if($_POST)
{
	//获得表单提交的数据
	$userName = $_POST["userName"];
	$password = $_POST["password"];
	//登陆验证
	$manager = Manager::checkLogin($userName, $password);
	//提示
	if($manager == NULL)
	{
		header("location:success.php?act=login&rst=0");
	}
	else
	{
		$_SESSION["manager"] = $manager;
		header("location:success.php?act=login&rst=1");
	}
}



$smarty->display("login.html");









