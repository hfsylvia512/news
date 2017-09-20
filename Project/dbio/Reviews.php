<?php
include_once 'conn/DbConn.class.php';

class Reviews{
	//当前新闻的评论数
	public static function getReviewsCountById($articleId){
		$sql = "select count(*) from reviews where articleId={$articleId}";
		$conn = DbConn::getInstance();
		$result = $conn->queryOne($sql);
		$resultCount = $result[0];
		return $resultCount;
	}
	//输入评论内容
	public static function insertContent($userId,$articleId,$content){
		//echo $articleId;exit;
		//echo $content;exit;
		$sql = "insert into reviews(userId,articleId,content) value('{$userId}','{$articleId}','{$content}')";
		//echo $sql;exit;
		$conn = DbConn::getInstance();
		$result = $conn->execute($sql);
		return $result;
	}
}
