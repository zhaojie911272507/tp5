<?php

namespace app\admin\controller;
use app\admin\controller\Base;
use think\Db;
use app\admin\model\Info as Infom;
use app\admin\validate\Info as Validateuser;
class Info extends Base
{ 
 	public function index()
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
				'BottomInfo'=>input('bottominfo'),
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
	 		public function upload()
			{
				// 获取表单上传文件 例如上传了001.jpg
				$file = request()->file('image');
				// 移动到框架应用根目录/uploads/ 目录下
				$info = $file->move( '../uploads');
				if($info)
				{
					// 成功上传后获取上传信息
					// 输出 jpg
					echo $info->getExtension();
					// 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
					echo $info->getSaveName();
					// 输出 42a79759f284b767dfcb2a0197904287.jpg
					echo $info->getFilename();
					$this->success('上传成功');
				}
				else
				{
					// 上传失败获取错误信息
					echo $file->getError();
				}
		}
}
