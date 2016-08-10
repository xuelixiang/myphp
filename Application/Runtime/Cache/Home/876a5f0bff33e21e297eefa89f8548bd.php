<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <title>修改页面</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/myphp/Public/static/reset.css">
  <link rel="stylesheet" href="/myphp/Public/Home/css/upd.css">
  <script src="/myphp/Public/static/jquery.js"></script>
</head>
<body>
  <p>修改以下信息</p>
  <div id="content">
    <form action="/myphp/Home/Manager/upd/id/75" method="post">
<!--       <div class="hang">
        <laber>id：</laber>
        <input type="text" class="id" name="id" value="<?php echo ($data["id"]); ?>" />
      </div>     
 -->      
      <div class="hang">
        <laber>账号：</laber>
        <input type="text" class="username" name="username" value="<?php echo ($data["username"]); ?>" />
      </div>
      <div class="hang">
        <laber>密码：</laber>
        <input type="password" class="password" name="password" value="<?php echo ($data["password"]); ?>" />
      </div>
      <div class="hang">
        <laber>姓名：</laber>
        <input type="text" class="name" name="name" value="<?php echo ($data["name"]); ?>" />
      </div>
      <div class="hang">
        <laber>性别：</laber>
        <input type="text" class="sex" name="sex" value="<?php echo ($data["sex"]); ?>" />
      </div>
      <div class="hang">
        <laber>年龄：</laber>
        <input type="text" class="age" name="age" value="<?php echo ($data["age"]); ?>" />
      </div>
      <div class="hang">
        <laber>手机号：</laber>
        <input type="text" class="tell" name="tell" value="<?php echo ($data["tell"]); ?>" />
      </div>
      <div class="hang">
        <laber>QQ号：</laber>
        <input type="text" class="qq" name="qq" value="<?php echo ($data["qq"]); ?>" />
      </div>
      <input type="button" class="btn" value='确定修改'/>

    </form>  
  </div>
  
<script>
$(function(){
	$(".btn").click(function(){
		var self = $(this).parent('form');
		$.post(self.attr("action"),self.serialize(),function(data){
			$("p").text(data);
		});
	});

})
</script>
  
 
</body>
</html>