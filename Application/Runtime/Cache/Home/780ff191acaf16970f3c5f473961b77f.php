<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <title>我的资料</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/myphp/Public/static/reset.css">
  <link rel="stylesheet" href="/myphp/Public/Home/css/mine.css">
  <script src="/myphp/Public/static/jquery.js"></script>
</head>
<body>
  <p>我的资料</p>
  <div id="content">
    <div class="hang">
      <laber>账号：</laber>
      <div class="username"><?php echo ($data["username"]); ?></div>
    </div>
    <div class="hang">
      <laber>密码：</laber>
      <div class="password"><?php echo ($data["password"]); ?></div>
    </div>
    <div class="hang">
      <laber>姓名：</laber>
      <div class="name"><?php echo ($data["name"]); ?></div>
    </div>
    <div class="hang">
      <laber>性别：</laber>
      <div class="sex"><?php echo ($data["sex"]); ?></div>
    </div>
    <div class="hang">
      <laber>年龄：</laber>
      <div class="age"><?php echo ($data["age"]); ?></div>
    </div>
    <div class="hang">
      <laber>手机号：</laber>
      <div class="tell"><?php echo ($data["tell"]); ?></div>
    </div>
    <div class="hang">
      <laber>QQ号：</laber>
      <div class="qq"><?php echo ($data["qq"]); ?></div>
    </div>
    <a href="/myphp/Home/Manager/upd/id/<?php echo ($data["id"]); ?>" class="submit">修改我的资料</a>
    <a href="/myphp/Home/Manager/logout" class="submit">退出登录</a>

  </div>
</body>
</html>