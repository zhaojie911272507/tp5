<?php /*a:1:{s:73:"G:\phpStudy\PHPTutorial\WWW\tp5\application\admin\view\column\addcol.html";i:1533545757;}*/ ?>

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
<div class="panel admin-panel">
  <div class="panel-head"><strong><span class="icon-key"></span> 增加栏目</strong></div>
  <div class="body-content">


    <form method="post" class="form-x" action="">
      <div class="form-group">
        <div class="label">
          <label for="sitename">栏目名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="cname" size="50" placeholder="输入栏目" data-validate="required:输入栏目" />       
        </div>
      </div>  
     
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-repeat" type="reset"> 取消</button>
          <button class="button bg-main icon-check-square-o" type="submit"> 增加</button>   
        </div>
      </div>      
    </form>


    
  </div>
</div>
</body></html>