<!--辅助导航-->
		<nav class="navbar navbar-inverse">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<!--电话-->
					<a class="navbar-brand" href="#"><span class="glyphicon glyphicon-phone-alt"></span>028-86261949</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<!--辅助导航-->
						<li id="homepage"><a href="index.php"><span class="fa fa-home"></span>首页</a></li>
						<!--<li><a href="login.php"><span class="fa fa-user"></span>小强</a></li>
						<li><a href="register.php"><span class="fa fa-money-bill-alt"></span>赶快充值</a></li>
						<li><a href="api/loginOut.php"><span class="fa fa-sign-out-alt">注销</a></li>
						<li><a href="login.php"><span class="fa fa-sign-in-alt"></span>立即登录</a></li>
						<li><a href="register.php"><span class="fa fa-user"></span>立即注册</a></li>-->	
						<li><a href="#"><span class="fa fa-question-circle">帮助</a></li>
						<li id="contanctus" data-toggle="tooltip" data-placement="bottom" data-html="true" title="<img src='static/images/contract.png'/>"><a href="#"><span class="fab fa-weixin"></span>联系客服</a></li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>

		<!--主导航-->
		<nav class="navbar navbar-default">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<!--切换菜单-->
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_Menu" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				    </button>
					<!--LOGO-->
					<a class="navbar-brand" href="#"><img src="static/images/logo.png" /></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="main_Menu">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="index.php?menuid=0">首页 </a>
						</li>
						<li>
							<a href="invest.php?menuid=1">我要投资</a>
						</li>
						<li>
							<a href="borrow.php?menuid=2">我要借款</a>
						</li>
						<li>
							<a href="personnel.php?menuid=3">个人中心</a>
						</li>
						<li>
							<a href="#?menuid=4">新手指引</a>
						</li>
						<li>
							<a href="#?menuid=5">关于我们</a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
		<!--引入jquery库-->
	<script src="lib/jquery/jquery.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" src="dist/js/navtoggle.min.js"></script>
	<script type="text/javascript" src="src/javascript/editUsername.js"></script>