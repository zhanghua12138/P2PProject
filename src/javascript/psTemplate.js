$(function(){
	$.get("../../api/checkState.php",function(result){
		console.log(result);
		if(result.isSuccess){
			alert("欢迎您");
		}
		else{
			alert(result.isSuccess);
			location.href=("login.php");
		}
	})
	
})
