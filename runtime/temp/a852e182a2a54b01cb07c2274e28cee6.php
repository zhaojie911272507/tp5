<?php /*a:1:{s:73:"G:\phpStudy\PHPTutorial\WWW\tp5\application\admin\view\book\listbook.html";i:1533544862;}*/ ?>
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
<form method="post" action="">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 留言管理</strong></div>
    <div class="padding border-bottom">
      <ul class="search">
        <li>
          <button type="button"  class="button border-green" id="checkall"><span class="icon-check"></span> 全选</button>
          <button type="submit" class="button border-red"><span class="icon-trash-o"></span> 批量删除</button>
        </li>
      </ul>
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th width="120">ID</th>
        <th>姓名</th>
        <th>工作</th>
        <th>电话</th>
        <th>邮箱</th>
        <th width="25%">留言内容</th>
         <th width="120">留言时间</th>
        <th>操作</th> 
      </tr>
         <?php if(is_array($book) || $book instanceof \think\Collection || $book instanceof \think\Paginator): $i = 0; $__LIST__ = $book;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <tr>
          <td><input type="checkbox" name="id[]" value="1" />
            <?php echo htmlentities($vo['Id']); ?></td>
          <td><?php echo htmlentities($vo['Name']); ?></td>
          <td><?php echo htmlentities($vo['Job']); ?></td>
          <td><?php echo htmlentities($vo['Tel']); ?></td> 
          <td><?php echo htmlentities($vo['Email']); ?></td>   
          <td><?php echo htmlentities($vo['Content']); ?></td>
          <td><?php echo htmlentities($vo['Timestamp']); ?></td>
          <td><div class="button-group"> <a class="button border-red" href="<?php echo url('book/delbook',array('id'=>$vo['Id'])); ?>" onclick="return del()"><span class="icon-trash-o"></span> 删除</a></div></td>
        </tr>
      <?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
  </div>
   <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <th width="30%"></th>
    <th width="40%"><?php echo $book; ?></th>
    <th width="30%"></th>
  </tr>
</table>
</form>
<script type="text/javascript">

function del()
{
	if(confirm("您确定要删除吗?"))
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