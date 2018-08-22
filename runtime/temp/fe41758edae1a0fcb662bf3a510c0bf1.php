<?php /*a:3:{s:72:"G:\phpStudy\PHPTutorial\WWW\tp5\application\member\view\index\index.html";i:1534858652;s:71:"G:\phpStudy\PHPTutorial\WWW\tp5\application\member\view\common\top.html";i:1533473153;s:72:"G:\phpStudy\PHPTutorial\WWW\tp5\application\member\view\common\left.html";i:1533735504;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>我的主页</title>
    <link rel="stylesheet" href="http://127.0.0.1/tp5/public/static/index/style/bootstrap/css/bootstrap.min.css">   
    <link rel="stylesheet" href="http://127.0.0.1/tp5/public/static/admin/style/css/pintuer.css">
    <link rel="stylesheet" href="http://127.0.0.1/tp5/public/static/admin/style/css/admin.css">
    <script src="http://127.0.0.1/tp5/public/static/admin/style/js/jquery.js"></script>   
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">
  <div class="logo margin-big-left fadein-top">
    <h1><img src="http://127.0.0.1/tp5/public/static/admin/image/y.jpg" class="radius-circle rotate-hover" height="50" alt="" /><?php echo htmlentities(app('request')->session('username')); ?> </h1>
  </div>
  <div class="head-l"><a class="button button-little bg-green" href="<?php echo url('index/index/index'); ?>" target="_blank"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;<a href="##" class="button button-little bg-blue"><span class="icon-wrench"></span> 清除缓存</a> &nbsp;&nbsp;<a class="button button-little bg-red" href="<?php echo url('login/logout'); ?>"><span class="icon-power-off"></span> 退出登录</a></div>
</div>
  <div style="overflow:auto" class="leftnav">
  <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
  <h2><span class="icon-home"></span>基本设置</h2>
  <ul style="display:block">
   
    <li><a href="<?php echo url('member/listproject'); ?>" target="right"><span class="icon-caret-right"></span>项目列表</a></li>
    <li><a href="<?php echo url('book/listbook'); ?>" target="right"><span class="icon-caret-right"></span>留言列表</a></li>
  </ul>
  <h2><span class="icon-user"></span>成员列表</h2>
  <ul style="display:block">
    <li><a href="<?php echo url('member/listmember'); ?>" target="right"><span class="icon-caret-right"></span>成员</a></li>
  </ul>   

  <h2><a href="<?php echo url('pass/pass'); ?>" target="right"><span class="icon-key"></span>修改密码</a></h2>
</div>

<script type="text/javascript">
$(function(){
  $(".leftnav h2").click(function(){
    $(this).next().slideToggle(200);  
    $(this).toggleClass("on"); 
  })
  $(".leftnav ul li a").click(function(){
      $("#a_leader_txt").text($(this).text());
      $(".leftnav ul li a").removeClass("on");
    $(this).addClass("on");
  })
});
</script>
<ul class="bread">
  <li><a href="##" class="icon-home"> 首页</a></li>
  <li><a href="##" id="a_leader_txt">网站信息</a></li>
  <li><b>当前语言：</b><span style="color:red;">中文</php></span>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;切换语言：<a href="##">中文</a> &nbsp;&nbsp;<a href="##">英文</a> </li>
</ul>



<div class="admin">
  <iframe scrolling="auto" rameborder="0" src="<?php echo url('member/listproject'); ?>" name="right" width="100%" height="100%">
    </iframe>
</div>

<div style="text-align:center;">

</div>
</body>
</html>