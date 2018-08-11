<?php

namespace app\admin\controller;
use think\Db;
use think\File;
use app\admin\model\Pic as PicModel;
use app\admin\validate\Pic as Validateuser;
use app\admin\controller\Base;
class Pic extends Base
{ 
    public function pic()
    {
	    $list = Db::name('lunbotu')->order('Sort','asc')->paginate(3); 
		 $count=$list->total();
		 $this->assign('lunbotu',$list);
	     return $this->fetch();
	     }

	     public function add()//添加
		{
		 // 获取表单上传文件 例如上传了001.jpg
		 	$file = request()->file('image');
			// 移动到框架应用根目录/uploads/ 目录下
			$info = $file->move('../public/static/uploads');
			if($info)
			{
				// 成功上传后 获取上传信息
				// 输出 jpg
				 $info->getExtension();
				// 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
				 $info->getSaveName();
				// 输出 42a79759f284b767dfcb2a0197904287.jpg
				 $info->getFilename();
			}
			else
			{
				// 上传失败获取错误信息
				$this->error($file->getError());
			}
			if(request()->isPost())
			{
				$data=[
				'Id'=>input('id'),
				'Sort'=>input('sort'),
				'Pic'=>$info->getSaveName(),
				'Alt'=>input('alt'),
				];
				$validate = new Validateuser;
				if(!$validate->scene('addimg')->check($data))
				{
					$this->error($validate->getError());die;
				}
				if(!$validate->scene('add')->check($data))
				{
					$this->error($validate->getError());die;
				}
				if(db('lunbotu')->insert($data))
				{
					return redirect('pic/pic');
				}
				else 
				{
				  $this->error('添加轮播图失败');	
				}
			}
			return redirect('pic/pic');
		}

		     public function update()
			{		
				$id=input('id');
			 	$lunbotu=db('lunbotu')->find($id);//获取一条数据	
			 	$this->assign('lunbotu',$lunbotu);
			 	
				if(request()->isPost())//request判断是否表单已经提交过来，如果是POST表单提交过来的，就要处理数据，记得要加return
				{
					if(!request()->file('image'))
					{
						$data=[
						'Id'=>input('id'),
						'Sort'=>input('sort'),
						'Alt'=>input('alt'),
						];
					}
					else
					{
						$file = request()->file('image');
						$info = $file->move('static/uploads');
						if($info)
						{
							 $info->getExtension();
							 $info->getSaveName();
							 $info->getFilename();
							 $data=[
							'Id'=>input('id'),
							'Sort'=>input('sort'),
							'Pic'=>$info->getSaveName(),
							'Alt'=>input('alt'),
							];
						}
						else
						{
							$this->error($file->getError());
						}
					}
					$validate = new Validateuser;
					if(!$validate->scene('update')->check($data))
					{
						$this->error($validate->getError());die;
					}
					if(db('lunbotu')->update($data))//此处把Id写到了data数组里，所以此处省略了where
					{
						return redirect('pic');
					}
					else
					{
						$this->error('修改轮播图信息失败');
					}
					 return ;//加一个return将不再显示下面的语句
			}
				 	
				 	return $this->fetch('update');	 
				}
	 	
			 public function del()
			{		
				$id=input('id');//返回的结果为获取的id
				$lunbotu=db('lunbotu')->find($id);//获取一条数据	
				$path='../public/static/uploads/'.$lunbotu['Pic'];
				$unlink= new PicModel();
				if($unlink->unlink($path))
				{
					if(db('lunbotu')->delete(input('id')))
					{
						return redirect('pic');
					}else{
						$this->error('删除轮播图失败');
					}
				}
				else
				{
					$this->error('删除轮播图失败');
				}
		    }

}
