<?php
	//引入数据库连接
	include_once("./conn.php");
	//接受表单的值
	$username=$_POST["username"];
    $password=$_POST["password1"];
    $realname=$_POST["realname"];
    $mobile=$_POST["mobile"];
    $sex=$_POST["sex"];
	//设置默认当前时区
	date_default_timezone_set("PRC");
	//获取当前时间,并设置格式
	$nowdata = date ( "Y-m-d H:i:s" );
	//构造sql语句
	$sqlStr="insert into userinfo(username,password,realname,mobile,sex,createdate,lastlogindate) values('$username','$password','$realname','$mobile','$sex','$nowdata','$nowdata')";
	$result=mysqli_query($conn,$sqlStr);
	if($result){
		$jsonArray=["isSuccess"=>true,"msg"=>"用户注册成功!"];
		echo json_encode($jsonArray);
	}else{
		$jsonArray=["isSuccess"=>false,"msg"=>"用户注册失败! 原因:".mysqli_error($conn)];
		echo json_encode($jsonArray);
	}
?>