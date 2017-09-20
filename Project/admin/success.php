<?php
header("content-type:text/html;charset=utf-8");
include_once '../smarty/Smarty.class.php';
$smarty = new Smarty();
session_start();

//获得url中的参数
$act = $_GET["act"];//操作类型
$rst = $_GET["rst"];//操作结果
$message = "";//提示信息
$jumpUrl = "";//跳转地址

if($act == "login")//管理员登陆
{
	if($rst == 1)
	{
		$message = "管理员登陆成功！";
		$jumpUrl = "index.php";
	}
	else
	{
		$message = "管理员登陆失败！";
		$jumpUrl = "login.php";
	}
}
elseif($act == "logout")//管理退出后台管理
{
	unset($_SESSION["manager"]);
	$message = "退出后台管理成功！";
	$jumpUrl = "login.php";
}
elseif($act == "nologin")//非法访问
{
	$message = "您还没有登陆，无权访问该页面！";
	$jumpUrl = "login.php";
}elseif($act == "addtype"){//添加分类
	if($rst > 0){
		$message = "添加分类成功";
		$jumpUrl = "addtype.php";
	}else{
		$message = "添加分类失败";
		$jumpUrl = "addtype.php";
	}
}elseif($act == "deltype"){//删除分类
	if($rst > 0){
		$message = "删除分类成功！";
		$jumpUrl = "listtype.php";
	}else{
		$message = "删除分类失败!";
		$jumpUrl = "listtype.php";
	}
}elseif($act == "addNews"){//新闻发布
	if($rst > 0){
		$message = "新闻发布成功";
		$jumpUrl="addnews.php";
	}else{
		$message = "新闻发布成功";
		$jumpUrl="addnews.php";
	}
}elseif($act == "update"){//修改新闻
	if($rst > 0){
		$message = "修改新闻成功";
		$jumpUrl="listnews.php";
	}else{
		$message = "修改新闻失败";
		$jumpUrl="listnews.php";
	}
}elseif($act == "recycle"){//删除新闻
	if($rst > 0 ){
		$message = "删除新闻成功";
		$jumpUrl="listnews.php";
	}else{
		$message = "删除新闻失败";
		$jumpUrl="listnews.php";
	}
}elseif($act == "rec"){//回收新闻
	if($rst > 0){
		$message = "回收新闻成功";
		$jumpUrl="recycleNews.php";
	}else{
		$message = "回收新闻失败";
		$jumpUrl="recycleNews.php";
	}
}



$smarty->assign("message",$message);
$smarty->assign("jumpUrl",$jumpUrl);
$smarty->display("success.html");











