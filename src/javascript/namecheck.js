$(function(){
	$("#username").on("blur",function(){
		var username = $(this).val();
		var userstr="username="+username;
		$("#username").on('keydown',function(){
			$("#namecheck").html("");
		})
		$.post("../../api/namecheck.php",userstr,function(result){
			if(result.isSuccess){
				$("#namecheck").html("用户名已存在")
				.siblings('.form-control-feedback')
				.removeClass("glyphicon-ok")
				.addClass('glyphicon-remove')
				.css({"color":"#a94442"});
				$("#username").focus().css({"border-color":"#843534"});
				$("#namecheck").css({"color":"red"});
			}else{
				$("#username").css({"border-color":"#3c763d"});
				$("#namecheck").siblings('.form-control-feedback')
				.css({"color":"#3c763d"});
			}
		},"json")
	})
})
