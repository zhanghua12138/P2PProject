<?php
//引入连接数据库
	include_once("conn.php");
	$mobile = $_POST['mobile'];
	$sqlStr="select * from userinfo where mobile='$mobile'";
	$rs=mysqli_query($conn, $sqlStr);
	$row=mysqli_fetch_assoc($rs);
	if($row){
		//成功
   	  $jsonArray=["isSuccess"=>true,"msg"=>"手机号已注册"];
	  echo json_encode($jsonArray);
	}else{
		//失败
	  $jsonArray=["isSuccess"=>false,"msg"=>"手机号可用"];
	  echo json_encode($jsonArray);
	}
?>