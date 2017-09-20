<?php 
header('content-type:text/html;charset=utf-8');
include_once 'smarty/Smarty.class.php';
include_once 'dbio/UserInfo.php';

session_start();
$smarty = new Smarty();

if($_POST){
	$userName = $_POST['userName'];
	$password = $_POST['password'];
	$userInfo = UserInfo::login($userName,$password);

	//var_dump($userInfo);exit;
	if($userInfo == NULL){
		//登录失败
		header("location:success.php?act=login&rst=0");
	}else{
		//登录成功
		$_SESSION['userMsg']=$userInfo;
		header("location:success.php?act=login&rst=1");
	}
}

$smarty -> display('login.html');