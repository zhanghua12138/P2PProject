$(function(){
	$.get("../../api/checkState.php",function(result){
		if(result.isSuccess){
			alert("欢迎"+result.username);
		}
		else{
			alert("请先登录");
			location.href=("login.php");
		}
	},'json')
	
})
