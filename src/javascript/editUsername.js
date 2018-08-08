$(function(){
	$.get("../../api/checkState.php",function (result) {
		//console.log("身份验证的结果",result);
		var htmlStr;
		if(result.isSuccess){
			htmlStr=`<li><a href="personnel.php?menuid=3"><span class="fa fa-user"></span>${result.username}</a></li>
					<li><a href="personnel.php?menuid=3"><span class="fa fa-money-bill-alt"></span>赶快充值</a></li>
					<li><a href="/api/loginOut.php"><span class="fa fa-sign-out-alt">注销</a></li>`;
		}
		else{
			htmlStr=`<li><a href="login.php"><span class="fa fa-sign-in-alt"></span>立即登录</a></li>
					<li><a href="register.php"><span class="fa fa-user"></span>立即注册</a></li>`;
		}
		$("#homepage").after(htmlStr);
	},"json");
})
