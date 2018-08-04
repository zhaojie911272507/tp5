<?php

namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\Links as LinksModel;
use app\admin\validate\Links as Validateuser;
class Links extends Controller
{ 
    
   
	public function listlinks()
    {
    
    $list=LinksModel::paginate(6);  
    // $list=addadmin::where('status',1)->paginate(3);//查询数据并赋值给$list，且每页显示4条数据
    $count=$list->total();//获取总记录数
    $this->assign('links',$list);//把分页数据赋值分配给模板中,即list,此时list为数组

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
			'Title'=> input('title'),
			'Url'=> input('url'),
			'Desc'=> input('desc'),
			'rgtime'=>'getdate()',
			'lasttime'=>'date()',
			];
			
			if (!$validate->scene('add')->check($data)) {
			$this->error($validate->getError());//此处也可以用dump($validate->getError())，用$this->error();打印出来的效果会好一些
			die;  
			}
			if(db('links')->insert($data))
			{
				return $this->success('添加链接成功','links/listlinks');
			}
			else 
			{
				return $this->error('添加链接失败');	
			}
		
		}
			return $this->fetch('add');

	}

	public function del()
	{		
		$id=input('id');//返回的结果为获取的id
			if(db('links')->delete(input('id')))////这里的$id是删除数据的数量,即此处删除了一条记录
			{
				$this->success('删除链接成功','listlinks');
			}
			else
			{
				$this->error('删除链接失败');
			}
	 }
	public function update()
	{		
		$id=input('id');
	 	
	 	$links=db('links')->find($id);//获取一条数据	
	 	$this->assign('links',$links);
		if(request()->isPost())//request判断是否表单已经提交过来，如果是POST表单提交过来的，就要处理数据，记得要加return
		{
			
			if(input('title') && input('url') && input('desc'))
			{
				$data=[
				'Id'=>input('id'),
				'Title'=>input('title'),	
				'Url'=>input('url'),
				'Desc'=>input('desc'),
				];
			}
			else
			{
				$data=['Id'=>input('id'),];
				if(input('title'))
				{
					$data['Title']=input('title');
				}
				else
				{
					$data['Title']=$links['Title'];
				}
				if(input('url'))
				{
					$data['Url']=input('url');
				}
				else
				{
					$data['Url']=$links['Url'];
				}
				if(input('desc'))
				{
					$data['Desc']=input('desc');
				}
				else
				{
					$data['Desc']=$links['Desc'];
				}
			}	
		
			//	
			// if(input('password'))
			// {
			// 	$data['PassWord']
			// 	=md5(input('password'));
			// }
			// else
			// {
			// 	$data['PassWord']=$links['PassWord'];
			// }
			//验证场景
			$validate = new Validateuser;
			if(!$validate->scene('update')->check($data))
			{
				$this->error($validate->getError());die;
			}
			if(db('links')->update($data))//此处把Id写到了data数组里，所以此处省略了where
			{
				$this->success('修改链接信息成功','listlinks');
			}
			else
			{
				$this->error('修改链接信息失败');
			}
			 return ;//加一个return将不再显示下面的语句
	}
	 	
	 	return $this->fetch('update');	 
	 }
}
 