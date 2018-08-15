<?php /*a:1:{s:76:"G:\phpStudy\PHPTutorial\WWW\tp5\application\admin\view\column\updatecol.html";i:1534256686;}*/ ?>
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
  <div class="panel-head"><strong><span class="icon-key"></span> 修改栏目信息</strong></div>
  <div class="body-content">

    <input type="hidden" value="<?php echo htmlentities($column['Id']); ?>" name="id">

    <form method="post" class="form-x" action="">
      <div class="form-group">
        <div class="label">
          <label for="sitename">栏目名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50"  name="cname"  size="50" value="<?php echo htmlentities($column['Cname']); ?>" placeholder="修改栏目名称" data-validate="required:输入栏目名称" />       
        </div>
      </div>  
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-repeat" type="reset"> 取消</button>
          <button class="button bg-main icon-check-square-o" type="submit"> 修改</button>   
        </div>
      </div>      
    </form>
  </div>
</div>
</body></html>