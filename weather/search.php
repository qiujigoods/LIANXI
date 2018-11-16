<?php 
$city=$_GET['city'];
$redis=new Redis;
$redis->connect("127.0.0.1",6379);
if ($redis->exists($city)) {
	$str=$redis->get($city);
	echo "redis";
	echo $str;
}else{
	$key="17f88f0b2b5d49e8a41fd2b5745fdf48";

	$url="https://free-api.heweather.com/s6/weather/forecast?location=$city&key=$key";
	$data=curl_get($url);
	// echo $data;
	echo "<pre>";
	$str=json_decode($data,true);
	$stree=$str['HeWeather6'][0]['daily_forecast'];
	var_dump($str);
	$pdo=new PDO("mysql:host=127.0.0.1;dbname=kaoshi","root","root");

	foreach ($stree as $key => $value) {
		$data=$value['date'];
		$max=$value['tmp_max'];
		$min=$value['tmp_min'];
		$sql="insert into weather (city,times,max,min) values('$city','$date','$max','$min')";
		$pdo->exec($sql);
	}
	$str=json_encode(stree);
	$redis->set($city,$str);
	echo "db";
	echo $stree;
}


function curl_get($url){
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	$str=curl_exec($ch);
	curl_close($ch);
	return $str;
}







 ?>