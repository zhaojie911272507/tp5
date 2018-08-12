<?php /*a:1:{s:76:"G:\phpStudy\PHPTutorial\WWW\tp5\application\admin\view\proj\listproject.html";i:1533993567;}*/ ?>
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
  <form method="post" class="form-x" action="<?php echo url('proj/delcheck'); ?>">
  <div class="panel-head"><strong class="icon-reorder">项目列表</strong></div>
  <div class="padding border-bottom">
      <ul class="search">
        <li>
          <button type="button"  class="button border-green" id="checkall"><span class="icon-check"></span> 全选</button>
           <a class="button border-yellow" href="<?php echo url('proj/add'); ?>"><span class="icon-plus-square-o"></span> 添加项目</a>
          <button type="submit" onclick="return DelSelect()" href="javascript:void(0)" class="button border-red"><span class="icon-trash-o"></span> 批量删除</button>
        </li>
      </ul>
    </div>
  <table class="table table-hover text-center">
    <tr>
      <td>ID</td>
      <th width="10%">项目名称</th>
      <th width="10%">项目详细信息</th>
      <th>开始时间</th>
      <th>预计完成时间</th>
      <th>项目负责人</th>
      <th>负责人联系方式</th>
      <th width="20%">操作</th>
    </tr>
   <?php if(is_array($project) || $project instanceof \think\Collection || $project instanceof \think\Paginator): $i = 0; $__LIST__ = $project;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!--每次循环的时候都把数据复制给vo,而这里的name的值要与assign()函数里的第一个参数保持一致,list为数组，所以也可以用foreach输出-->
    <tr>
      <td width="10%"><input id="check" type="checkbox" name="id[]" value="<?php echo htmlentities($vo['Id']); ?>" />
            <?php echo htmlentities($vo['Id']); ?></td>
      <td width="5%"><?php echo htmlentities($vo['ProjectName']); ?></td>
      <td><?php echo htmlentities($vo['ProjectInfo']); ?></td>
      <td><?php echo htmlentities($vo['StartTime']); ?></td>
      <td><?php echo htmlentities($vo['TerminalTime']); ?></td>
      <td><?php echo htmlentities($vo['Leader']); ?></td>
      <td><?php echo htmlentities($vo['LeaderContect']); ?></td>
      <td width="20%">
      <div class="button-group">
      <a type="button" class="button border-main" href="<?php echo url('proj/update',array('id'=>$vo['Id'])); ?>"><span class="icon-edit"></span>修改</a>
       <a class="button border-red"  onclick="return del()" href="<?php echo url('proj/del',array('id'=>$vo['Id'])); ?>"><span class="icon-trash-o"></span>删除</a>
     
      </div>
      </td>
    </tr> 
    <?php endforeach; endif; else: echo "" ;endif; ?>
  </table>
  </div>
   <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <th width="30%"></th>
    <th width="40%"><?php echo $project; ?></th>
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