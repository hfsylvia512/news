<?php
//防止非法访问
session_start();
if(!isset($_SESSION["manager"]))
{
	header("location:success.php?act=nologin&rst=1");
}