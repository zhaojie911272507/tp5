<?php /*a:1:{s:77:"G:\phpStudy\PHPTutorial\WWW\tp5\application\admin\view\column\listcolumn.html";i:1534317184;}*/ ?>
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
<form method="post" class="form-x" id="form1" action="<?php echo url('column/updatecol'); ?>">
  <div class="panel-head"><strong class="icon-reorder"> 栏目列表</strong></div>
  <div class="padding border-bottom">
      <ul class="search">
        <li>
          <button type="button"  class="button border-green" id="checkall"><span class="icon-check"></span> 全选</button>
           <a class="button border-yellow" href="<?php echo url('column/addcol'); ?>"><span class="icon-plus-square-o"></span> 添加栏目</a>
          <button type="submit" onclick="return DelSelect()" href="<?php echo url('column/delcheck'); ?>" class="button border-red"><span class="icon-trash-o"></span> 批量删除</button>
        </li>
      </ul>
    </div>
  <table class="table table-hover text-center">
    <tr>
      <th width="10%">ID</th>     
      <th>栏目名称</th> 
      <th>是否显示</th>
      <th>操作</th>
    </tr>
   <?php if(is_array($column) || $column instanceof \think\Collection || $column instanceof \think\Paginator): $i = 0; $__LIST__ = $column;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!--每次循环的时候都把数据复制给vo,而这里的name的值要与assign()函数里的第一个参数保持一致,list为数组，所以也可以用foreach输出-->
    <tr>
      <td width="10%"><input type="checkbox" id="id" name="id[]" value="<?php echo htmlentities($vo['Id']); ?>" /><?php echo htmlentities($vo['Id']); ?></td>
      <td>
      <input type="text" id="cname" name="cname" class="input" value="<?php echo htmlentities($vo['Cname']); ?>" size="10" placeholder="请输入栏目名称" data-validate="required:请输入栏目名称" />  
      </td>
       <td>
            <?php if($vo['Status']==1): ?>
            <a modelid="28" onclick="changestatus(this);" class="btn btn-primary btn-sm shiny">显示</a>
            <?php elseif($vo['Status']==0): ?>
            <a modelid="28" onclick="changestatus(this);" class="btn btn-danger btn-sm shiny">禁用</a>
            <?php endif; ?>
      </td>
      <td>
      <div class="button-group">
      <a type="submit"  class="button border-main" href="<?php echo url('column/updatecol',array('id'=>$vo['Id'])); ?>"><span class="icon-edit"></span>修改</a>
       <a class="button border-red"  onclick="return del()" href="<?php echo url('column/delcol',array('id'=>$vo['Id'])); ?>"><span class="icon-trash-o"></span>删除</a>
      </div>
      </td>
    </tr> 
    <?php endforeach; endif; else: echo "" ;endif; ?>
  </table>
  </div>
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <th width="30%"></th>
    <th width="40%"> <?php echo $column; ?></th>
    <th width="30%"></th>
  </tr>
</table>

</form>
 <script type="text/javascript">

function updatecol(){
  if(confirm("您确定要修改吗?")) {
    return true;
  }else{
    return false;
  }
}
function del(){
  if(confirm("您确定要删除吗?\n\n请确认！"))
  {
    return true;
  }else{
    return false;
  }
}

$("#checkall").click(function(){ 
  $("input[name='id[]']").each(function(){
    if (this.checked){
      this.checked = false;
    }else {
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
  }else{
    alert("请选择您要删除的内容!");
    return false;
  }
}
</script>

</body></html>