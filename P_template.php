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
		<div class="container" id="mainContent">
			<div class="row">
				<!--左边菜单-->
				<?php
				 	include_once("./psTemplate.html");
				?>
				<!--右边内容-->
				<div class="col-sm-9 col-xs-12" id="rightCon">
				</div>
			</div>
			
		</div>
		<?php
			include_once("./footer.html");
		?>
	</body>
</html>