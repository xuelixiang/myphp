<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <title>首页</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/myphp/Public/static/reset.css">
  <link rel="stylesheet" href="/myphp/Public/static/page.css">
  <link rel="stylesheet" href="/myphp/Public/Home/css/index.css">
  <script src="/myphp/Public/static/jquery.js"></script>
</head>
<body>
  <div id="content">
    <p>以下为全部用户信息</p>
    <ul class="shang">
      <li class="first">序号</li>
      <li class="mid">账号</li>
      <li class="mid">密码</li>
      <li>姓名</li>
      <li>性别</li>
      <li>年龄</li>
      <li class="mid">手机号</li>
      <li class="mid">QQ号</li>
      <li class="chang">注册时间</li>
      <li class="chang">登录时间</li>
      <li>是否修改</li>
      <li>是否删除</li>
    </ul>

<?php if(is_array($data)): $key = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><ul class="xia">
      <li class="first"><?php echo ($key); ?></li>
      <li class="mid"><?php echo ($vo[username]); ?></li>
      <li class="mid"><?php echo ($vo[password]); ?></li>
      <li><?php echo ($vo[name]); ?></li>
      <li><?php echo ($vo["sex"]); ?></li>
      <li><?php echo ($vo[age]); ?></li>
      <li class="mid"><?php echo ($vo[tell]); ?></li>
      <li class="mid"><?php echo ($vo[qq]); ?></li>
      <li class="chang"><?php echo ($vo[register_time]); ?></li>
      <!-- <li class="chang"><?php echo ($vo[login_time]); ?></li> -->
      <li class="chang"><img src="/myphp/Public/<?php echo ($vo["small_img_url"]); ?>" /></li>
      <a href="/myphp/Home/Manager/upd/id/<?php echo ($vo["id"]); ?>"><li>修改</li></a>
      <a href="/myphp/Home/Manager/del/id/<?php echo ($vo["id"]); ?>"><li>删除</li></a>
    </ul><?php endforeach; endif; else: echo "" ;endif; ?>

    <div class="b-page"><?php echo ($page); ?></div>


  </div>
</body>
</html>