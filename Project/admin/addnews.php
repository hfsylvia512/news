<?php 
header("content-type:text/html;charset=utf-8");
include_once "../smarty/Smarty.class.php";
include_once "../dbio/NewsTypes.php";
include_once "../dbio/NewsArticles.php";

include_once "nologin.php";
//session_start();
$smarty = new Smarty();

if($_POST){

	//管理员id
	$userId = isset($_SESSION["manager"]["userId"])?$_SESSION["manager"]["userId"]:"";
	$typeId = $_POST['typeId'];
	$title = $_POST["title"];
	$content=$_POST["content"];
	$myFile = $_FILES["myFile"];
	$dateandtime = time();
	$imagepath = "";
	//var_dump($myFile);exit;
	//上传图片
	if($myFile["error"] == 0){
		//上传文件
		// move_uploaded_file(临时目录, 保存路径)
		$fileName = $myFile["name"];
		// 获得文件的扩展名
		$arr = explode(".",$fileName);

		$ext = $arr[count($arr)-1];
		//echo $ext;exit;
		// 生成全新的文件名
		$newName = uniqid(time()).".".$ext;
		//echo $newName;exit;
		//源文件名
		//$fileName = $myFile["name"];
		// 保存路径
		$imagepath = "photoview/{$newName}";

		move_uploaded_file($myFile["tmp_name"],"../{$imagepath}");
	}
	

	$addNews = NewsArticles::addNews($userId,$typeId,$title,$content,$imagepath,$dateandtime);
	if($addNews > 0){
		header("location:success.php?act=addNews&rst={$addNews}");
	}
}
//所有新闻分类
$NewsTypes = NewsTypes::getNewsTypeAll();

$smarty ->assign("NewsTypes",$NewsTypes);
$smarty ->display("addnews.html");