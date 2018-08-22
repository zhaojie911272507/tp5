<?php /*a:1:{s:78:"G:\phpStudy\PHPTutorial\WWW\tp5\application\member\view\member\projectmem.html";i:1534774106;}*/ ?>
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
<style type="text/css">
.label{
  font-size:15px;
}
</style>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder">参与成员</strong></div>
  <div class="padding border-bottom">  
  </div>
  <form method="post" class="form-x" action="">
  <table class="table table-hover text-center">
    <tr>
      <th width="16%">项目名称</th>
      <th width="10%">负责人</th>
      <th width="10%">成员</th>
      <th width="10%">成员</th>
      <th width="10%">成员</th>
      <th width="10%">成员</th>
      <th width="10%">成员</th>
      <th width="10%">成员</th>
      <th></th>
    </tr>
    <tr>
      <td><?php echo htmlentities($projectmem['ProjectName']); ?></td>
      <td><?php echo htmlentities($projectmem['Leader']); ?></td> 
      <td><?php echo htmlentities($projectmem['Member1']); ?></td>
      <td><?php echo htmlentities($projectmem['Member2']); ?></td>
      <td><?php echo htmlentities($projectmem['Member3']); ?></td>
      <td><?php echo htmlentities($projectmem['Member4']); ?></td>
      <td><?php echo htmlentities($projectmem['Member5']); ?></td>
      <td><?php echo htmlentities($projectmem['Member6']); ?></td>
      <td></td>
    </tr>
  </table>
</div>
</form>
</body></html>