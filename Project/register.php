<?php 
header('content-type:text/html;charset=utf-8');
include_once 'smarty/Smarty.class.php';
include_once 'dbio/UserInfo.php';
session_start();
$smarty = new Smarty();

if($_POST){
	$username = $_POST['userName'];
	$password = $_POST['password'];
	$verify = $_POST['verify'];
	$trueCode = $_SESSION['verify'];
	if($verify == $trueCode){
	$userInfo = UserInfo::register($username,$password);
	//var_dump($userInfo);exit;
	if($userInfo >0){
		header("location:success.php?act=reg&rst=3");
	}else{
		header("location:success.php?act=reg&rst=2");
	}
	}else{
		header("location:success.php?act=reg&rst=1");
	}
}

$smarty -> display('register.html');
