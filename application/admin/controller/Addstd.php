<?php

namespace app\admin\controller;
use think\Controller;
use app\admin\model\Stdinfo;

class Addstd extends Controller
{ 
    public function index()
    {
    	//return "2323";
     return $this->fetch('addstd');
	
     }
   
     public function liststd()
    {
    
    $list=Stdinfo::paginate(4);
    // $list=addadmin::where('status',1)->paginate(3);//查询数据并赋值给$list，且每页显示4条数据
    $count=$list->total();//获取总记录数
    $this->assign('stdinfo',$list);//把分页数据赋值分配给模板中,即list,此时list为数组

     return $this->fetch();//渲染模板输出
	
     }

	public function add()//添加学生
	{
		
		if(request()->isPost())
		{
			$validate = new \think\Validate([//独立验证，在任何时候都可以使用Validate进行验证，注意实例化是要用完全限定名称，此时引用命名空间不合适，因为已经继承了一个类了
			'StdId'=>'require|number',
			'UserName' => 'require|min:5',//用户名最小长度为5
			'PassWord' => 'require|max:32'//密码最大长度为25
			
			]);

			$data=[
			'StdId'=>input('stdid'),
			'UserName'=> input('username'),
			'PassWord'=> md5(input('password')),
			'Name'=> input('name'),
			'Sex'=> input('sex'),
			'Class'=> input('class')
			];
			// var_dump($data); 
			// die;
		
			
			if (!$validate->check($data)) {
			$this->error($validate->getError());//此处也可以用dump($validate->getError())，用$this->error();打印出来的效果会好一些
			die;  
			}


			if(db('stdinfo')->insert($data))
			{
				return $this->success('添加学生成功','add');
			}
			else 
			{
				return $this->error('添加学生失败');	
			}
		//	var_dump(input('post.'));
		}
			return $this->fetch('add');
			
	}
//删除学生方法
	public function del()
	{		
		$id=input('id');//返回的结果为获取的id

		if($id!=2)
		{
			if(db('stdinfo')->delete(input('id')))////这里的$id是删除数据的数量,即此处删除了一条记录
			{
				$this->success('删除学生成功','liststd');
			}else{
				$this->error('删除学生失败');
			}
		}
		
		
	 }


}
