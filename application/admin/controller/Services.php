<?php

namespace app\admin\controller;
use think\Db;
use think\File;
use app\admin\model\Services as ServicesicModel;
use app\admin\validate\Services as Validateuser;
use app\admin\controller\Base;
class Services extends Base
{ 
    public function services()
    {
	     $list = Db::name('services')->order('Sort','asc')->paginate(5); 
		 $count=$list->total();
		 $this->assign('services',$list);
	     return $this->fetch();
	  }
	     public function add()//添加
		{
			if(request()->isPost())
			{
				$data=[
				'Id'=>input('id'),
				'Sort'=>input('sort'),
				'Title'=>input('title'),
				'Summary'=>input('summary'),
				'Content'=>input('content'),
				];
				$validate = new Validateuser;
				if(!$validate->scene('add')->check($data))
				{
					$this->error($validate->getError());die;
				}
				if(db('services')->insert($data))
				{
					return redirect('services/services');
				}
				else 
				{
				  $this->error('前台添加服务信息失败');	
				}
			}
			return redirect('services/services');
		}

		     public function update()
			{		
				$id=input('id');
			 	$services=db('services')->find($id);//获取一条数据	
			 	$this->assign('services',$services);
			 	
				if(request()->isPost())//request判断是否表单已经提交过来，如果是POST表单提交过来的，就要处理数据，记得要加return
				{
					if(input('sort')==$services['Sort'])
					{
						$data=[
						'Id'=>input('id'),
						'Title'=>input('title'),
						'Summary'=>input('summary'),
						'Content'=>input('content'),
						];
						$validate = new Validateuser;
						if(!$validate->scene('update2')->check($data))
						{
							$this->error($validate->getError());die;
						}
						if(db('services')->update($data))//此处把Id写到了data数组里，所以此处省略了where
						{
							return redirect('services');
						}
						else
						{
							$this->error('修改前台服务信息失败');
						}
						 return ;//加一个return将不再显示下面的语句
					}else{
						$data=[
						'Id'=>input('id'),
						'Sort'=>input('sort'),
						'Title'=>input('title'),
						'Summary'=>input('summary'),
						'Content'=>input('content'),
						];
						$validate = new Validateuser;
						if(!$validate->scene('update')->check($data))
						{
							$this->error($validate->getError());die;
						}
						if(db('services')->update($data))//此处把Id写到了data数组里，所以此处省略了where
						{
							return redirect('services');
						}
						else
						{
							$this->error('修改前台服务信息失败');
						}
						 return ;//加一个return将不再显示下面的语句
						}
					}
					 	return $this->fetch('update');	 
			}
	 	
			 public function del()
			{		
				$id=input('id');//返回的结果为获取的id
				$lunbotu=db('services')->find($id);//获取一条数据	
					if(db('services')->delete(input('id')))
					{
						return redirect('services');
					}else{
						$this->error('删除该条服务信息失败');
					}
		
		    }

}
