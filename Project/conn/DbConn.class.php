<?php
class DbConn{
	private $conn;
	private function __construct(){
		$url = 'mysql:host=localhost;dbname=news';
		$user='root'; 
		$password = '';
		$this->conn=new PDO($url,$user,$password);
	}
	private function __clone(){
		
	}
	public static function getInstance(){
		static $obj = null;
		if($obj == null){
			$obj = new DbConn();
		}
		return $obj;
	}
	public function queryAll($sql){
		$st = $this->conn->query($sql);
		$rs = $st->fetchAll();
		return $rs;
	}
	public function queryOne($sql){
		$st = $this->conn->query($sql);
		$rs = $st->fetch();
		return $rs;
	}
	public function execute($sql){
		$result = $this->conn->exec($sql);
		return $result;
	}
}

