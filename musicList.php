<?php
	header("Content-Type:text/html;charset=utf8");
	require_once('connect.php');
	//只查询name和musicName字段数据
	//通过id能够在后端数据库找到对应的歌
	$sql="select id,name,musicName from music_list";
	
	mysqli_query($con,"SET NAMES utf8");
	$query=mysqli_query($con,$sql);
	

	
	if($query&&mysqli_num_rows($query)){
		while($row=mysqli_fetch_assoc($query)){
			$data[]=$row;
		}
		
		echo json_encode($data);
	}	
	
	
?>