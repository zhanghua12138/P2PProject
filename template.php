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
		 	include_once("./header.html");
		?>
		<!--页面内容-->
		<div class="container" id="pstemp">
			<?php
		 	include_once("./psTemplate.html");
			?>
		</div>
		<?php
			include_once("./footer.html");
		?>
	</body>
	<!--自定义特效-->
    <script src="src/javascript/p2pEffects.js" type="text/javascript" charset="utf-8"></script>
    <script src="lib/jquery/jquery.js" type="text/javascript" charset="utf-8"></script>
    <script src="dist/js/collapse.js" type="text/javascript" charset="utf-8"></script>
</html>