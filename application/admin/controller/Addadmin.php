<?php

namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\Admin;

class Addadmin extends Controller
{ 
    public function addadmin()
    {
    	
     return $this->fetch();
	
     }
   
	public function listadmin()
    {
    
    $list=Admin::paginate(4);  
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

			$validate = new \think\Validate([//独立验证，在任何时候都可以使用Validate进行验证，注意实例化是要用完全限定名称，此时引用命名空间不合适，因为已经继承了一个类了
			'UserName' => 'require|min:5',//用户名最小长度为5
			'PassWord' => 'require|max:32'//密码最大长度为25
			
			]);

			$data=[

			'UserName'=> input('username'),
			'PassWord'=> md5(input('password'))

			];
			// var_dump($data); 
			// die;
		
			
			if (!$validate->check($data)) {
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

		if($id!=2)
		{
			if(db('admin')->delete(input('id')))////这里的$id是删除数据的数量,即此处删除了一条记录
			{
				$this->success('删除管理员成功','listadmin');
			}else{
				$this->error('删除管理员失败');
			}
		}
		else
		{
			 $this->error('初始管理员不能删除'); 
		}
		
	 }
	
	public function alert()
	{		
		
	 	$id=input('id');
	 	$query=new \think\db\Query();
	 	$query->table('admin')->where('Id',$id);
	 	if(db::find($query))
	 	{
	 		return $this->fetch('alert');
	 	}

	 	

	 }
}
 