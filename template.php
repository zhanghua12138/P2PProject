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
		<link rel="stylesheet" type="text/css" href="dist/css/min/index.min.css" />
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
		<div class="container">
			<div class="col-sm-3">
				<ul id="menu" class="list-group">
					<li class="list-group-item ${pageScope.currentMenu=='bid' ? 'active' :'' }">
						<a href="bid_list.html"> <span>投资项目</span></a>
					</li>
					<li class="list-group-item">
						<a href="javascript:;"><span>借款项目</span></a>
						<ul>
							<li><a href="bid_request_list.html"><span>借款项目</span></a></li>
							<li><a href="borrowBidReturn_list11.html"><span>还款明细</span></a></li>
						</ul>
					</li>
					<li class="list-group-item">
						<a href="#"><span class="text-title">我的账户</span></a>
						<ul class="in">
							<li class="active"><a href="personal.html">账户信息</a></li>
							<li><a href="realAuth.html">实名认证</a></li>
							<li><a href="#">银行卡管理</a></li>
							<li><a href="#">登录记录</a></li>
						</ul>
					</li>
					<li class="list-group-item">
						<a href="#"><span>资产详情</span></a>
						<ul class="in">
							<li><a href="accountFlow_list.html">账户流水</a></li>
							<li><a href="recharge_list.html">充值明细</a></li>
							<li><a>提现记录</a></li>
							<li><a>收款明细</a></li>
						</ul>
					</li>
					<li class="list-group-item">
						<a href="userInfo.html"> <span>个人资料</span></a>
					</li>
				</ul>
			</div>
		</div>
		<?php
			include_once("./footer.html");
		?>
	</body>
	<!--自定义特效-->
    <script src="src/javascript/p2pEffects.js" type="text/javascript" charset="utf-8"></script>
</html>