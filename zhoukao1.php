<?php 
// a();
// function a(){//第一种
// 	$sum=0;
// 	for ($i=1; $i <=100 ; $i++) { 
// 		$sum+=$i;
// 	}
// 	echo $sum;
// }
// $sum=101*50;//第二种
// echo $sum;
// $a=100;
// $zong=0;
// while ($a) {//第三种
// 	$zong+=$a;
// 	$a--;
// }
// echo $zong;

// $a=5;  //阶乘1
// $sum=1;
// for ($i=1; $i <=$a ; $i++) { 
// 	$sum*=$i;
// }
// echo $sum;

// $a=5;    阶乘2
// $sum=1;
// jie($a,$sum);
// function jie($a,$sum){
// 	if ($a<1) {
// 		echo $sum;
// 		die;
// 	}
// 	$sum*=$a;
// 	$a=--$a;
// 	jie($a,$sum);
// }


// hui('aba');  回文
// function hui($a){
// 	$b=strrev($a);
// 	if ($b==$a) {
// 		echo "回文";
// 	}else{
// 		echo "非回文";
// 	}
// }


class Person{
	public function run(){

	}
	public function walk(){

	}
}
class Student extends Person{
	public $age1;
	public $name1;
	public function sum($name,$age){
		if ($age>$age1) {
			$age1=$age;
			$name1=$name;
		}
	}
}

$name1=(new Student())->sum('xiaoming1',1);
$name2=(new Student())->sum('xiaoming2',2);
$name3=(new Student())->sum('xiaoming3',3);
$name4=(new Student())->sum('xiaoming4',4);
$name5=(new Student())->sum('xiaoming5',5);
$name6=(new Student())->sum('xiaoming6',6);
$name7=(new Student())->sum('xiaoming7',7);
$name8=(new Student())->sum('xiaoming8',8);



 ?>