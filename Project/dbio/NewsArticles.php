<?php 
include_once 'conn/DbConn.class.php';
 //新闻表
class NewsArticles{
	public static function title(){
		$sql = 'select * from newsArticles where isDel=0 order by dateandtime desc limit 0,9';
	$conn = DbConn::getInstance();
	$result = $conn->queryAll($sql);
	return $result;
	}
	//国内
	public static function getTop10($typeId){
		$sql = "select * from newsArticles where typeId={$typeId} and isDel=0 order by dateandtime desc limit 0,10";
		$conn = DbConn::getInstance();
		$result =$conn->queryAll($sql);
		return $result;
	}
	//点击量
	public static function click(){
		$sql = "select * from newsArticles where isDel=0 and typeId in (select typeId from newsTypes where pid=1) order by hints desc limit 0,10";
		$conn = DbConn::getInstance();
		$result = $conn->queryAll($sql);
		return $result;
	}
	//评论数
	public static function review(){
		$sql = 'select * from newsArticles where isDel=0 and typeId in (select typeId from newsTypes where pid=1) order by (select count(*) from reviews where reviews.articleId=newsArticles.articleId) desc limit 0,10';
		$conn = DbConn::getInstance();
		$result = $conn->queryAll($sql);
		return $result;
	}
	//国际最新消息
	public static function internation(){
		$sql = 'select * from newsArticles where isDel=0 and typeId in (select typeId from newsTypes where pid=2) order by dateandtime desc limit 0,10';
		$conn = DbConn::getInstance();
		$result = $conn->queryAll($sql);
		return $result;
	}
	//海外观察
	public static function overseas(){
		$sql = "select * from newsArticles where isDel=0 and typeId=12 and imagepath != '' order by dateandtime desc limit 0,3";
		//echo $sql;exit;
		$conn = DbConn::getInstance();
		$result = $conn->queryAll($sql);
		// var_dump($re);exit;
		return $result;
	}
	public static function gjTop8(){
		$sql = "select * from newsArticles where isDel=0 and imagepath !='' and typeId in (select typeId from newsTypes where pid=2) order by dateandtime desc limit 0,8";
		$conn = DbConn::getInstance();
		$result = $conn->queryAll($sql);
		// var_dump($re);exit;
		return $result;
	}

	//图片精选
	public static function images(){
		$sql = 'select * from newsArticles where isDel=0 and imagepath != "" order by dateandtime desc limit 3';
		$conn = DbConn::getInstance();
		$result = $conn->queryAll($sql);
		//var_dump($result);exit;
		return $result;
	}
	//查询某分类下所有新闻 参数一：当前分类的id，参数：当前的页码
	public static function getNewsByTypeId($typeId,$currentPage){
		//echo $typeId;exit;
		//当前分类有几个字菜单
		$sql = "select count(*) from newsTypes where pid={$typeId}";
		//echo $sql;exit;
		$conn=DbConn::getInstance();
		$result = $conn->queryOne($sql);
		//echo $result;exit;
		$resultCount = $result[0];
		//var_dump($resultCount);exit;
		//echo $resultCount;exit;
		//分页变量
		//$currentPage
		$pageSize = 10; //当前页码显示的记录数
		$totalRow = 0; //总记录数
		$totalPage = 0;//总页数
		$start = ($currentPage-1)*$pageSize;//每页记录的起始值
		if($resultCount > 0){
			//当前分类有子菜单
			$sql1 = "select count(*) from newsArticles where typeId in (select typeId from newsTypes where pid={$typeId})";
			$sql2 = "select * from newsArticles where typeId in (select typeId from newsTypes where pid={$typeId}) limit {$start},{$pageSize}";			
		}else{
			//当前分类没有子菜单
			$sql1 = "select count(*) from newsArticles where typeId={$typeId}";
			$sql2 = "select * from newsArticles where typeId={$typeId} limit {$start},{$pageSize}";			
		}
		//echo $sql1;exit;
		//echo $sql2;exit;
		$conn= DbConn::getInstance();
		//求总记录数、总页数
		$result1 = $conn->queryOne($sql1);
		//var_dump($result1);exit;
		//总记录数
		$totalRow = $result1[0];
		//echo $totalRow;exit;
		//总页数
		$totalPage = ceil($totalRow/$pageSize);
		//上一页
		
		//echo $totalPage;exit;
		//查询页面显示的记录
		$result2 = $conn->queryAll($sql2);
		//返回值 总页数、页面显示的记录
		return array($totalPage,$result2);
	} 
	//查询一条新闻内容
	public static function content($articleId){
		//echo $articleId;exit;
		$sql="select * from newsArticles where articleId={$articleId}";
		$conn = DbConn::getInstance();
		$result = $conn->queryOne($sql);
		return $result;
	}
	//增加新闻的点击
	public static function addHints($articleId){
		$sql= "update newsArticles set hints=hints+1 where articleId={$articleId}";
		$conn = DbConn::getInstance();
		$result = $conn->execute($sql);
		return $result;
	}
	// 24小时新闻点击量排行
	public static function getTop24(){
		$time = time()-3600*24;
		$sql = "select * from newsArticles a where isDel=0 order by (select count(*) from newsHints b where a.articleId=b.articleId and dateandtime>{$time}) desc limit 0,10";
		//echo $sql;exit;
		$conn = DbConn::getInstance();
		$result = $conn->queryAll($sql);
		return $result;
	}
}