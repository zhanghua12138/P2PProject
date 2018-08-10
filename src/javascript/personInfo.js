$(function(){
	$.get("../../api/personInfo.php",function(result){
//		console.log(result["username"]);
		$("#personName").html(result['username']);
		$("#lastlogindate").html(result.lastlogindate);
	},"json")
})
		
