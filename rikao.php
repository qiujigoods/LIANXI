<?php 
$c='QWERTYGFDSASFBVCXZSERTFGBVCXaaWQ';
fa($c);
function fa($c){
	$count=strlen($c);
	// echo $count;
	$a=[];
	for ($i=0; $i <$count ; $i++) { 
		if ($c[$i]==' ') {
			continue;
		}
		$a[$c[$i]]=$i;
		$c=str_replace($c[$i],' ',$c);
	}
	var_dump($a);
	var_dump($c);
}





 ?>