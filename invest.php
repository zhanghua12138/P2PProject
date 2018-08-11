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
		<link rel="stylesheet" type="text/css" href="dist/css/min/invest.min.css" />
		<style type="text/css">
			
		</style>
		<!--兼容低版本的浏览器-->
		<!--[if lt IE 9]>
	      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body>
		<!--头部-->
		<?php
		   include_once("./header.php");
		?>
		<!--内容部分-->
		<div class="container" id="invest">
			<h4>投资列表</h4>
			<div class="row">
				<p class="col-lg-1">标的状态</p>
				<div class="col-lg-11">
					<button class="btn btn-default current" type="submit">全部</button><button class="btn btn-default" type="submit">招标中</button><button class="btn btn-default" type="submit">还款中</button>
				</div>
				
			</div>
		</div>
		<!--投资数据-->
		<div class="container" id="investMsg">
			<div class="panel-body">
						<table class="table table-hover el-table">
							<thead>
					            <tr>
					                <th>借款人</th>
					                <th class="hide620">借款标题</th>
					                <th>年利率</th>
					                <th>金额</th>
					                <th class="hide620">还款方式</th>
					                <th>进度</th>
					                <th>操作</th>
					            </tr>
				            </thead>
			            	<tbody>
				                <!--后台示例数据-->
				                <tr><!--第一条数据开始-->
				                    <td>张三</td>
				                    <td class="hide620">给我2000度过难关</td>
				                    <td class="text-info"> 10.00%
				                    </td>
				                    <td class="text-info">2,000.00</td>
				                    <td class="hide620">
				                        按月分期还款
				                    </td>
				                    <td>  
				                            78.00%
				                    </td>
				                    <td><a class="btn btn-danger btn-sm" href="borrow_info.php?menuid=3&id=${userId}">查看</a></td>
				                </tr><!--第一条数据结束-->
				                <tr><!--第二条数据开始-->
				                    <td>王五</td>
				                    <td class="hide620">江湖救急，借100吃饭</td>
				                    <td class="text-info"> 12.00%
				                    </td>
				                    <td class="text-info">100.00</td>
				                    <td class="hide620">
				                        按月到期还款
				                    </td>
				                    <td>
				                        
				                            100.00%
				                
				                    </td>
				                    <td><a class="btn btn-danger btn-sm" href="borrow_info.php?menuid=3&id=${userId}"">查看</a></td>
				                </tr><!--第二条数据结束-->
			            	</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		
		<!--脚步-->
		<?php
		   include_once("./footer.html");
		?>
	</body>
</html>