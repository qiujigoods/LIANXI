<?php 
$pdo=new PDO("mysql:host=127.0.0.1;dbname=kaoshi","root","root");
$data=$pdo->query("select * from miao")->fetchAll(PDO::FETCH_ASSOC);//查找数据


 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<?php foreach ($data as $key => $v): ?>
 		<div>
 			<p>
 				<span id="h<?=$v['id']?>"></span>时
 				<span id="m<?=$v['id']?>"></span>分
 				<span id="s<?=$v['id']?>"></span>秒
 			</p>
 			<img src="<?=$v['img']?>" width="300px" height="200px" alt="">
 			<input type="button" id="<?=$v['id']?>" value="抢购">
 		</div>
 	<?php endforeach ?>
 </body>
 </html>
 <script src="jquery-1.12.4.min.js"></script>
 <script>
 $(document).ready(function(){
 	window.setInterval(function(){
 		$.ajax({
 			url:"ding.php",
 			type:"get",
 			dataType:"json",
 			success:function(data){
 				for (var i = 0; i < data.length; i++) {
 					id=data[i]['id'];
 					
 					$("#h"+id).text(data[i]['minute']);
 					$("#m"+id).text(data[i]['minute']);
 					$("#s"+id).text(data[i]['second']);
 				};
 			}
 		})
 	},1000)
 })
 $("input[type=button]").click(function(){
 	id=$(this).attr('id');
 	// alert(id);
 	$.ajax({
 		url:"sha.php",
 		type:"get",
 		dataType:"json",
 		data:{'id':id},
 		success:function(data){
 			if (data=='1') {
 				alert('抢购成功');
 			}else{
 				alert('抢购失败');
 			}
 		}
 	})
 })
 </script>