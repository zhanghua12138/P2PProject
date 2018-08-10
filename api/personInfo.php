<?php
	header("Content-Type:text/html;charset=utf-8");
    session_start(); //开启回话
    //获取session中的上次登录时间和用户名
   	$result=["isSuccess"=>true,"username"=>$_SESSION["username"],"lastlogindate"=>$_SESSION["lastlogindate"]];	
   	echo json_encode($result);
?>