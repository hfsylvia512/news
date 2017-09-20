<?php 
header('content-type:text/html;charset=utf-8');
include_once 'dbio/UserInfo.php';
session_start();
// 为ajax登录做处理
// 获得ajax提交的数据
$userName = $_POST['userName'];
$password = $_POST['password'];
//echo $userName;exit;
// 登录验证
 $userInfo = UserInfo::login($userName,$password);
//var_dump($userInfo);exit;
 if($userInfo == null ){
 	// 登录失败
 	echo '0';
 }else{
 	// 登录成功
 	$_SESSION['userMsg']= $userInfo;
 	echo '1';
 }

