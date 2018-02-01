<?php
	header("Content-Type:text/html;charset=utf8");
	require_once('connect.php');
	$page=$_GET['page'];
	$len=3;
	$start=$len*$page;
	$sql="select id,name,musicName from music_list limit $start,$len";//通过从前端传过来的id来找到数据库中对应的id的那一组数据
	mysqli_query($con,"SET NAMES utf8");
	$query=mysqli_query($con,$sql);
	
	if($query&&mysqli_num_rows($query)){
		while($row=mysqli_fetch_assoc($query)){
			//因为有多条数据所以扔进数组里面
			$data[]=$row;
		}
		
		echo json_encode($data);
	}
?>