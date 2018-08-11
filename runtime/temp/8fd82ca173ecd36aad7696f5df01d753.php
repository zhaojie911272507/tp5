<?php /*a:1:{s:70:"G:\phpStudy\PHPTutorial\WWW\tp5\application\admin\view\index\info.html";i:1533734745;}*/ ?>
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
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 网站信息</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="">
      <div class="form-group">
        <div class="label">
          <label>网站标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="stitle" value="<?php echo htmlentities($webinfo['Title']); ?>" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>网站LOGO：</label>
        </div>
        <div class="field">
          <input type="text" id="url1" name="slogo" class="input tips" style="width:25%; float:left;" value="<?php echo htmlentities($webinfo['Logo']); ?>" data-toggle="hover" data-place="right" data-image=""  />
          <input type="file" class="button bg-blue margin-left" id="image1" value="+ 浏览上传" >
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>网站域名：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="surl" value="<?php echo htmlentities($webinfo['DomainName']); ?>" />
        </div>
      </div>
      <div class="form-group" style="display:none">
          <div class="label">
            <label>副加标题：</label>
          </div>
        <div class="field">
          <input type="text" class="input" name="sentitle" value="" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>网站关键字：</label>
        </div>
        <div class="field">
          <textarea class="input" name="skeywords" style="height:80px"><?php echo htmlentities($webinfo['Keywords']); ?></textarea>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>网站描述：</label>
        </div>
        <div class="field">
          <textarea class="input" name="sdescription"><?php echo htmlentities($webinfo['Info']); ?></textarea>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>联系人：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="s_name" value="<?php echo htmlentities($webinfo['contacts']); ?>" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>手机：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="s_phone" value="<?php echo htmlentities($webinfo['PhoneNum']); ?>" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>电话：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="s_tel" value="<?php echo htmlentities($webinfo['Tel']); ?>" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group" style="display:none;">
        <div class="label">
          <label>400电话：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="s_400" value="" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>传真：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="s_fax" value="<?php echo htmlentities($webinfo['Fax']); ?>" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>QQ：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="s_qq" value="<?php echo htmlentities($webinfo['qq']); ?>" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group" style="display:none">
        <div class="label">
          <label>QQ群：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="s_qqu" value="" />
          <div class="tips"></div>
        </div>
      </div>
     
      <div class="form-group">
        <div class="label">
          <label>Email：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="s_email" value="<?php echo htmlentities($webinfo['Email']); ?>" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>地址：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="s_address" value="<?php echo htmlentities($webinfo['Adress']); ?>" />
          <div class="tips"></div>
        </div>
      </div>  
              
      <div class="form-group">
        <div class="label">
          <label>底部信息：</label>
        </div>
        <div class="field">
          <textarea name="scopyright" class="input" style="height:120px;"><?php echo htmlentities($webinfo['BottomInfo']); ?></textarea>
          <div class="tips"></div>
        </div>
      </div>
     
    </form>
  </div>
</div>
</body>
</html>