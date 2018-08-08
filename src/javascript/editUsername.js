$(function(){
	$.get('../../api/checkLogin.php',function(result){
		console.log(result);
	},'json');
})
