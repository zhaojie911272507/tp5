<?php /*a:1:{s:72:"G:\phpStudy\PHPTutorial\WWW\tp5\application\admin\view\proj\addmem1.html";i:1534661866;}*/ ?>

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
  <div class="panel-head"><strong><span class="icon-group"></span>成员1</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" enctype="multipart/form-data" action="">
        <div class="form-group">
        <div class="label">
          <label>项目名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="pname" value="<?php echo htmlentities($projectmem['ProjectName']); ?>" readonly="readonly"  data-validate="required:填写排序," />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>成员：</label>
        </div>
        <div class="field">
          <select name="pid" class="input w50">
            <option value="">请选择成员</option>
            <?php if(is_array($member) || $member instanceof \think\Collection || $member instanceof \think\Paginator): $i = 0; $__LIST__ = $member;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo htmlentities($vo['Name']); ?>"><?php echo htmlentities($vo['Name']); ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
          </select>
        </div>
      </div>
     
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit">提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body></html>