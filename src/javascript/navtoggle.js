$(function(){
	//导航栏切换效果
	var url = location.href;//获取网页地址
	var menuid = url.split('=')[1];//获取当前菜单的id
	//通过不同的id切换菜单样式
	if(menuid==1){
		$("#main_Menu .nav li").eq(menuid).addClass('active').siblings().removeClass('active');
	}else if(menuid==2){
		$("#main_Menu .nav li").eq(menuid).addClass('active').siblings().removeClass('active');
	}else if(menuid==3){
		$("#main_Menu .nav li").eq(menuid).addClass('active').siblings().removeClass('active');
	}else if(menuid==4){
		$("#main_Menu .nav li").eq(menuid).addClass('active').siblings().removeClass('active');
	}else if(menuid==5){
		$("#main_Menu .nav li").eq(menuid).addClass('active').siblings().removeClass('active');
	}
})
