<?php

namespace app\admin\controller;
use app\admin\controller\Base;
use think\Db;
use app\admin\model\Info as InfoModel;
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
		$path='../public/static/uploads/'.$webinfo['Logo'];
		$unlink= new InfoModel();
		if(request()->isPost())//
		{
			if(file_exists($path))//首先判断文件存在不存在
			{
				if(!request()->file('image'))//判断是否修改图片
				{
					$data=[
					'Id'=>input('id'),
					'Title'=>input('title'),
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
				}else{
						$file = request()->file('image');//删除成功后，加上修改后的文件
						$info = $file->move('static/uploads');
						if($info)
						{
							$info->getSaveName();
							$data=[
							'Id'=>input('id'),
							'Title'=>input('title'),
							'Logo'=>$info->getSaveName(),
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
						}else{
							$this->error($file->getError());
						}
					 }
				}else{
				if(!request()->file('image'))//判断是否修改图片
				{
					$data=[
					'Id'=>input('id'),
					'Title'=>input('title'),
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
				}else{
						if($unlink->unlink($path))
						{
							$file = request()->file('image');//删除成功后，加上修改后的文件
							$info = $file->move('static/uploads');
							if($info)
							{
								$info->getSaveName();
								$data=[
								'Id'=>input('id'),
								'Title'=>input('title'),
								'Logo'=>$info->getSaveName(),
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
							}else{
								$this->error($file->getError());
							}
						}else{
							$this->error('删除更新前的文件失败');
						}
					 }
				}
				$validate = new Validateuser;
			 	if(!$validate->scene('update')->check($data))
			 	 {
					$this->error($validate->getError());die;
				 }	
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
