<?php 
include_once '../conn/DbConn.class.php';

// 角色表
class Manager{
	//登录
	public static function checkLogin($userName,$password){
		$sql = "select * from manager where userName='{$userName}' and password='{$password}'";
		//echo $sql;exit;
		$conn = DbConn::getInstance();
		$result = $conn->queryOne($sql);
		return $result;
	}
}