<?php 
$redis=new Redis;
$redis->connect('127.0.0.1',6379);
$pdo=new PDO("mysql:host=127.0.0.1;dbname=kaoshi","root","root");
$data=$pdo->query("select * from miao")->fetchAll(PDO::FETCH_ASSOC);
$id=$_GET['id'];
$key='goods'.$id;
if ($redis->llen($key)>0) {//判断是否商品数量是否够用
	$redis->lpop($key);
	$order_id=time().rand(1000,9999);
	$addtime=time();
	$sql="insert into kaka (order_id,goods_id,addtime) values ('$order_id','$id','$addtime')";
	if ($pdo->query("update miao set stock=stock-1 where id=$id")) {
		$pdo->query($sql);
		echo "1";
	}else{
		echo "2";
	}
}


 ?>