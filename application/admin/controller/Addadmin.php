<?php

namespace app\admin\controller;
use think\Controller;
use think\Db;

class Addadmin extends Controller
{ 
    public function addadmin()
    {
    	//return "23
     return $this->fetch();
	
     }
   
	public function add()//添加
	{
		
		if(request()->isPost())
		{
			// var_dump(input('post.'));
			// return;

			// $validate = new \think\Validate([//独立验证，在任何时候都可以使用Validate进行验证，注意实例化是要用完全限定名称，此时引用命名空间不合适，因为已经继承了一个类了
			// 'UserName' => 'require|min:25',//用户名最小长度为25
			// 'PassWord' => 'require|max:25'//密码最大长度为25
			
			// ]);

			$data=[

			'UserName'=> input('username'),
			'PassWord'=> md5(input('password'))

			];
			// var_dump($data); 
			// die;
			$validate = \think\Validate::make($rule,$msg);

			$result = $validate->check($data);
			if (!$result) {
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
		//	var_dump(input('post.'));
			
		}

		
			return $this->fetch('add');

	}

}
 