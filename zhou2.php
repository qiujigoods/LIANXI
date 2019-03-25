<?php 
// one();
function one(){
	$sum=0;
	for ($i=1; $i <=4 ; $i++) { 
		for ($j=1; $j <=4 ; $j++) { 
			if ($i==$j) {
				continue;
			}
			for ($k=1; $k <=4 ; $k++) { 
				if ($k==$i||$k==$j) {
					continue;
				}
				echo $i.$j.$k.'<br>';
				$sum++;
			}
		}
	}
	echo $sum;
}

class dan{
	private $pdo;
	private function __construct(){

	}
	private function __clone(){

	}
	public static function lian(){

	}
}

$name='E:\学习——大纲';
// three($name);
function three($name){
	$name1=opendir($name);
	$name2=readdir($name1);
	while ($name2!==false) {
		$name3=$name1. "'\'" .$name2;
		if (is_dir($name3)) {
			three($name3);
		}else{
			echo $name3;
		}
	}
}

$aPath='/a/b/c/d/test.php';
$bPath='/a/b/c/c/test.php';
// four($aPath,$bPath);
function four($aPath,$bPath){
	$a=explode('/',$aPath);
	$b=explode('/',$bPath);
	$count=count($a);
	$arr=[];
	for ($i=0; $i <$count ; $i++) { 
		if ($a[$i]==$b[$i]) {
			$arr[]=$a[$i];
		}else{
			break;
		}
	}
	$arr=implode('/',$arr);
	var_dump($arr);
}


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<span id='times'></span>
 </body>
 </html>
 <script type="text/javascript">
 	setTimeout(dao(),100);
 	dao();
 	function dao(){
	 	var start=new Date();
	 	var end=new Date('2020/1/1 00:00:00');
	 	start=start.getTime();
	 	end=end.getTime();
	 	cha=end-start/1000;
	 	var day=parseInt(cha/60/60/60/24);
	 	var shi=parseInt(cha/60/24%24);
	 	var fen=parseInt(cha/24%60);
	 	var miao=parseInt(cha%60);
	 	var ht='<span>'+day+'天</span>'+'<span>'+shi+'小时</span>'+'<span>'+fen+'分钟</span>'+'<span>'+miao+'秒</span>';
	 	document.getElementById('times').innerHTML=ht;
	 	console.log(start);
	 	console.log(end);
	 	console.log(cha);
	 	console.log(day);
	 	console.log(shi);
	 	console.log(fen);
	 	console.log(miao);
	 }

 </script>