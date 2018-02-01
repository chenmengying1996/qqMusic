<?php
//	header("Content-type: text/html; charset=utf-8");
//	$con = mysql_connect('localhost','root','');
//	mysql_select_db('ajaxMusic2');
//	mysql_query('set names utf8');

	$con=mysqli_connect("localhost:3306","root","","ajaxmusic2"); 
	// 检查连接 
	if (!$con) 
	{ 
	    die("连接错误: " . mysqli_connect_error()); 
	}
?>