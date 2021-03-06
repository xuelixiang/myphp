<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <title>登录页面</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/myphp/Public/static/reset.css">
  <link rel="stylesheet" href="/myphp/Public/Home/css/login.css">
  <script src="/myphp/Public/static/jquery.js"></script>
</head>
<body>
  <p>用户登录</p>
  <div id="content">
    <form action="/myphp/Manager/login.html" method="post">
      <div class="hang">
        <laber>账号：</laber>
        <input type="text" class="username" name="username" />
      </div>
      <div class="hang">
        <laber>密码：</laber>
        <input type="password" class="password" name="password" />
      </div>
      <div class="hang">
        <laber>验证码：</laber>
        <input type="text" class="verify" name="verify" />
      </div>
      <div class="hang">
        <laber></laber>
        <img src="<?php echo U('verify');?>" alt="验证码图片" class="verifyimg" />
      </div>
      <input type="button" class="btn" value='立即注册'/>

    </form>  
  </div>
  
<script>
$(function(){
	$(".btn").click(function(){
		var self = $(this).parent('form');
		$.post(self.attr("action"),self.serialize(),function(data){
			$("p").text(data);
			$(".verifyimg").click();
		});
	});
	
	//初始化选中用户名输入框
	$("form").find("input[name=username]").focus();
	//刷新验证码
	var verifyimg = $(".verifyimg").attr("src");
	$(".verifyimg").click(function(){
		if( verifyimg.indexOf('?')>0){
			$(".verifyimg").attr("src", verifyimg+'&random='+Math.random());
		}else{
			$(".verifyimg").attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());
		}
	});

})
</script>
  
</body>
</html>