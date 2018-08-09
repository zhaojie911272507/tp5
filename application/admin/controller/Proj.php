<?php

namespace app\admin\controller;
use think\Db;
use app\admin\model\Proj as ProjModel;
use app\admin\validate\Proj as Validateuser;
use app\admin\controller\Base;//因为公用的控制器，已经继承了controller
class Proj extends Base
{ 
			public function listproject()
		    {
			    $list = Db::name('project')->order('Id','desc')->paginate(4);
			    $count=$list->total();//获取总记录数
			    $this->assign('project',$list);//把分页数据赋值分配给模板中,即list,此时list为数组
			    return $this->fetch();//渲染模板输出
	    	 }
			public function add()//添加
			{

				if(request()->isPost())
				{
					//$validate = new Validateuser;
					$data=[
					'ProjectName'=> input('pname'),
					'ProjectInfo'=> input('pinfo'),
					'StartTime'=> input('stime'),
					'TerminalTime'=> input('etime'),
					'Leader'=>input('pleader'),
					'LeaderContect'=> input('ptel'),
				];
			
					$validate = new Validateuser;
			 	if (!$validate->scene('add')->check($data)) {
				$this->error($validate->getError());die;
			}
					if(db('project')->insert($data))
					{
						return redirect('listproject');
					}
					else 
					{
						return $this->error('添加项目失败');	
					}
					
					}
				
				return $this->fetch('add');

		}
			
		
		public function del()
		{		
			$id=input('id');//返回的结果为获取的id
			if(db('project')->delete(input('id')))////这里的$id是删除数据的数量,即此处删除了一条记录
			{
			return redirect('listproject');
				
			}
			else
			{
				$this->error('删除项目失败');
			}
		 }
		public function update()
		{		
			$id=input('id');
		 	
		 	$project=db('project')->find($id);//获取一条数据	
		 	$this->assign('project',$project);
		 	
			if(request()->isPost())//request判断是否表单已经提交过来，如果是POST表单提交过来的，就要处理数据，记得要加return
			{
				$data=[
				'Id'=>input('id'),
				'ProjectName'=> input('pname'),
				'ProjectInfo'=> input('pinfo'),
				'StartTime'=> input('stime'),
				'TerminalTime'=> input('etime'),
				'Leader'=>input('pleader'),
				'LeaderContect'=> input('ptel'),
				];
				$validate = new Validateuser;
			 	if (!$validate->scene('update')->check($data))
			 	 {
				$this->error($validate->getError());die;
				}	
				if(db('project')->update($data))//此处把Id写到了data数组里，所以此处省略了where
				{
					return redirect('listproject');
				}
				else
				{
					$this->error('修改项目信息失败');
				}
				 return ;//加一个return将不再显示下面的语句
			}

		 	
		 	return $this->fetch('update');	 
		 }

		 public function delcheck()
		{		
			if(request()->isPost())
			{
				$id=input('id/a');//返回的结果为获取的id
				foreach ($id as $value) 
				{
				
				if(db('project')->delete(input('id/a')))//这里的$id是删除数据的数量,即此处删除了一条记录
				{
					return redirect('listproject');
				}
				else
				{
					$this->error('批量删除项目失败');
				}
					
				}
			}
			
	 	}

		 public function logout()
		 {
		 	session(null);
		 	$this->success('退出成功..','login/login');
		 }
}
 