<?php
header("content-type:text/html;charset=utf-8");
include_once '../smarty/Smarty.class.php';
include_once 'nologin.php';
$smarty = new Smarty();



$smarty->display("welcome.html");









