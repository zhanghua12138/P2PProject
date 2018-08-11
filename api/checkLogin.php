<?php
	//引入连接数据库
	include_once("conn.php");
	//接收数据
	$username=$_POST["username"];
    $password=$_POST["password1"];
	//设置默认当前时区
	date_default_timezone_set("PRC");
	//获取当前时间,并设置格式
	$nowdata = date ( "Y-m-d H:i:s" );
	$sqlStr="select * from userinfo where username='$username' and password='$password'";
	$rs=mysqli_query($conn, $sqlStr);
	//根据执行的结果返回json到前端
   //方法1： mysqli_num_rows(); //得到当前结果集中的记录的个数，根据个数确定是否存在，个数大于0就是合法
   //方法2：mysqli_fetch_assoc(); 返回结果集中行的关联数组，如何没有行的记录返回null
	$row=mysqli_fetch_assoc($rs);
	if($row){
		//成功
   	  $jsonArray=["isSuccess"=>true,"msg"=>"登录成功!","time"=>$row["lastlogindate"],"当前时间"=>$nowdata];
	  echo json_encode($jsonArray);
	  
	  //验证用户登录成功就创建session
  	  session_start();
	  $_SESSION["lastlogindate"]=$row["lastlogindate"];
	  $_SESSION["username"]=$row["username"];
	  $_SESSION["userid"]=$row["userid"];
	  $_SESSION["realname"]=$row["realname"];
	  //用当前时间修改上次登录时间,方便用户下一次登录时获取
	  $sqlStr1="update userinfo set lastlogindate='$nowdata' where username='$username' and password='$password'";
	  $rs1=mysqli_query($conn, $sqlStr1);
	}else{
		//失败
	  $jsonArray=["isSuccess"=>false,"msg"=>"登录失败!"];
	  echo json_encode($jsonArray);
	}
?>