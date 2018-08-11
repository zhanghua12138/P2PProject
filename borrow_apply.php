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
	    <style type="text/css">
	    	/*借款申请样式*/
			.el-tip-info{
			    padding:20px;
			    background-color: #F4F8FA;
			    border-left: 2px solid #0099DD;
			    margin-bottom: 20px;
			}
			.el-tip-info h3{
			    color:#09d;
			}
			
			#borrowForm{
			    width: 60%;
			    margin: 0px auto;
			}
	    </style>
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
					<div class="panel panel-default">
						 <button type="button" id="toggleMenu" class="btn btn-primary btn-xs">菜单切换</button>
						<div class="panel-body">
							<div class="row">
								<div class="el-tip-info">
									<h3>信用借款</h3>
									<p>
										<span class="text-info">授信额度：</span><span class="text-danger">2000 </span> &emsp;&emsp;&emsp;
										<span class="text-info">可借金额：</span><span class="text-danger">2000</span>
									</p>
								</div>
					
								<div class="page-header lead">
									借款信息
									<label class="label label-primary">信用标</label>
								</div>
								<form id="borrowForm" class="form-horizontal el-borrow-form" method="post">
									<div class="form-group">
										<label class="control-label">
											借款类型
										</label>
										<select class="form-control" name="borrowType">
											<option value="信用贷">信用贷</option>
											<option value="车易贷">车易贷</option>
											<option value="房易贷">房易贷</option>
										</select>
									</div>
									<div class="form-group">
										<label class="control-label">
											借款金额
										</label>
										<div class="input-group">
											<input class="form-control" name="borrowAmount" />
											<span class="input-group-addon">元</span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label">
											借款利息
										</label>
										<div class="input-group">
											<input class="form-control" name="currentRate" />
											<span class="input-group-addon">%</span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label">
											借款期限
										</label>
										<div class="input-group">
											<select class="form-control" name="monthes2Return">
												<option value="1">1</option>
												<option value="3">3</option>
												<option value="6">6</option>
												<option value="9">9</option>
												<option value="12">12</option>
												<option value="24">24</option>
											</select>
											<span class="input-group-addon">月</span>
										</div>
									</div>
					
									<div class="form-group">
										<label class="control-label">
											还款方式
										</label>
										<label class="radio-inline">
											<input type="radio" value="按月分期" checked="checked" name="repayment" />
											按月分期
										</label>
										<label class="radio-inline">
											<input type="radio" value="按月到期" name="repayment" />
											按月到期
										</label>
									</div>
					
									<div class="form-group">
										<label class="control-label">
											最小投标
										</label>
										<div class="input-group">
											<input class="form-control" name="minAmount" />
											<span class="input-group-addon">元</span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label">
											最大投标
										</label>
										<div class="input-group">
											<input class="form-control" name="maxAmount" />
											<span class="input-group-addon">元</span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label">
											投标奖金
										</label>
										<div class="input-group">
											<input class="form-control" name="rewardAmount" value="0" />
											<span class="input-group-addon">%</span>
										</div>
									</div>
									
									<div class="form-group">
										<label class="control-label">
											招标天数
										</label>
										<div class="input-group">
											<select class="form-control" name="disableDays">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
											</select>
											<span class="input-group-addon">天</span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label">
											借款标题
										</label>
										<input name="borrowTitle" class="form-control" />
									</div>
									<div class="form-group">
										<label>
											借款描述
										</label>
										<textarea name="description" rows="4" class="form-control col-sm-6" style="resize: none;"></textarea>
									</div>
									<div class="form-group">
										<button class="btn btn-primary" type="submit" data-loading-text="提交">
											提交申请
										</button>
									</div>
								</form>
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
	<!--引入bootstrapValidator的插件js库-->
    <script src="lib/bootstrapvalidator/dist/js/bootstrapValidator.min.js" type="text/javascript" charset="utf-8"></script>
    <!--表单验证的参数配置-->
    <script src="dist/js/formValidator.min.js" type="text/javascript" charset="utf-8"></script>
</html>