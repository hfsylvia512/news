<?php 
include_once 'conn/DbConn.class.php';
// 友情链接
class FriendLink{
	public static function link(){
		$sql = 'select * from friendLink';
		//echo $sql;exit;
		$conn = DbConn::getInstance();
		$result = $conn->queryAll($sql);
		//var_dump($result);exit;
		return $result;
	}
}