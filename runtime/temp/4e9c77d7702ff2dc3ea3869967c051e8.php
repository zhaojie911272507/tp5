<?php /*a:1:{s:73:"G:\phpStudy\PHPTutorial\WWW\tp5\application\admin\view\addstd\update.html";i:1533544067;}*/ ?>
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
  <div class="panel-head"><strong><span class="icon-key"></span> 修改学生信息</strong></div>
  <div class="body-content">


    <form method="post" class="form-x" action="">
 <div class="form-group">
        <div class="label">
          <label for="sitename">学号：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" id="stdid" name="stdid" size="50" maxlength="12" value="<?php echo htmlentities($stdinfo['StdId']); ?>" />       
        </div>
      </div>  


<div class="form-group">
        <div class="label">
          <label for="sitename">用户名</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" id="username" readonly="readonly"  maxlength="16" name="username" size="50" value="<?php echo htmlentities($stdinfo['UserName']); ?>" />       
        </div>
      </div>  

<div class="form-group">
        <div class="label">
          <label for="sitename">密码：</label>
        </div>
        <div class="field">
          <input type="password" class="input w50" id="password" name="password" maxlength="16" size="50" value="" placeholder="不填默认不修改密码" data-validate="length#>=6:密码不能小于6位"/>       
        </div>
      </div>  

<div class="form-group">
        <div class="label">
          <label for="sitename">姓名：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" id="name" name="name" size="50" value="<?php echo htmlentities($stdinfo['Name']); ?>" placeholder="输入姓名" data-validate="required:输入姓名" />       
        </div>
      </div> 
      <div class="form-group">
        <div class="label">
          <label for="sitename">入学年份：</label>
        </div>
        <div class="field">
          <input type="date" class="input w50" name="grade" size="50" value="<?php echo htmlentities($stdinfo['Grade']); ?>" placeholder="输入年级" data-validate="required:输入年级" />       
        </div>
      </div>    
       <div class="form-group">
        <div class="label">
          <label>性别：</label>
        </div>
        <div class="field">
         <input type="text" class="input w50" name="sex" maxlength="1"  size="50" value="<?php echo htmlentities($stdinfo['Sex']); ?>"  placeholder="请输入性别" data-validate="required:请输入性别" />
           </div>
        </div>   
    


    <div class="form-group">
        <div class="label">
          <label for="sitename">专业班级：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" id="class" name="class" size="50" value="<?php echo htmlentities($stdinfo['Class']); ?>" placeholder="请输入专业班级,例如:信管1701" data-validate="required:请输入专业班级" />       
        </div>
      </div>  
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-repeat" type="reset"> 取消</button>
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>   
        </div>
      </div>      
    </form>
  </div>
</div>
</body></html>