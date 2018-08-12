<?php /*a:3:{s:71:"G:\phpStudy\PHPTutorial\WWW\tp5\application\admin\view\index\index.html";i:1534040216;s:70:"G:\phpStudy\PHPTutorial\WWW\tp5\application\admin\view\common\top.html";i:1533207076;s:71:"G:\phpStudy\PHPTutorial\WWW\tp5\application\admin\view\common\left.html";i:1533729532;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>后台管理中心</title>  
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
    <li><a href="<?php echo url('info/update'); ?>" target="right"><span class="icon-caret-right"></span>网站设置</a></li>
    <li><a href="<?php echo url('pass/pass'); ?>" target="right"><span class="icon-caret-right"></span>修改密码</a></li>
    <li><a href="<?php echo url('proj/listproject'); ?>" target="right"><span class="icon-caret-right"></span>项目管理</a></li>  
    <li><a href="<?php echo url('pic/pic'); ?>" target="right"><span class="icon-caret-right"></span>首页轮播</a></li>   
    <li><a href="<?php echo url('book/listbook'); ?>" target="right"><span class="icon-caret-right"></span>留言管理</a></li>     
    <li><a href="<?php echo url('column/listcolumn'); ?>" target="right"><span class="icon-caret-right"></span>栏目管理</a></li>
  </ul>
  
  <h2><span class="icon-user"></span>成员管理</h2>
  <ul style="display:block">
    <li><a href="<?php echo url('addadmin/listadmin'); ?>" target="right"><span class="icon-caret-right"></span>管理员管理</a></li>
    <li><a href="<?php echo url('addadmin/add'); ?>" target="right"><span class="icon-caret-right"></span>增加管理员</a></li>
    <li><a href="<?php echo url('addstd/liststd'); ?>" target="right"><span class="icon-caret-right"></span>学生管理</a></li>
    <li><a href="<?php echo url('addstd/add'); ?>" target="right"><span class="icon-caret-right"></span>增加学生</a></li>
  </ul> 
    <h2><span class="icon-plus"></span>栏目管理</h2>
  <ul style="display:block">
    <li><a href="<?php echo url('column/listcolumn'); ?>" target="right"><span class="icon-caret-right"></span>内容管理</a></li>
    
   <!--  <li><a href="#" target="right"><span class="icon-caret-right"></span>添加内容</a></li>
    <li><a href="#" target="right"><span class="icon-caret-right"></span>分类管理</a></li> -->        
    </ul> 

<h2><span class="icon-link"></span>链接列表</h2>
  <ul style="display:block">
    <li><a href="<?php echo url('links/listlinks'); ?>" target="right"><span class="icon-chain"></span>友情链接管理</a></li>
  
  </ul>  
   
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
  <li><a href="<?php echo url('index/info'); ?>" target="right" class="icon-home">首页</a></li>
  <li><a href="##" id="a_leader_txt">网站信息</a></li>
  <li><b>当前语言：</b><span style="color:red;">中文</php></span>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;切换语言：<a href="##">中文</a> &nbsp;&nbsp;<a href="##">英文</a> </li>
</ul>



<div class="admin">
  <iframe scrolling="auto" rameborder="0" src="<?php echo url('index/info'); ?>" name="right" width="100%" height="100%">
    </iframe>
</div>

<div style="text-align:center;">

</div>
</body>
</html>