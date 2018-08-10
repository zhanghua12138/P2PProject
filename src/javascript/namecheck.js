$(function(){
	//用户名重复验证
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
	});
	//手机号重复验证
	$("#mobile").on("blur",function(){
		var mobile = $(this).val();
		var mobilestr="mobile="+mobile;
		$("#mobile").on('keydown',function(){
			$("#mobilecheck").html("");
		})
		$.post("../../api/mobilecheck.php",mobilestr,function(result){
			if(result.isSuccess){
				$("#mobilecheck").html("手机号已注册")
				.siblings('.form-control-feedback')
				.removeClass("glyphicon-ok")
				.addClass('glyphicon-remove')
				.css({"color":"#a94442"});
				$("#mobile").focus().css({"border-color":"#843534"});
				$("#mobilecheck").css({"color":"red"});
			}else{
				$("#mobile").css({"border-color":"#3c763d"});
				$("#mobilecheck").siblings('.form-control-feedback')
				.css({"color":"#3c763d"});
			}
		},"json")
	});
})
