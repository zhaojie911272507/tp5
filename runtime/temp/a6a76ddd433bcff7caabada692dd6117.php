<?php /*a:1:{s:74:"G:\phpStudy\PHPTutorial\WWW\tp5\application\member\view\book\listbook.html";i:1533544702;}*/ ?>
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
<form method="post" action="">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 留言</strong></div>
  
    <table class="table table-hover text-center">
      <tr>
        <th width="120">ID</th>
        <th>姓名</th>
        <th>工作</th>
        <th>电话</th>
        <th>邮箱</th>
        <th width="25%">留言内容</th>
         <th width="120">留言时间</th>
        <th>操作</th> 
      </tr>
         <?php if(is_array($book) || $book instanceof \think\Collection || $book instanceof \think\Paginator): $i = 0; $__LIST__ = $book;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <tr>
          <td><input type="checkbox" name="id[]" value="1" />
            <?php echo htmlentities($vo['Id']); ?></td>
          <td><?php echo htmlentities($vo['Name']); ?></td>
          <td><?php echo htmlentities($vo['Job']); ?></td>
          <td><?php echo htmlentities($vo['Tel']); ?></td> 
          <td><?php echo htmlentities($vo['Email']); ?></td>   
          <td><?php echo htmlentities($vo['Content']); ?></td>
          <td><?php echo htmlentities($vo['Timestamp']); ?></td>
        </tr>
      <?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
  </div>
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <th width="30%"></th>
    <th width="40%"><?php echo $book; ?></th>
    <th width="30%"></th>
  </tr>
</table>
</form>
</body></html>