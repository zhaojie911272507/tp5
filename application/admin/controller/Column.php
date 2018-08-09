<?php

namespace app\admin\controller;
use think\Db;
use app\admin\model\Column as ColumnModel;
use app\admin\validate\Column as Validateuser;
use app\admin\controller\Base;//因为公用的控制器，已经继承了controller
class Column extends Base
{ 
	public function listcolumn()
    {
    	
    $list = Db::name('column')->order('Id','desc')->paginate(5);
    $count=$list->total();//获取总记录数
    $this->assign('column',$list);//把分页数据赋值分配给模板中,即list,此时list为数组

     return $this->fetch();//渲染模板输出
	
     }
	public function addcol()//添加导航栏目
	{
		
		if(request()->isPost())
		{
			$validate =new Validateuser;
			$data=[
			'Cname'=> input('cname'),
			];
				if(db('column')->insert($data))
				{
					return $this->success('添加栏目成功','listcolumn');
				}
				else 
				{
					return $this->error('添加栏目失败');	
				}
		
		}
			return $this->fetch('addcol');

		}
		public function delcol()
		{		
				$id=input('id');//返回的结果为获取的id
				if(db('column')->delete(input('id')))////这里的$id是删除数据的数量,即此处删除了一条记录
				{
					$this->success('删除栏目成功','listcolumn');
				}
				else
				{
					$this->error('删除栏目失败');
				}
		 }
		public function updatecol()
		{		
			$id=input('id');
		 	$column=db('column')->find($id);//获取一条数据	
		 	$this->assign('column',$column);
		 	$data=[
				'Id'=>input('id'),
				'Cname'=>input('cname'),	
				];
				// dump($_POST);die;
				dump($data);die;
		 	if(request()->post())
		 	{
		 		$data=[
				'Id'=>input('id'),
				'Cname'=>input('cname'),	
				];
				dump($data);die;
		 	}
		 	else
		 	{
		 		$this->error('表单提交失败');
		 	}
			$validate = new Validateuser;
			if(!$validate->scene('updatecol')->check($data))
			{
				$this->error($validate->getError());die;
			}
			if(db('column')->update($data))//此处把Id写到了data数组里，所以此处省略了where
			{
				return redirct('listcolumn');
			}
			else
			{
				$this->error('修改栏目信息失败');
			}
			 return ;//加一个return将不再显示下面的语句
			return $this->fetch('listcolumn');
		}
		 public function delcheck()
		{		
			$id=input('id');//返回的结果为获取的id
			if(db('column')->delete(input('id')))////这里的$id是删除数据的数量,即此处删除了一条记录
			{
				$this->success('删除栏目成功','listcolumn');
			}
			else
			{
				$this->error('删除栏目失败');
			}
	 	}
	public function addcolcontent()//添加
	{
		
		if(request()->isPost())
		{
			$validate = new Validateuser;
			$data=[
			'Tit'=> input('title'),
			'Pic'=> input('img'),
			'Class'=> input('class'),
			'OtClass'=> input(''),
			'Desc'=> input('desc'),
			'PassWord'=> input('password'),
			'Sort'=> input('sort'),
			'Time'=> input('time'),
			'Auth'=> input('auth'),
			'Views'=> input('view'),
			'Edit'=> input('edit'),
			];
			if (!$validate->scene('add')->check($data)) {
			$this->error($validate->getError());//此处也可以用dump($validate->getError())，用$this->error();打印出来的效果会好一些
			die;  
			}
			if(db('column')->insert($data))
			{
				return $this->success('添加栏目成功','add');
			}
			else 
			{
				return $this->error('添加栏目失败');	
			}
		
		}
			return $this->fetch('add');

	}

	

	 public function logout()
	 {
	 	session(null);
	 	$this->success('退出成功..','login/login');
	 }
}
 