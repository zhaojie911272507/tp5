<?php /*a:1:{s:75:"G:\phpStudy\PHPTutorial\WWW\tp5\application\admin\view\proj\projectmem.html";i:1534578538;}*/ ?>
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
  <div class="panel-head"><strong class="icon-reorder">成员管理</strong></div>
  <div class="padding border-bottom">  
  </div>
  <form method="post" class="form-x" action="">
  <table class="table table-hover text-center">
    <tr>
      <th width="10%">ID</th>
      <th width="20%">项目名称</th>
      <th width="10%">负责人</th>
      <th width="10%">成员</th>
      <th width="10%">成员</th>
      <th width="10%">成员</th>
      <th width="10%">成员</th>
      <th width="10%">成员</th>
      <th width="10%">成员</th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
    </tr>
    <tr>
      <td><?php echo htmlentities($projectmem['Id']); ?></td>  
      <td ><?php echo htmlentities($projectmem['ProjectName']); ?></td>
      <td rowspan="2"><?php echo htmlentities($projectmem['Leader']); ?><br><br><a href="<?php echo url('proj/addleader',array('id'=>$projectmem['Id'])); ?>" class="btn btn-danger btn-sm shiny">修改</a></td> 
      <?php if($projectmem['Member1']=="" OR $projectmem['Member1']=="null"): ?>
      <td><a href="<?php echo url('proj/addmem1',array('id'=>$projectmem['Id'])); ?>"  class="btn btn-primary btn-sm shiny"><i class="icon-plus"></i>添加</a></td>
      <?php else: ?>
      <td rowspan="2"><?php echo htmlentities($projectmem['Member1']); ?><br><br><a href="<?php echo url('proj/addmem1',array('id'=>$projectmem['Id'])); ?>"  class="btn btn-danger btn-sm shiny">修改</a></td>
      <?php endif; if($projectmem['Member2']=="" OR $projectmem['Member2']=="null"): ?>
      <td><a href="<?php echo url('proj/addmem2',array('id'=>$projectmem['Id'])); ?>" class="btn btn-primary btn-sm shiny"><i class="icon-plus"></i>添加</a></td>
      <?php else: ?>
      <td rowspan="2"><?php echo htmlentities($projectmem['Member2']); ?><br><br><a href="<?php echo url('proj/addmem2',array('id'=>$projectmem['Id'])); ?>" class="btn btn-danger btn-sm shiny">修改</a></td>
      <?php endif; if($projectmem['Member3']=="" OR $projectmem['Member3']=="null"): ?>
      <td><a href="<?php echo url('proj/addmem3',array('id'=>$projectmem['Id'])); ?>" class="btn btn-primary btn-sm shiny"><i class="icon-plus"></i>添加</a></td>
      <?php else: ?>
      <td rowspan="2"><?php echo htmlentities($projectmem['Member3']); ?><br><br><a href="<?php echo url('proj/addmem3',array('id'=>$projectmem['Id'])); ?>" class="btn btn-danger btn-sm shiny">修改</a></td>
      <?php endif; if($projectmem['Member4']=="" OR $projectmem['Member4']=="null"): ?>
      <td><a href="<?php echo url('proj/addmem4',array('id'=>$projectmem['Id'])); ?>" class="btn btn-primary btn-sm shiny"><i class="icon-plus"></i>添加</a></td>
      <?php else: ?>
      <td rowspan="2"><?php echo htmlentities($projectmem['Member4']); ?><br><br><a href="<?php echo url('proj/addmem4',array('id'=>$projectmem['Id'])); ?>" class="btn btn-danger btn-sm shiny">修改</a rowspan="2"></td>
      <?php endif; if($projectmem['Member5']=="" OR $projectmem['Member5']=="null"): ?>
      <td><a href="<?php echo url('proj/addmem5',array('id'=>$projectmem['Id'])); ?>" class="btn btn-primary btn-sm shiny"><i class="icon-plus"></i>添加</a></td>
      <?php else: ?>
      <td rowspan="2"><?php echo htmlentities($projectmem['Member5']); ?><br><br><a href="<?php echo url('proj/addmem5',array('id'=>$projectmem['Id'])); ?>" class="btn btn-danger btn-sm shiny">修改</a></td>
      <?php endif; if($projectmem['Member6']=="" OR $projectmem['Member6']=="null"): ?>
      <td><a href="<?php echo url('proj/addmem6',array('id'=>$projectmem['Id'])); ?>" class="btn btn-primary btn-sm shiny"><i class="icon-plus"></i>添加</a></td>
      <?php else: ?>
      <td rowspan="2"><?php echo htmlentities($projectmem['Member6']); ?><br><br><a href="<?php echo url('proj/addmem6',array('id'=>$projectmem['Id'])); ?>" class="btn btn-danger btn-sm shiny">修改</a></td>
      <?php endif; ?>

    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr> 
  </table>
</div>
</form>
<script type="text/javascript">
function del()
{
	if(confirm("您确定要删除吗?"))
  {
    return true;
	}else{
    return false;
  }
}
</script>
</body></html>