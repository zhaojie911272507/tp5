<?php

namespace app\admin\controller;
use think\Db;
use app\admin\model\Admin;
use app\admin\validate\Admin as Validateuser;
use app\admin\controller\Base;//因为公用的控制器，已经继承了controller
class Addadmin extends Base
{ 
	

    public function addadmin()
    {
    	
     return $this->fetch();
	
     }
   
	public function listadmin()
    {
    	
    $list=Admin::paginate(6);  
    // $list=addadmin::where('status',1)->paginate(3);//查询数据并赋值给$list，且每页显示4条数据
    $count=$list->total();//获取总记录数
    $this->assign('guanliyuan',$list);//把分页数据赋值分配给模板中,即list,此时list为数组

     return $this->fetch();//渲染模板输出
	
     }


	public function add()//添加
	{
		
		if(request()->isPost())
		{
			// var_dump(input('post.'));
			// return;
			$validate = new Validateuser;
			//$validate = new \think\Validate([//独立验证，在任何时候都可以使用Validate进行验证，注意实例化是要用完全限定名称，此时引用命名空间不合适，因为已经继承了一个类了
			// 'UserName' => 'require|min:5',//用户名最小长度为5
			// 'PassWord' => 'require|max:32'//密码最大长度为25
			// ]);
			$data=[
			'UserName'=> input('username'),
			'PassWord'=> md5(input('password')),

			];
			if (!$validate->scene('add')->check($data)) {
			$this->error($validate->getError());//此处也可以用dump($validate->getError())，用$this->error();打印出来的效果会好一些
			die;  
			}
			if(db('admin')->insert($data))
			{
				return $this->success('添加管理员成功','add');
			}
			else 
			{
				return $this->error('添加管理员失败');	
			}
		
		}
			return $this->fetch('add');

	}

	public function del()
	{		
		$id=input('id');//返回的结果为获取的id

		if($id!=1)
		{
			if(db('admin')->delete(input('id')))////这里的$id是删除数据的数量,即此处删除了一条记录
			{
				$this->success('删除管理员成功','listadmin');
			}
			else
			{
				$this->error('删除管理员失败');
			}
		}
		else
		{
			 $this->error('初始管理员不能删除'); 
		}
		
	 }
	
	public function update()
	{		
		$id=input('id');
	 	
	 	$admins=db('admin')->find($id);//获取一条数据	
	 	$this->assign('admins',$admins);
		if(request()->isPost())//request判断是否表单已经提交过来，如果是POST表单提交过来的，就要处理数据，记得要加return
		{
			if(input('password'))
			{
				$data=[
				'Id'=>input('id'),
				'UserName'=>input('username'),	
				'PassWord'=>md5(input('password')),
			];
			}
			else
			{
				$data=[
				'Id'=>input('id'),
				'UserName'=>input('username'),
			];
			}
			//	
			// if(input('password'))
			// {
			// 	$data['PassWord']
			// 	=md5(input('password'));
			// }
			// else
			// {
			// 	$data['PassWord']=$admins['PassWord'];
			// }
			//验证场景
			$validate = new Validateuser;
			if(!$validate->scene('update')->check($data))
			{
				$this->error($validate->getError());die;
			}
			if(db('admin')->update($data))//此处把Id写到了data数组里，所以此处省略了where
			{
				$this->success('修改管理员信息成功','listadmin');
			}
			else
			{
				$this->error('修改管理员信息失败');
			}
			 return ;//加一个return将不再显示下面的语句
	}
	 	
	 	return $this->fetch('update');	 
	 }

	 public function delcheck()
	{		
		$id=input('id');//返回的结果为获取的id

		if($id!=1)
		{
			if(db('admin')->delete(input('id')))////这里的$id是删除数据的数量,即此处删除了一条记录
			{
				$this->success('删除管理员成功','listadmin');
			}
			else
			{
				$this->error('删除管理员失败');
			}
		}
		else
		{
			 $this->error('初始管理员不能删除'); 
		}
		
	 }

	 public function logout()
	 {
	 	session(null);
	 	$this->success('退出成功..','login/login');
	 }
}
 