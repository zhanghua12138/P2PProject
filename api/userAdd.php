<?php
	//引入数据库连接
	include_once("./conn.php");
	//接受表单的值
	$username=$_POST["username"];
    $password=$_POST["password1"];
    $realname=$_POST["realname"];
    $mobile=$_POST["mobile"];
    $sex=$_POST["sex"];
	//构造sql语句
	$sqlStr="insert into userinfo(username,password,realname,mobile,sex) values('$username','$password','$realname','$mobile','$sex')";
	$result=mysqli_query($conn,$sqlStr);
	if($result){
		$jsonArray=["isSuccess"=>true,"msg"=>"用户注册成功!"];
		echo json_encode($jsonArray);
	}else{
		$jsonArray=["isSuccess"=>false,"msg"=>"用户注册失败! 原因:".mysqli_error($conn)];
		echo json_encode($jsonArray);
	}
?>