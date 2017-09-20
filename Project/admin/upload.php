<?php 
class Uploade{
	function buildFile(){
		foreach($_FILE as $file){
			if(is_array($file['name'])){
				$n = 0;
				foreach($file['name'] as $filename){
					$fileinfo[$n]['name']=$filename;
					$fileinfo[$n]['tmp_name']=$file['tmp_name'][$n];
					$n++;
				}
			}else{
				$fileinfo[]=$file;
			}
		}
		return $fileinfo;
	}
	function uploads($desPath = "./"){
		//创建目录
		if(!file_exists($desPath)){
			mkdir($desPath);
		}
		if(substr($desPath,-1) !="/"){
			$desPath .="/";
		}
		$fileinfo = $this->buildFile();
		foreach($fileinfo as $file){
			$filename = $file["tmp_name"];
			$ext = pathinfo($file["name"],PATHINFO_EXTENSION);
			$dFileName = uniqid(time());
			$destination = $desPath.$dFileName.'.'.$ext;
			move_uploaded_file($filename,$destination);
		}
	}
}