<?php

namespace app\admin\controller;
use app\admin\model\Stdinfo;
use app\admin\controller\Base;//因为公用的控制器，已经继承了controller
class Addstd extends Base
{ 
    public function index()
    {
    	//return "2323";
     return $this->fetch('addstd');
	
     }
   
     public function liststd()
    {
    
    $list=Stdinfo::paginate(6);
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
				return $this->success('添加学生成功','liststd');
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
	 public function update()
	{		
		$id=input('id');
	 	
	 	$stdinfo=db('stdinfo')->find($id);//获取一条数据	
	 	$this->assign('stdinfo',$stdinfo);
	 
			if(request()->isPost())//request判断是否表单已经提交过来，如果是POST表单提交过来的，就要处理数据，记得要加return
			{
				if (input('sex')!='男' && input('sex')!='女')
				 {
					$this->error('性别有误,重新修改');
				}
				if(input('password'))
				{
						$data=[
					'Id'=>input('id'),
					'PassWord'=>md5(input('password')),
					'Name'=>input('name'),
					'Sex'=>input('sex'),
					'Class'=>input('class'),
				];
				}
				else
				{
						$data=[
					'Id'=>input('id'),
					'PassWord'=>$stdinfo['PassWord'],
					'Name'=>input('name'),
					'Sex'=>input('sex'),
					'Class'=>input('class'),
				];
				}
				$result=db('stdinfo')->update($data);
			if($result==0)//此处把Id写到了data数组里，所以此处省略了where
			{
				$this->error('您没有做任何修改');
			}
			else if($result>0)
			{
				$this->success('修改学生信息成功','liststd');
			}
			else
			{
				$this->error('修改学生信息失败');
			}
			 return ;//加一个return将不再显示下面的语句
	 	}
	 	return $this->fetch('update');	 
	 
	}

	 public function logout()
	 {
	 	session(null);
	 	$this->success('退出成功..','login/login');
	 }

}
