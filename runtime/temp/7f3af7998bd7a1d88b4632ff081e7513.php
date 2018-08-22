<?php /*a:1:{s:67:"G:\phpStudy\PHPTutorial\WWW\tp5\application\admin\view\pic\pic.html";i:1534845332;}*/ ?>
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
  <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong></div>
  <div class="padding border-bottom">  
  <button type="button" class="button border-yellow" onclick="window.location.href='#add'"><span class="icon-plus-square-o"></span> 添加内容</button>
  </div>
  <table class="table table-hover text-center">
    <tr>
      <th width="10%">ID</th>
      <th width="10%">排序</th>
      <th width="20%">图片</th>
      <th width="20%">alt</th>
      <th width="15%">操作</th>
    </tr>
   <?php if(is_array($lunbotu) || $lunbotu instanceof \think\Collection || $lunbotu instanceof \think\Paginator): $i = 0; $__LIST__ = $lunbotu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
    <tr>
      <td><?php echo htmlentities($vo['Id']); ?></td>  
      <td><?php echo htmlentities($vo['Sort']); ?></td>   
      <td><img src="http://127.0.0.1/tp5/public/static/uploads/<?php echo htmlentities($vo['Pic']); ?>" alt="<?php echo htmlentities($vo['Alt']); ?>" width="120" height="50" /></td>     
      <td><?php echo htmlentities($vo['Alt']); ?></td>
      <td><div class="button-group">
      <a class="button border-main" href="<?php echo url('pic/update',array('id'=>$vo['Id'])); ?>"><span class="icon-edit"></span> 修改</a>
      <a class="button border-red" onclick="return del()" href="<?php echo url('pic/del',array('id'=>$vo['Id'])); ?>" ><span class="icon-trash-o"></span> 删除</a>
      </div></td>
    </tr>
    <?php endforeach; endif; else: echo "" ;endif; ?>
  </table>
</div>

 <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <th width="30%"></th>
    <th width="40%"><?php echo $lunbotu; ?></th>
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
    <form method="post" class="form-x" enctype="multipart/form-data" action="<?php echo url('pic/add'); ?>">    
        <div class="form-group">
        <div class="label">
          <label>排序：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="sort" value="0"  data-validate="required:填写排序,number:排序必须为数字" />
          <div class="tips"></div>
        </div>
      </div>
     
      <div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>
        <div class="field">
        <input type="file"  name="image" class="input tips" style="width:25%; float:left;"  value="" data-toggle="hover" data-place="right" data-validate="required:选择图片," data-image="" />
    
          <div class="tipss">图片尺寸：1920*500</div>
        </div>
      </div>
   
      <div class="form-group">
        <div class="label">
          <label>alt：</label>
        </div>
        <div class="field">
          <textarea type="text" class="input" name="alt" style="height:120px;" data-validate="required:描述不能为空," value=""></textarea>
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