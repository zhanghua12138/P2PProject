<?php
   session_start(); //开启回话
        	   
   //判断登录的用户名是否存在session中
   if(isset($_SESSION["username"])){
   	  $result=["isSuccess"=>true,"msg"=>"验证登录成功!","username"=>$_SESSION["username"]];	
   	  echo json_encode($result);
   }
   else{
   	  $result=["isSuccess"=>false,"msg"=>"验证登录失败!"];	
   	  echo json_encode($result);
   }
?>