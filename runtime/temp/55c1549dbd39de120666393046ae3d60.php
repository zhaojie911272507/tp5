<?php /*a:1:{s:77:"G:\phpStudy\PHPTutorial\WWW\tp5\application\admin\view\services\services.html";i:1534220172;}*/ ?>
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
  font-size:10px;
}
</style>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder"> 前台服务显示列表</strong></div>
  <div class="padding border-bottom">  
  <button type="button" class="button border-yellow" onclick="window.location.href='#add'"><span class="icon-plus-square-o"></span> 添加内容</button>
  </div>
  <table class="table table-hover text-center">
    <tr>
      <th width="10%">ID</th>
      <th width="10%">排序</th>
      <th width="10%">标题</th>
      <th width="20%">简单概括</th>
      <th width="20%">具体描述</th>
      <th width="15%">操作</th>
    </tr>
   <?php if(is_array($services) || $services instanceof \think\Collection || $services instanceof \think\Paginator): $i = 0; $__LIST__ = $services;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
    <tr>
      <td><?php echo htmlentities($vo['Id']); ?></td>  
      <td><?php echo htmlentities($vo['Sort']); ?></td>  
      <td><?php echo htmlentities($vo['Title']); ?></td>      
      <td><?php echo htmlentities($vo['Summary']); ?></td>
      <td><?php echo htmlentities($vo['Content']); ?></td>
      <td><div class="button-group">
      <a class="button border-main" href="<?php echo url('services/update',array('id'=>$vo['Id'])); ?>"><span class="icon-edit"></span> 修改</a>
      <a class="button border-red" onclick="return del()" href="<?php echo url('services/del',array('id'=>$vo['Id'])); ?>" ><span class="icon-trash-o"></span> 删除</a>
      </div></td>
    </tr>
    <?php endforeach; endif; else: echo "" ;endif; ?>
  </table>
</div>

 <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <th width="30%"></th>
    <th width="40%"><?php echo $services; ?></th>
    <th width="30%"></th>
  </tr>
</table>
<script type="text/javascript">
function del()
{
	if(confirm("您确定要删除吗?"))
  {
    return true;
	}
  else
  {
    return false;
  }
}
</script>
<div class="panel admin-panel margin-top" id="add">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 增加内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" enctype="multipart/form-data" action="<?php echo url('services/add'); ?>">    
        <div class="form-group">
        <div class="label">
          <label>排序：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="sort" value=""  data-validate="required:填写排序,number:排序必须为数字" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="title" value=""  data-validate="required:填写服务项目标题，例如：APP开发," />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>简单概括：</label>
        </div>
        <div class="field">
       <textarea type="text" class="input" name="summary" style="height:120px;" data-validate="required:向客户简单概括该业务内容" value=""></textarea>
          <div class="tips"></div>
        </div>
      </div>
   
      <div class="form-group">
        <div class="label">
          <label>详细介绍：</label>
        </div>
        <div class="field">
          <textarea type="text" class="input" name="content" style="height:120px;" data-validate="required:向客户具体描述业务内容" value=""></textarea>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body></html>