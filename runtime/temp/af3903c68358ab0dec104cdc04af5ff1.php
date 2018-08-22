<?php /*a:1:{s:78:"G:\phpStudy\PHPTutorial\WWW\tp5\application\admin\view\addadmin\listadmin.html";i:1534673033;}*/ ?>
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
  <div class="panel-head"><strong class="icon-reorder">管理员列表</strong></div>
  <form method="post" class="form-x" action="<?php echo url('addadmin/delcheck'); ?>">
<div class="padding border-bottom">
      <ul class="search">
        <li>
          <button type="button"  class="button border-green" id="checkall"><span class="icon-check"></span> 全选</button>
           <a class="button border-yellow" href="<?php echo url('addadmin/add'); ?>"><span class="icon-plus-square-o"></span> 添加成员</a>
          <button type="submit" onclick="return DelSelect()" href="javascript:void(0)" class="button border-red"><span class="icon-trash-o"></span> 批量删除</button>
        </li>
      </ul>
    </div>
  <table class="table table-hover text-center">
    <tr>
      <th width="10%">ID</th>
      <th>管理员名称</th>
      <th>注册时间</th>
      <th width="250">操作</th>
    </tr>
   <?php if(is_array($guanliyuan) || $guanliyuan instanceof \think\Collection || $guanliyuan instanceof \think\Paginator): $i = 0; $__LIST__ = $guanliyuan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!--每次循环的时候都把数据复制给vo,而这里的name的值要与assign()函数里的第一个参数保持一致,list为数组，所以也可以用foreach输出-->
    <tr>
      <?php if($vo['Id'] !='1' && $vo['Id'] != app('request')->session('uid')): ?>
      <td width="10%"><input id="check" type="checkbox" name="id[]" value="<?php echo htmlentities($vo['Id']); ?>" /><?php echo htmlentities($vo['Id']); ?></td>
      <td><?php echo htmlentities($vo['UserName']); ?></td>
      <td><?php echo htmlentities($vo['TimeStamp']); ?></td>
      <td>
      <div class="button-group">
      <a type="button" class="button border-main" href="<?php echo url('addadmin/update',array('id'=>$vo['Id'])); ?>"><span class="icon-edit"></span>修改</a>
       <a class="button border-red"  onclick="return del()" href="<?php echo url('addadmin/del',array('id'=>$vo['Id'])); ?>"><span class="icon-trash-o"></span>删除</a>
      <?php endif; ?>
      </div>
      </td>
    </tr> 
    <?php endforeach; endif; else: echo "" ;endif; ?>
  </table>
  </div>

 <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <th width="30%"></th>
    <th width="40%"><?php echo $guanliyuan; ?></th>
    <th width="30%"></th>
  </tr>
</table>
</form>
 <script type="text/javascript">

function del(){
  if(confirm("您确定要删除吗?\n\n请确认！"))
  {
    return true;
  }
  else
  {
    return false;
  }
}

$("#checkall").click(function(){ 
  $("input[name='id[]']").each(function(){
    if (this.checked) {
       
      this.checked = false;
    }
    else {
      this.checked = true;
    }
  });
})

function DelSelect(){
  var Checkbox=false;
   $("input[name='id[]']").each(function(){
    if (this.checked==true) {   
    Checkbox=true;  
    }
  });
  if (Checkbox){
    var t=confirm("您确认要删除选中的内容吗？");
    if (t==false) return false;     
  }
  else{
    alert("请选择您要删除的内容!");
    return false;
  }
}

</script>

</body></html>