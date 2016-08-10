<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>展示数据</title>
<link rel="stylesheet" type="text/css" href="/myphp/Public/Home/css/create.css"/>
<script src="/myphp/Public/static/jquery.js"></script>
</head>
<body>
<div id="top_div">
  <span>提示文字：</span><span class="top">展示数据</span>
</div>
        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["id"]); ?>=><?php echo ($vo["name"]); ?>=><?php echo ($vo["sex"]); ?>=><?php echo ($vo["age"]); ?>+++<a href="/myphp/Home/Goods/upd/id/<?php echo ($vo["id"]); ?>"><?php echo ($lang["SAVE"]); ?></a>+++<a href="/myphp/Home/Goods/del/id/<?php echo ($vo["id"]); ?>"><?php echo ($lang[DELETE]); ?></a><br/><?php endforeach; endif; else: echo "" ;endif; ?>


</body>
</html>