<?php

namespace app\admin\controller;
use think\Db;
use app\admin\model\Book as BookModel;
use app\admin\validate\Book as Validateuser;
use app\admin\controller\Base;//因为公用的控制器，已经继承了controller
class Book extends Base
{ 
		public function listbook()
	    {
		   $list = Db::name('book')
					    ->order('Id','desc')
					    ->paginate(6);  
		    // $list=addadmin::where('status',1)->paginate(3);//查询数据并赋值给$list，且每页显示4条数据
		    $count=$list->total();//获取总记录数
		    $this->assign('book',$list);//把分页数据赋值分配给模板中,即list,此时list为数组
		     return $this->fetch();//渲染模板输出
	     }
	 	public function addbook()//添加
		{
			if(request()->isPost())
			{
			$validate = new Validateuser;
				$data=[
				'Name'=> input('name'),
				'Job'=> input('job'),
				'Tel'=> input('tel'),
				'Email'=> input('email'),
				'Content'=> input('content'),
			];
			if (!$validate->scene('addbook')->check($data))
			 {
				$this->error($validate->getError());//此处也可以用dump($validate->getError())，用$this->error();打印出来的效果会好一些
				die;  
			}
			if(db('book')->insert($data))
			{
				return $this->success('添加留言成功','addbook');
			}
			else 
			{
				return $this->error('添加留言失败');	
			}
		
		}
			return $this->fetch('addbook');

	}

		public function delbook()
		{		
			$id=input('id');//返回的结果为获取的id
			if(db('book')->delete(input('id')))////这里的$id是删除数据的数量,即此处删除了一条记录
			{
				$this->success('删除留言成功','listbook');
			}
			else
			{
				$this->error('删除留言失败');
			}
		 }
	 	public function delcheck()
		{		
			$id=input('id/a');//返回的结果为获取的id
			if(request()->isPost())
			{
				foreach ($id as $value) 
				{
					if(db('book')->delete(input('id')))////这里的$id是删除数据的数量,即此处删除了一条记录
					{
						return redirect('listbook');
					}
					else
					{
						$this->error('删除留言失败');
					}
				}
			}
			return $this->fetch('listbook');

	 }

	 public function logout()
	 {
	 	session(null);
	 	$this->success('退出成功..','login/login');
	 }
}
 