$(function(){
    var winWidth,winHeight;
	var resize=function(){
        winWidth=$(window).width();
        winHeight=$(window).height();
	}
	
	/*对手机端小屏幕下浏览器的兼容性处理*/
	$("#mulu").click(function(){
		$(this).next("ul").slideToggle();
	});
	
	

	$(".placeholder").click(function(){
		$(this).addClass("border_color").find("span").hide().prev("input").focus();
	});
	$(".placeholder input").blur(function(){
		$(this).parent().removeClass("border_color");
		if($(this).val()==""||$(this).val()==" "||$(this).val()=="  "){
			$(this).next("span").show();
		}else{
			return false;
		}
	});
	



	

	
})











