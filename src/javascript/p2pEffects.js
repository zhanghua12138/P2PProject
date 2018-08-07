//文档加载完毕就调用工具提示的方法
$(function () {
	//联系客服的二维码
  $('#contanctus').tooltip();	
//导航激活样式切换
  $("#main_Menu .nav li").on('click',function(){
  	console.log(1);
  	$(this).addClass("active").siblings().removeClass("active");
  })
})