<?php 
include_once 'conn/DbConn.class.php';

// 会员表
class UserInfo{
	public static function register($userName,$password){
		$sql = "insert userInfo(userName,password) value('{$userName}','{$password}')";
		$conn = DbConn::getInstance();
		$result = $conn->execute($sql);
		return $result;
	}
	//登录
	public static function login($userName,$password){
		$sql = "select * from userInfo where userName='{$userName}' and password='{$password}'";
		//echo $sql;exit;
		$conn = DbConn::getInstance();
		$result = $conn->queryOne($sql);
		return $result;
	}
}