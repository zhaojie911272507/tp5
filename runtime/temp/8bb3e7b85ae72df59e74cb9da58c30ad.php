<?php /*a:1:{s:70:"G:\phpStudy\PHPTutorial\WWW\tp5\application\admin\view\pic\update.html";i:1534216511;}*/ ?>
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

<div class="panel admin-panel margin-top" id="add">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 修改内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" enctype="multipart/form-data" action="<?php echo url('pic/update'); ?>">   
     <input type="hidden" value="<?php echo htmlentities($lunbotu['Id']); ?>" name="id"> 
        <div class="form-group">
        <div class="label">
          <label>排序：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="sort" value="<?php echo htmlentities($lunbotu['Sort']); ?>"  data-validate="required:填写排序,number:排序必须为数字" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>
        <div class="field">
          <input type="file" id="fileid" name="image" class="input tips" style="width:25%; float:left;" value="http://127.0.0.1/tp5/public/static/uploads/<?php echo htmlentities($lunbotu['Pic']); ?>" data-toggle="hover" data-place="right" data-image="http://127.0.0.1/tp5/public/static/uploads/<?php echo htmlentities($lunbotu['Pic']); ?>" />
          <div class="tipss">图片尺寸：1920*500</div><p class="tipss" style='color:red'>*不修改默认图片不改变</p>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>alt：</label>
        </div>
        <div class="field">
          <textarea type="text" class="input" name="alt" style="height:120px;" data-validate="required:填入要修改的内容," value=""><?php echo htmlentities($lunbotu['Alt']); ?></textarea>
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