<?php 
$redis=new Redis;
$redis->connect('127.0.0.1',6379);
$pdo=new PDO("mysql:host=127.0.0.1;dbname=kaoshi","root","root");
$data=$pdo->query("select * from miao")->fetchAll(PDO::FETCH_ASSOC);//循环进行redis队列输入数据
foreach ($data as $key => $value) {
	for ($i=1; $i<=$value['stock'] ; $i++) { 
		$redis->lpush('goods'.$value['id'],$i);
	}
}

 ?>