<?php
	//引入连接数据库
	include_once("conn.php");
	//接收数据
	$username=$_POST["username"];
    $password=$_POST["password1"];
	$sqlStr="select * from userinfo where username='$username' and password='$password'";
	$rs=mysqli_query($conn, $sqlStr);
	//根据执行的结果返回json到前端
   //方法1： mysqli_num_rows(); //得到当前结果集中的记录的个数，根据个数确定是否存在，个数大于0就是合法
   //方法2：mysqli_fetch_assoc(); 返回结果集中行的关联数组，如何没有行的记录返回null
	$row=mysqli_fetch_assoc($rs);
	if($row){
		//成功
   	  $jsonArray=["isSuccess"=>true,"msg"=>"登录成功!"];
	  echo json_encode($jsonArray);
	  
	  //验证用户登录成功就创建session
	  session_start();
	  $_SESSION["username"]=$row["username"];
	  $_SESSION["userid"]=$row["userid"];
	}else{
		//失败
	  $jsonArray=["isSuccess"=>false,"msg"=>"登录失败!"];
	  echo json_encode($jsonArray);
	}
?>