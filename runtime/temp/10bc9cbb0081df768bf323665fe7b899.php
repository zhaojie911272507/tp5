<?php /*a:1:{s:78:"G:\phpStudy\PHPTutorial\WWW\tp5\application\member\view\member\listmember.html";i:1533544606;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title></title>  
    <link rel="stylesheet" href="http://127.0.0.1/tp5/public/static/admin/style/css/pintuer.css">
    <link rel="stylesheet" href="http://127.0.0.1/tp5/public/static/admin/style/css/admin.css">
    <script src="http://127.0.0.1/tp5/public/static/admin/style/js/jquery.js"></script>
    <script src="http://127.0.0.1/tp5/public/static/admin/style/js/pintuer.js"></script>  

</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder">成员列表</strong></div>
  <table class="table table-hover text-center">
    <tr>  
      <th width="10%">姓名</th>
      <th>性别</th>
      <th>年级</th>
      <th>注册时间</th>
      <th>其他信息</th>
    </tr>
   <?php if(is_array($member) || $member instanceof \think\Collection || $member instanceof \think\Paginator): $i = 0; $__LIST__ = $member;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!--每次循环的时候都把数据复制给vo,而这里的name的值要与assign()函数里的第一个参数保持一致,list为数组，所以也可以用foreach输出-->
    <tr>
      
      <td width="10%"><?php echo htmlentities($vo['Name']); ?></td>
      <td><?php echo htmlentities($vo['Sex']); ?></td>
      <td><?php echo htmlentities($vo['Grade']); ?></td>
      <td><?php echo htmlentities($vo['TimeStamp']); ?></td>
      <td><?php echo htmlentities($vo['OtherInfo']); ?></td>
    </tr> 
    <?php endforeach; endif; else: echo "" ;endif; ?>
  </table>
  </div>
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <th width="30%"></th>
    <th width="40%"> <?php echo $member; ?></th>
    <th width="30%"></th>
  </tr>
</table>
</body></html>