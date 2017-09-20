<?php 
include_once 'conn/DbConn.class.php';

// 导航 查询所以一级分类
class NewsTypes{
	public static function fetchAll(){
		$sql = 'select * from newsTypes where level=1 and isDel=0';
		//echo $sql;exit;
	$conn = DbConn::getInstance();
	$result = $conn->queryAll($sql);
	return $result;
	}
	//图像
	public static function images($typeId){
		$sql = "select count(*) from newsTypes where pid={$typeId}";
		//echo $sql;exit;
		$conn= DbConn::getInstance();
		$result = $conn->queryOne($sql);
		//var_dump($result);exit;
		$resultCount = $result[0];
		if($resultCount > 0){
		$sql = "select * from newsArticles where isDel=0 and imagepath != ''and typeId in (select typeId from newsTypes where pid={$typeId}) order by dateandtime desc limit 3";
		}else{
			$sql ="select * from newsArticles where typeId={$typeId} and imagepath !='' order by dateandtime desc limit 3";
		}
		//echo $sql;exit;
		$conn = DbConn::getInstance();
		$result1 = $conn->queryAll($sql);
		//var_dump($result1);exit;
		return $result1;
	}
	//查询所有分类
	public static function getNewsTypeAll()
	{
		$sql = "select * from newsTypes where isDel=0";
		$conn = DbConn::getInstance();
		$result = $conn->queryAll($sql);
		return $result;
	}
}