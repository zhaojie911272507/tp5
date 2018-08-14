<?php /*a:1:{s:79:"G:\phpStudy\PHPTutorial\WWW\tp5\application\member\view\member\listproject.html";i:1534142086;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title></title> 
    <link rel="stylesheet" href="http://127.0.0.1/tp5/public/static/index/style/bootstrap/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="http://127.0.0.1/tp5/public/static/admin/style/css/pintuer.css">
    <link rel="stylesheet" href="http://127.0.0.1/tp5/public/static/admin/style/css/admin.css">
    <script src="http://127.0.0.1/tp5/public/static/admin/style/js/jquery.js"></script>
    <script src="http://127.0.0.1/tp5/public/static/admin/style/js/pintuer.js"></script>  

</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder">项目列表</strong></div>
  <table class="table table-hover text-center">
    <tr>
      <th width="10%">项目名称</th>
      <th width="10%">项目概括</th>
      <th width="10%">相关文件</th>
      <th>开始时间</th>
      <th>预计完成时间</th>
      <th>项目负责人</th>
      <th>负责人联系方式</th>
    </tr>
   <?php if(is_array($project) || $project instanceof \think\Collection || $project instanceof \think\Paginator): $i = 0; $__LIST__ = $project;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!--每次循环的时候都把数据复制给vo,而这里的name的值要与assign()函数里的第一个参数保持一致,list为数组，所以也可以用foreach输出-->
    <tr>
      <td width="5%"><?php echo htmlentities($vo['ProjectName']); ?></td>
      <td><?php echo htmlentities($vo['ProjectInfo']); ?></td>
       <th width="10%"><a href="http://127.0.0.1/tp5/public/static/uploads/<?php echo htmlentities($vo['File']); ?>" style="color:#2673b4;text-decoration:underline;" download="http://127.0.0.1/tp5/public/static/uploads/<?php echo htmlentities($vo['File']); ?>">项目相关文件</a></th>
      <td><?php echo htmlentities($vo['StartTime']); ?></td>
      <td><?php echo htmlentities($vo['TerminalTime']); ?></td>
      <td><?php echo htmlentities($vo['Leader']); ?></td>
      <td><?php echo htmlentities($vo['LeaderContect']); ?></td>
    </tr> 
    <?php endforeach; endif; else: echo "" ;endif; ?>
  </table>
  </div>
   <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <th width="30%"></th>
    <th width="40%">  <?php echo $project; ?></th>
    <th width="30%"></th>
  </tr>
</table>
</body></html>