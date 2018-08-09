<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<!--视口: 兼容移动端-->
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
		<!--引入bootstrap核心样式-->
		<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css"/>
		<!--引入bootstrapValidator的核心样式-->
		<link rel="stylesheet" type="text/css" href="lib/bootstrapvalidator/dist/css/bootstrapValidator.min.css"/>
		<!--引入图标字体-->
		<link rel="stylesheet" type="text/css" href="lib/fontawesome/css/fontawesome-all.min.css"/>	
		<!--自定义样式-->
		<link rel="stylesheet" type="text/css" href="dist/css/min/userRegLogin.min.css"/>
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
        
        <!--模板内容的开始-->
        <div class="container" id="loginReg">
        	<div class="panel panel-default">
			  <div class="panel-heading">用户注册向导</div>
			  <div class="panel-body">
			     <form id="regForm" action="api/userAdd.php" method="post">
					  <div class="form-group">
					    <label for="username">用户账号</label>
					    <input type="text" class="form-control" name="username" id="username" placeholder="请输入用户名">
					  </div>
					  <div class="form-group">
					    <label for="password1">登录密码</label>
					    <input type="password" class="form-control" name="password1" id="password1" placeholder="">
					  </div>
					   <div class="form-group">
					    <label for="password2">确认密码</label>
					    <input type="password" class="form-control" name="password2" id="password2" placeholder="">
					  </div>
					  <div class="form-group">
					    <label for="realname">真实姓名</label>
					    <input type="text" class="form-control" name="realname" id="realname" placeholder="请输入姓名">
					  </div>
					  <div class="form-group">
					    <label for="mobile">手机号码</label>
					    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="请输入手机号码">
					  </div>
					  <div class="form-group">
					    <label>用户性别</label>
					    	<label>
							  <input type="radio" name="sex" value="男" checked="checked">男
							</label>
					    	<label>
							  <input type="radio" name="sex" value="女">女
							</label>
						
					  </div>
					  <div class="form-group checkbox">
					    <label>
					      <input name="isAgree" type="checkbox">同意注册协议
					    </label>
					  </div>
					  <button type="submit" class="btn btn-danger">立即注册</button> <a href="login.php">已有账号去登录</a>
				</form>
			  </div>
			</div>
        </div>
        <!--模板内容的结束-->
		<!--注册成功或者失败的模态框-->
		<div class="modal fade" id="regLoginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title">注册结果</h4>
		      </div>
		      <div class="modal-body">
		      	<a href='login.php' class="regSuccess"><span class='glyphicon glyphicon-ok'></span>注册成功<span id='count'>5</span> 秒后自动跳转,点击立即跳转</a>
		      </div>
		    </div>
		  </div>
		</div>
		<?php
		   include_once("./footer.html");
		?>
	</body>
    <!--引入bootstrapValidator的插件js库-->
    <script src="lib/bootstrapvalidator/dist/js/bootstrapValidator.min.js" type="text/javascript" charset="utf-8"></script>
    <!--表单验证的参数配置-->
    <script src="dist/js/formValidator.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="dist/js/namecheck.min.js"></script>
</html>