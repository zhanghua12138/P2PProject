<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>蓝源Eloan-P2P平台</title>
		<!--视口: 兼容移动端-->
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--引入bootstrap核心样式-->
		<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css" />
		<!--字体图标样式-->
		<link rel="stylesheet" type="text/css" href="lib/fontawesome/css/fontawesome-all.min.css"/>	
		<!--自定义样式-->
		<link rel="stylesheet" type="text/css" href="dist/css/min/psTemplate.min.css" />
		<link rel="stylesheet" type="text/css" href="dist/css/min/personnel.min.css"/>
		<!--兼容低版本的浏览器-->
		<!--[if lt IE 9]>
	      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	    
	</head>
	
	<body>
		<?php
		 	include_once("./header.php");
		?>
		<!--个人中心墙-->
		<script src="dist/js/psTemplate.min.js" type="text/javascript" charset="utf-8"></script>
		<!--页面内容-->
		<div class="container" id="pstemp">
			<div class="row">
			
				<?php
			 	include_once("./psTemplate.html");
				?>
				<div class="col-xs-9" id="rightPart">
					<div class="panel panel-default">
					  <div class="panel-body">
					    <div class="row">
	        				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
	        					<img class="img-thumbnail" src="static/images/head_icon.jpg"/>
	        				</div>
	        				<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
	        				    <p>昵 称：源代码教育</p>
	        				    <p>用户名：<span id="username"></span></p>
	        				    <p>最后登录：2016-10-25 15:30:10</p>
	        				</div>
	        			</div>
	        			<div class="row">
	        				<div class="col-md-4 col-xs-12">
	        					总金额：<span class="text-primary">10000</span>元
	        				</div>
	        				<div class="col-md-4 col-xs-12">
	        					可用金额：<span class="text-primary">8000</span>元
	        				</div>
	        				<div class="col-md-4 col-xs-12">
	        					冻结金额：<span class="text-primary">2000</span>元
	        				</div>
	        			</div>
	        			<div class="row text-center">
	        				<button type="button" class="btn btn-primary btn-lg">账号充值</button>
                            <button type="button" class="btn btn-danger btn-lg">账号提现</button>
	        			</div>
	        			<div class="row">
	        				<div class="col-md-6 col-xs-12">
	        					<div class="authIcon">
	        						<p>实名认证</p>
	        						<p>未认证 马上认证</p>
	        					</div>
	        					<div>实名认证之后才能在平台投资</div>
	        				</div>
	        				<div class="col-md-6 col-xs-12">
	        					<div class="authIcon">
	        						<p>实名认证</p>
	        						<p>未认证 马上认证</p>
	        					</div>
	        					<div>实名认证之后才能在平台投资</div>
	        				</div>
	        				<div class="col-md-6 col-xs-12">
	        					<div class="authIcon">
	        						<p>实名认证</p>
	        						<p>未认证 马上认证</p>
	        					</div>
	        					<div>实名认证之后才能在平台投资</div>
	        				</div>
	        				<div class="col-md-6 col-xs-12">
	        					<div class="authIcon">
	        						<p>实名认证</p>
	        						<p>未认证 马上认证</p>
	        					</div>
	        					<div>实名认证之后才能在平台投资</div>
	        				</div>
	        			</div>
					  </div>
					</div>
				</div>
			</div>	
		</div>
		<?php
			include_once("./footer.html");
		?>
	</body>
</html>