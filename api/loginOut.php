<?php
	//设置响应头
	header("Content-Type:text/html;charset=utf-8");
	session_start();
	session_destroy();//销毁session
	echo "<script>alert('退出成功!'); location.href='/';</script>";
?>