<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <title>注册页面</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/myphp/Public/static/reset.css">
  <link rel="stylesheet" href="/myphp/Public/Home/css/register.css">
  <script src="/myphp/Public/static/jquery.js"></script>
</head>
<body>
  <p>注册信息完善</p>
  <div id="content">
    <form id="form" action="<?php echo U('register');?>" method="post" enctype="multipart/form-data" >
      <div class="hang">
        <laber>账号：</laber>
        <input type="text" class="username" name="username" />
      </div>
      <div class="hang">
        <laber>密码：</laber>
        <input type="password" class="password" name="password" />
      </div>
      <div class="hang">
        <laber>确认密码：</laber>
        <input type="password" class="password2" name="password2" />
      </div>
      <div class="hang">
        <laber>姓名：</laber>
        <input type="text" class="name" name="name" />
      </div>
      <div class="hang">
        <laber>性别：</laber>
        <input type="text" class="sex" name="sex" />
      </div>
      <div class="hang">
        <laber>年龄：</laber>
        <input type="text" class="age" name="age" />
      </div>
      <div class="hang">
        <laber>手机号：</laber>
        <input type="text" class="tell" name="tell" />
      </div>
      <div class="hang">
        <laber>QQ号：</laber>
        <input type="text" class="qq" name="qq" />
      </div>
      <div class="hang">
        <laber>上传文件：</laber>
        <input type="file" class="img" name="img" />
      </div>
      <!-- <input type="button" class="btn" value='立即注册'/> -->
      <input type="submit" class="btn" value='立即注册'/>

    </form>  
  </div>
  
<script>
$(function(){
/* 	$(".btn").click(function(){
		var self = $(this).parent('form');
		//alert(self);
		//var formData = new FormData(document.getElementById("form"));
		//alert(formData);
		//self.serialize()
		$.post(self.attr("action"),self.serialize(),function(data){
			$("p").text(data);
		});
	});
 */
})
</script>
  
</body>
</html>