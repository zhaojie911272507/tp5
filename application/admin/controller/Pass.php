<?php

namespace app\admin\controller;
use think\Controller;
use Db;
class Pass extends Controller
{ 
     public function pass()
     {
     	$id=session('uid');//得到当前登录的写入session的Id
     	$admins=db('admin')->find($id);//获取一条数据	
	 	//$this->assign('admins',$admins);
	 	
	 	if(request()->isPost())//request判断是否表单已经提交过来，如果是POST表单提交过来的，就要处理数据，记得要加return
		{
			if(input('password') && $admins['PassWord']==md5(input('password')))
			{
				// $data=['PassWord'=>input('newpassword'),];
			$data=[
			'UserName'=> input('$id'),
			'PassWord'=> md5(input('password')),
			];
				//$data['PassWord']=md5(input('newpassword'));
				if(db('admin')->where('Id',$id)->update($data))//此处把Id写到了data数组里，所以此处省略了where
				{
					$this->success('修改密码信息成功','pass');
				}
				else
				{
					$this->error('修改密码信息失败');
				}
				return ;//加一个return将不再显示下面的语句
			}
			else
			{
				$this->error('原始密码错误,请重新输入');
				
			}
		}
	 	
	 	return $this->fetch('pass');	 
     }
}
