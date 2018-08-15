<?php /*a:1:{s:71:"G:\phpStudy\PHPTutorial\WWW\tp5\application\admin\view\proj\update.html";i:1534247396;}*/ ?>
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
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 项目信息</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" enctype="multipart/form-data" action="<?php echo url('proj/update'); ?>">
      <input type="hidden" value="<?php echo htmlentities($project['Id']); ?>" name="id">
      <div class="form-group">
        <div class="label">
          <label>项目名称</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="pname" value="<?php echo htmlentities($project['ProjectName']); ?>" placeholder="请输入项目名称" data-validate="required:请输入项目名称"/>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>相关文件上传</label>
        </div>
        <div class="field">
          <input type="file" class="input" name="file" style="width:25%; float:left;" value="<?php echo htmlentities($project['File']); ?>" placeholder="无操作默认不修改文件" />
          <div class="input tips" style="width:25%; float:left;color:red;">提示:无操作默认不修改文件</div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>项目详细信息</label>
        </div>
        <div class="field">
          <textarea class="input" name="pinfo" style="height:80px" placeholder="项目详细信息..." data-validate="required:不能为空"><?php echo htmlentities($project['ProjectInfo']); ?></textarea>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>开始时间：</label>
        </div>
        <div class="field">
          <input type="datetime" class="input" name="stime" value="<?php echo htmlentities($project['StartTime']); ?>" placeholder="请输入开始" data-validate="required:请输入开始时间" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>结束时间：</label>
        </div>
        <div class="field">
          <input type="datetime" class="input" name="etime" value="<?php echo htmlentities($project['TerminalTime']); ?>" placeholder="请输入结束时间" data-validate="required:结束时间"/>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>项目负责人：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="pleader" value="<?php echo htmlentities($project['Leader']); ?>" placeholder="请输入项目负责人" data-validate="required:请输入项目负责人"/>
          <div class="tips"></div>
        </div>
      </div>
       <div class="form-group">
        <div class="label">
          <label>负责人联系方式：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="ptel" value="<?php echo htmlentities($project['LeaderContect']); ?>" placeholder="请输入负责人联系方式" data-validate="required:请输入负责人联系方式"/>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-undo" type="reset"> 取消</button>
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body>
</html>