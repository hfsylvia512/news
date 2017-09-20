<?php
include_once 'conn/DbConn.class.php';

//点击量表
class NewsHints
{
	public static function addNewsHints($articleId){
		$dateandtime = time();
		$sql = "insert into newsHints(articleId,dateandtime) value({$articleId},{$dateandtime})";
		$conn = DbConn::getInstance();
		$result = $conn->execute($sql);
		return $result;
	}
}