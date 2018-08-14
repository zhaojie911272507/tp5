<?php /*a:1:{s:74:"G:\phpStudy\PHPTutorial\WWW\tp5\application\admin\view\addstd\liststd.html";i:1534078698;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>学生信息列表</title>  
    <link rel="stylesheet" href="http://127.0.0.1/tp5/public/static/index/style/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://127.0.0.1/tp5/public/static/admin/style/css/pintuer.css">
    <link rel="stylesheet" href="http://127.0.0.1/tp5/public/static/admin/style/css/admin.css">
    <script src="http://127.0.0.1/tp5/public/static/admin/style/js/jquery.js"></script>
    <script src="http://127.0.0.1/tp5/public/static/admin/style/js/pintuer.js"></script>  
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder"> 学生列表</strong></div>
  <div class="padding border-bottom">  
  <a class="button border-yellow" href="<?php echo url('addstd/add'); ?>"><span class="icon-plus-square-o"></span> 添加成员</a>
  </div> 
  <table class="table table-hover text-center">
    <tr>
      <th width="10%">ID</th>     
      <th>学生姓名</th>  
        <th>性别</th>
        <th>专业班级</th>
        <th>项目</th>
        <th>操作</th>
    </tr>
   
   <?php if(is_array($stdinfo) || $stdinfo instanceof \think\Collection || $stdinfo instanceof \think\Paginator): $i = 0; $__LIST__ = $stdinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!--每次循环的时候都把数据复制给vo,而这里的name的值要与assign()函数里的第一个参数保持一致,list为数组，所以也可以用foreach输出-->
    <tr>
      <td width="10%"><?php echo htmlentities($vo['Id']); ?></td>      
      <td><?php echo htmlentities($vo['Name']); ?></td>
      <td><?php echo htmlentities($vo['Sex']); ?></td>
      <td><?php echo htmlentities($vo['Class']); ?></td>  
      <td></td>
      <td>
      <div class="button-group">
      <a type="button" class="button border-main" href="<?php echo url('addstd/update',array('id'=>$vo['Id'])); ?>"><span class="icon-edit"></span>修改</a>
       <a class="button border-red" href="<?php echo url('addstd/del',array('id'=>$vo['Id'])); ?>" onclick="return del()"><span class="icon-trash-o"></span>删除</a>
      </div>
      </td>
    </tr> 
    <?php endforeach; endif; else: echo "" ;endif; ?>
  </table>
  </div>
 <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <th width="30%"></th>
    <th width="40%"><?php echo $stdinfo; ?></th>
    <th width="30%"></th>
  </tr>
</table>
  <script type="text/javascript">
    function del()
    {
      if(confirm('你确定要删除吗'))
      {
        return true;
      }
      else 
      {
        return false;
      }
    }
  </script>
</body></html>