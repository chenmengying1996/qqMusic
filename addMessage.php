<?php
	header("Content-Type:text/html;charset=utf8");
	require_once('connect.php');
	$mid=$_POST['mid'];
	$text=htmlspecialchars($_POST['text']);//htmlspecialchars防止在数据库中写入代码
	$sql="insert into message_list(mid,text) values('$mid','$text')";//通过从前端传过来的id来找到数据库中对应的id的那一组数据
	mysqli_query($con,"SET NAMES utf8");
	$query=mysqli_query($con,$sql);
	
	if($query){
		//插入成功
		echo '{"code":"1","message":"'.$text.'"}';
		
	}else{//插入失败
		echo '{"code":"0","message":"添加失败"}';
	}
?>