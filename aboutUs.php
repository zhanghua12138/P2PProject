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
		<!--页面内容-->
		<div class="container">
			<h3>用户学历统计情况</h3>
			<!--echart报表-->
			<div id="echartsMain" style="width: 80%;height:400px;"></div>
		</div>
		<?php
			include_once("./footer.html");
		?>
	</body>
	<!-- 引入 ECharts 文件 -->
	<script src="lib/echarts/echarts-all.js"></script>
	<script type="text/javascript">
		var myChart = echarts.init(document.getElementById('echartsMain'));

		//指定图表的配置项和数据
		var option = {
   title: {
				text: '用户学历统计情况',
				subtext: '蓝源p2p平台',
				x: 'center'
			},
    tooltip : {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },
    legend: {
        x : 'center',
        y : 'bottom',
        data:['博士', '硕士', '本科', '大专', '高中/中专','初中','小学']
    },
    toolbox: {
        show : true,
        feature : {
            mark : {show: false},
            dataView : {show: false, readOnly: false},
            magicType : {
                show: false, 
                type: ['pie', 'funnel']
            },
            restore : {show: false},
            saveAsImage : {show: true}
        }
    },
    calculable : true,
    series : [
        {
            name:'半径模式',
            type:'pie',
            radius : [20, 110],
            center : ['25%', 200],
            roseType : 'radius',
            width: '40%',       // for funnel
            max: 40,            // for funnel
            itemStyle : {
                normal : {
                    label : {
                        show : false
                    },
                    labelLine : {
                        show : false
                    }
                },
                emphasis : {
                    label : {
                        show : true
                    },
                    labelLine : {
                        show : true
                    }
                }
            },
            data:[]
        },
        {
            name:'面积模式',
            type:'pie',
            radius : [30, 110],
            center : ['75%', 200],
            roseType : 'area',
            x: '50%',               // for funnel
            max: 40,                // for funnel
            sort : 'ascending',     // for funnel
            data:[]
        }
    ]
};
		
		//使用刚指定的配置项和数据显示图表。
		myChart.setOption(option);
		
		//数据不能写死，只能从数据库中动态获取
		$.get("api/getUserEdu.php",function (eduData) {
//			console.log("后台获取的学历数据",eduData);
			
			//把后端提供的数据动态设置到配置对象中
			option.series[0].data=eduData;
			option.series[1].data=eduData;
			//使用刚指定的配置项和数据显示图表。
            myChart.setOption(option);
            
            //隐藏默认的loading动画
            myChart.hideLoading();
		},"json");
	</script>
</html>