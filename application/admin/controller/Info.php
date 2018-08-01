<?php

namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\Info as Infom;
use app\admin\validate\Info as Validateuser;
class Info extends Controller
{ 
 	public function info()
     {
     	$id=input('id');
	 	$webinfo=db('webinfo')->find($id);//获取一条数据	
	 	$this->assign('webinfo',$webinfo);
     	return $this->fetch('info');
     }

     public function update()
	{		
		$id=input('id');
	 	$webinfo=db('webinfo')->find($id);//获取一条数据	
	 	$this->assign('webinfo',$webinfo);
		
		if(request()->isPost())//
		{
			$data=[
				'Id'=>input('id'),
				'Title'=>input('title'),
				'Logo'=>input('logo'),
				'DomainName'=>input('url'),
				'Keywords'=>input('keywords'),
				'Info'=>input('description'),
				'contacts'=>input('contacts'),
				'PhoneNum'=>input('phone'),
				'Tel'=>input('tel'),
				'Fax'=>input('fax'),
				'qq'=>input('qq'),
				'Email'=>input('email'),
				'Adress'=>input('address'),
				'BottomInfo'=>input('bottoninfo'),
			];
		
			if(db('webinfo')->update($data))//此处把Id写到了data数组里，所以此处省略了where
			{

				$this->success('修改网站信息成功','update');
			}
			else
			{
				$this->error('修改网站信息失败');
			}
			 return ;//加一个return将不再显示下面的语句
	}
	 	
	 	return $this->fetch('update');	 
	 }
}
