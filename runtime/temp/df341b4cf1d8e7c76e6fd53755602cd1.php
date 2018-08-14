<?php /*a:1:{s:72:"G:\phpStudy\PHPTutorial\WWW\tp5\application\admin\view\links\update.html";i:1533002981;}*/ ?>

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
  <div class="panel-head"><strong><span class="icon-key"></span> 修改链接信息</strong></div>
  <div class="body-content">

    <input type="hidden" value="<?php echo htmlentities($links['Id']); ?>" name="">
 <form method="post" class="form-x" action="">
      <div class="form-group">
        <div class="label">
          <label for="sitename">链接题目：</label>
        </div>
        <div class="field">
          <input type="text" value="<?php echo htmlentities($links['Title']); ?>" class="input w55" id="title" name="title" size="50" placeholder="输入链接" data-validate="required:输入链接" />       
        </div>
      </div>  
      <div class="form-group">
        <div class="label">
          <label for="sitename">链接地址：</label>
        </div>
        <div class="field">
          <input type="text" value="<?php echo htmlentities($links['Url']); ?>" class="input w55" id="url" name="url" size="50" placeholder="输入链接地址" data-validate="required:输入链接地址" />       
        </div>
      </div>  
      <div class="form-group">
        <div class="label">
          <label for="sitename">链接说明：</label>
        </div>
        <div class="field">
          <textarea  id="desc" class="input w55" name="desc" placeholder="链接说明" data-validate="required:输入链接说明"><?php echo htmlentities($links['Desc']); ?></textarea>
                 
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