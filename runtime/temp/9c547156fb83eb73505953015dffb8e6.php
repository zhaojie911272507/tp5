<?php /*a:1:{s:68:"G:\phpStudy\PHPTutorial\WWW\tp5\application\admin\view\proj\pic.html";i:1534858010;}*/ ?>
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
  <a type="button" href="<?php echo url('proj/finlistproject'); ?>" class="button border-yellow" ><span class="icon-reply"></span>返回</a>
  </div>
  <table class="table table-hover text-center">
      <tr>
        <th width="10%">ID</th>
        <th width="10%">图片</th>
        <th width="15%">alt</th>
        <th width="15%">完成文件</th>
        <th>操作</th>
      </tr>
    <tr>
      <td><?php echo htmlentities($project['Id']); ?></td>  
      <td><img src="http://127.0.0.1/tp5/public/static/projfile/<?php echo htmlentities($project['Pic']); ?>" alt="" width="120" height="50" /></td>
      <td><?php echo htmlentities($project['Alt']); ?></td>   
      <td><a href="../http://127.0.0.1/tp5/public/static/projfile/<?php echo htmlentities($project['Finfile']); ?>" style="color:#2673b4;text-decoration:underline;" download="../http://127.0.0.1/tp5/public/static/projfile/<?php echo htmlentities($project['Finfile']); ?>">总结文件</a></td>
      <td width="10%"><div class="button-group">
      <a onclick="window.location.href='#add'" class="btn btn-primary btn-sm shiny"><i class="icon-edit"></i>修改</a>
      </div></td>
    </tr>
  </table>
</div>

<div class="panel admin-panel margin-top" id="add">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 图片</strong></div>
  <div class="body-content">
     <input type="hidden" name="id" value="<?php echo htmlentities($project['Id']); ?>">
    <form method="post" class="form-x" enctype="multipart/form-data" action="">
      <input type="hidden" name="id" value="<?php echo htmlentities($project['Id']); ?>">
      <div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>
        <div class="field" name="image">
           <input type="file" name="image[]" class="input tips" style="width:25%; float:left;"  value="http://127.0.0.1/tp5/public/static/projfile/<?php echo htmlentities($project['Pic']); ?>" data-toggle="hover" data-place="right" data-validate="required:选择图片," data-image="http://127.0.0.1/tp5/public/static/projfile/<?php echo htmlentities($project['Pic']); ?>" />
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>alt：</label>
        </div>
        <div class="field">
        <textarea type="text" class="input" name="alt" style="height:120px;" placeholder="填写该项目的总结，概括以及所实现的功能" data-validate="required:描述不能为空," value="<?php echo htmlentities($project['Alt']); ?>"><?php echo htmlentities($project['Alt']); ?></textarea>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>总结文件：</label>
        </div>
        <div class="field">
        <input type="file"  name="image[]" class="input tips" style="width:25%; float:left;"  value="http://127.0.0.1/tp5/public/static/projfile/<?php echo htmlentities($project['Finfile']); ?>" data-toggle="hover" data-place="right" data-validate="required:选择总结后的文件,"/>
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