//文档加载完毕就调用工具提示的方法
$(function () {
	//联系客服的二维码
  $('#contanctus').tooltip();	
  //会员中心菜单的切换效果
  //注册点击事件
  $("#toggleMenu").on("click",function(){
  	 //在主体内容上面添加和移出active
  	 //toggleClass(class,switch) 对设置或移除被选元素的一个或多个类进行切换。
  	 $("#mainContent").toggleClass("active");
  });
   var startX;
  $("body").on("touchstart",function (e) {
  	 startX=e.originalEvent.changedTouches[0].clientX;
  	 //console.log(startX);
  });
  
  $("body").on("touchend",function (e) {
  	 var endX=e.originalEvent.changedTouches[0].clientX;
  	 
  	 //方法1： 根据正负值决定添加还是移出active
  	 var distanceX=endX-startX;
  	 if(distanceX>=50){
  	 	 $("#mainContent").removeClass("active");
  	 }
  	 else if(distanceX<=-50){
  	 	 $("#mainContent").addClass("active");
  	 }
  });
})