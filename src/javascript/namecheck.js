$(function(){
	$("#username").on("blur",function(){
		var username = $(this).val();
		var userstr="username="+username;
		$.post("../../api/namecheck.php",userstr,function(result){
			console.log(result);
		},"json")
	})
})
