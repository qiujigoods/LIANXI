<?php 
$token='hello';
$time=time();
$nonce=rand(100,999);
$arr=array($token,$time,$nonce);
sort($arr,SORT_STRING);
$str=implode($arr);
$str=sha1($str);
$url="http://qq.com/jiekou/server.php?w";

 ?>