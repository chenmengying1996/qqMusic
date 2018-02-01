<?php
	header("Content-Type:text/html;charset=utf8");
	require_once('connect.php');
	$id=$_GET['id'];
	$sql="select * from music_list where id='$id'";//通过从前端传过来的id来找到数据库中对应的id的那一组数据
	mysqli_query($con,"SET NAMES utf8");
	$query=mysqli_query($con,$sql);
	
//	if($query&&mysqli_num_rows($query)){
//		while($row=mysqli_fetch_assoc($query)){
			//因为有多条数据所以扔进数组里面
//			$data[]=$row;
//		}
//		
//		echo json_encode($data);
//	}

	//因为我们只找一条数据所以不用循环
	if($query&&mysqli_num_rows($query)){
		//只有一条数据所以不用扔进数组里面
		echo json_encode(mysqli_fetch_assoc($query));
	}
	
?>