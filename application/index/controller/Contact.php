<?php

namespace app\index\controller;
use app\index\model\Contact as ContactModel;
use app\index\validate\Contact as Validateuser;
use think\Db;
class Contact extends Base
{ 
    public function contact()
    {
    	$id=input('id');
	 	$webinfo=db('webinfo')->find($id);//获取一条数据	
	 	$this->assign('webinfo',$webinfo);
     	return $this->fetch('contact');
     }
		public function addbook()//留言
		{
			
			if(request()->isPost())
			{
				$data=[
				'Name'=> input('name'),
				'Email'=> input('email'),
				'Tel'=> input('tel'),
				'Content'=> input('content'),
			];
		
			$validate = new Validateuser;
			if (!$validate->scene('addbook')->check($data))
			 {
				$this->error($validate->getError());
				die;  
			}
			if(db('book')->insert($data))
			{
				return $this->success('感谢您的留言','contact');	
			}
			else 
			{
				return $this->error('添加留言失败');	
			}
		}
		else{
			$this->error('表单提交失败');
		}
		return $this->fetch();	
	}
	


}
