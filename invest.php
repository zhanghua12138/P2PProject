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
		<!--引入分页插件的css-->
		<link rel="stylesheet" type="text/css" href="lib/jqueryPagination/jquery.pagination.css"/>
		<!--自定义样式-->
		<link rel="stylesheet" type="text/css" href="dist/css/min/invest.min.css" />
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
			            	<tbody id="gridBody">
				                <!--后台示例数据-->
				                
			            	</tbody>
						</table>
						<div style="text-align: center;">
					        <div id="page" class="m-pagination"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!--脚步-->
		<?php
		   include_once("./footer.html");
		?>
	</body>
	 <!--引入插件的js库-->
    <script src="lib/JqueryPagination/jquery.pagination-1.2.7.js" type="text/javascript" charset="utf-8"></script>
	 <!--引入jquery模版引擎-->
    <script src="lib/jqueryTemplate/jquery.tmpl.js" type="text/javascript" charset="utf-8"></script>
    <!--定义前端模版-->
    <script id="investTmpl" type="text/html">
    	<tr>
			<td>${userid}</td>
			<td>${borrowTitle}</td>
			<td class="text-info">${currentRate}%</td>
			<td class="text-info">${borrowAmount}</td>
			<td>${repayment}</td>
			<td>${(alreadyAmount/borrowAmount*100).toFixed(2)}%</td>
			<td><a class="btn btn-danger btn-sm" href="borrow_info.php?menuid=3&id=${borrowid}">查看</a></td>
		</tr>
    </script>
    <script type="text/javascript">
    	//分页插件的参数配置
    	$("#page").page({
            debug: false,
            showInfo: true,
            showJump: true,
            pageSize: 3, //自定义每页条数
            showPageSizes: true,
            //远程请求的地址配置
            remote: {
                url: 'api/getInvestPager.php',
                success: function (data) {
                    //console.log(data);
                    //console.log("返回的数据，对象数组",data.list);
                    //语法：$(模版选择器).tmpl(数据对象获取数组)
		    		var htmlStr=$("#investTmpl").tmpl(data.list);
		    		
		    		//把html更新到页面的dom中
		    		$("#gridBody").html(htmlStr);
                }
            }
        });
        $("#page").on("pageClicked", function (event, pageIndex) {
            //单击页面的事件
            //$("#eventLog").append('EventName = pageClicked , pageIndex = ' + pageIndex + '<br />');
        }).on('jumpClicked', function (event, pageIndex) {
            //跳转页面的事件
            //$("#eventLog").append('EventName = jumpClicked , pageIndex = ' + pageIndex + '<br />');
        }).on('pageSizeChanged', function (event, pageSize) {
            //修改每页大小的事件
            //$("#eventLog").append('EventName = pageSizeChanged , pageSize = ' + pageSize + '<br />');
        });
    </script>
</html>