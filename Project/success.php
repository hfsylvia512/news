<?php
header("content-type:text/html;charset=utf-8");
include_once 'smarty/Smarty.class.php';
session_start();
$smarty = new Smarty();
$act=$_GET['act'];
$rst = $_GET['rst'];
$message = "";//提示信息
$jumpUrl = "";//跳转地址
if($act == "reg"){//注册
	if($rst ==1){//验证码
		$message ="验证码失败";
	 	$jumpUrl ="register.php";
	}else if($rst ==2){//注册失败
		$message ="注册失败";
	 	$jumpUrl ="register.php";
	}else if($rst ==3){//注册成功
		$message ="注册成功";
	 	$jumpUrl ="login.php";
	}
}else if($act =='login'){
	if($rst == 0){
		$message ="登录失败";
	 	$jumpUrl ="login.php";
	}else{
		$message ="登录成功";
	 	$jumpUrl ="news.php?articleId={$_SESSION['articleId']}";
	}
}else if ($act == "logout"){//退出登录 (如果对出的话是百分百可以退出)
	unset($_SESSION['userMsg']);
	$message = "退出登录成功!";
	$jumpUrl = 'index.php';
}else if($act == "pub"){
	if($rst == 0){
		$message ="发表失败";
	 	$jumpUrl ="news.php?articleId={$_SESSION['articleId']}";
	 }else{
	 	$message ="发表成功";
	 	$jumpUrl ="news.php?articleId={$_SESSION['articleId']}";
	 }
}
$smarty->assign("message",$message);
$smarty->assign("jumpUrl",$jumpUrl);
$smarty->display('success.html');