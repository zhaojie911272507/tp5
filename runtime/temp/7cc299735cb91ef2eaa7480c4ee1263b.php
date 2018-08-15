<?php /*a:1:{s:75:"G:\phpStudy\PHPTutorial\WWW\tp5\application\admin\view\proj\projectmem.html";i:1534322203;}*/ ?>
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
  <div class="panel-head"><strong class="icon-reorder"> 成员列表</strong></div>
  <div class="padding border-bottom">  
  <button type="button" class="button border-yellow" onclick="window.location.href='#add'"><span class="icon-plus-square-o"></span> 添加成员</button>
  </div>
  <table class="table table-hover text-center">
    <tr>
      <th width="10%">ID</th>
      <th width="10%">项目名称</th>
      <th width="10%">负责人</th>
      <th width="10%">成员</th>
      <th width="10%">成员</th>
      <th width="10%">成员</th>
      <th width="10%">成员</th>
      <th width="10%">成员</th>
      <th width="15%">操作</th>
    </tr>
   <?php if(is_array($projectmem) || $projectmem instanceof \think\Collection || $projectmem instanceof \think\Paginator): $i = 0; $__LIST__ = $projectmem;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
    <tr>
      <td><?php echo htmlentities($vo['Id']); ?></td>  
      <td><?php echo htmlentities($vo['ProjectName']); ?></td>
      <td><?php echo htmlentities($vo['Leader']); ?></td> 
      <td><?php echo htmlentities($vo['Member1']); ?></td> 
      <td><?php echo htmlentities($vo['Member2']); ?></td>    
      <td><?php echo htmlentities($vo['Member3']); ?></td> 
      <td><?php echo htmlentities($vo['Member4']); ?></td>     
      <td><?php echo htmlentities($vo['Member5']); ?></td>
      <td><div class="button-group">
        <a href="#" class="btn btn-primary btn-sm shiny"><i class="icon-edit"></i>修改</a>
        <a href="#" onclick="warning('确实要删除吗', '')" class="btn btn-danger btn-sm shiny"><i class="fa icon-trash-o"></i> 删除</a>
      </div></td>
    </tr>
    <?php endforeach; endif; else: echo "" ;endif; ?>
  </table>
</div>

 <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <th width="30%"></th>
    <th width="40%"><?php echo $projectmem; ?></th>
    <th width="30%"></th>
  </tr>
</table>
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
<div class="panel admin-panel margin-top" id="add">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 增加内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" enctype="multipart/form-data" action="<?php echo url('pic/add'); ?>">    
        <div class="form-group">
        <div class="label">
          <label>项目名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="pname" value="<?php echo htmlentities($projectmem['ProjectName']); ?>"  data-validate="required:填写排序," />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>添加成员：</label>
        </div>
        <div class="field">
          <select name="pid" class="input w50">
            <option value="">请选择成员</option>
            <?php if(is_array($member) || $member instanceof \think\Collection || $member instanceof \think\Paginator): $i = 0; $__LIST__ = $member;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <option value=""><?php echo htmlentities($vo['Name']); ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
          </select>
          <div class="tips">不选择上级分类默认为一级分类</div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>添加成员：</label>
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