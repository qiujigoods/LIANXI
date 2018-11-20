<?php 
$pdo=new PDO("mysql:host=127.0.0.1;dbname=kaoshi","root","root");
$data=$pdo->query("select * from miao")->fetchAll(PDO::FETCH_ASSOC);//通过进行时分秒计算 
foreach ($data as $key => $value) {
	$star=time();
	$end=$value['endtime'];
	$cha=$end-$star;
	$hour=floor($cha/3600);
	$minute=floor(($cha-$hour*3600)/60);
	$second=$cha-$hour*3600-$minute*60;
	$data[$key]['hour']=$hour;
	$data[$key]['minute']=$minute;
	$data[$key]['second']=$second;
}
echo json_encode($data);

 ?>