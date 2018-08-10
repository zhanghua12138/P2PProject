<?php
//引入连接数据库
	include_once("conn.php");
	$username = $_POST['username'];
	$sqlStr="select * from userinfo where username='$username'";
	$rs=mysqli_query($conn, $sqlStr);
	$row=mysqli_fetch_assoc($rs);
	if($row){
		//成功
   	  $jsonArray=["isSuccess"=>true,"msg"=>"用户名已存在"];
	  echo json_encode($jsonArray);
	}else{
		//失败
	  $jsonArray=["isSuccess"=>false,"msg"=>"用户名可用"];
	  echo json_encode($jsonArray);
	}
?>