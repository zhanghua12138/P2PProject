$(function(){
	$.get("../../api/checkState.php",function (result) {
		//console.log("身份验证的结果",result);
		var htmlStr;
		//根据返回session里是否存在当前用户,来更改头部导航的选项和把用户名动态写入头部
		if (result.isSuccess) {
			htmlStr = "<li><a href=\"personnel.php?menuid=3\"><span class=\"fa fa-user\"></span>" + result.username + "</a></li>\n\t\t\t\t\t<li><a href=\"personnel.php?menuid=3\"><span class=\"fa fa-money-bill-alt\"></span>\u8D76\u5FEB\u5145\u503C</a></li>\n\t\t\t\t\t<li><a href=\"/api/loginOut.php\"><span class=\"fa fa-sign-out-alt\">\u6CE8\u9500</a></li>";
		} else {
			htmlStr = "<li><a href=\"login.php\"><span class=\"fa fa-sign-in-alt\"></span>\u7ACB\u5373\u767B\u5F55</a></li>\n\t\t\t\t\t<li><a href=\"register.php\"><span class=\"fa fa-user\"></span>\u7ACB\u5373\u6CE8\u518C</a></li>";
		}
		$("#homepage").after(htmlStr);
	},"json");
})
