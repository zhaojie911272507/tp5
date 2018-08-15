<?php

namespace app\admin\controller;
use think\Db;
use think\File;
use think\facade\Request;
use think\response\Download;
use app\admin\model\Proj as ProjModel;
use app\admin\validate\Proj as Validateuser;
use app\admin\controller\Base;//因为公用的控制器，已经继承了controller
use app\admin\controller\Uploadfile;
class Proj extends Base
{ 
			public function listproject()
		    {
			    $list = Db::name('project')
					    ->where('Status','=','0')
					    ->order('TerminalTime','desc')
					    ->paginate(4);
			    $count=$list->total();//获取总记录数
			    $this->assign('project',$list);//把分页数据赋值分配给模板中,即list,此时list为数组
			    return $this->fetch();//渲染模板输出
	    	 }
	    	 public function finlistproject()
		     {
			    $list = Db::name('project')
					    ->where('Status','=','1')
					    ->order('TerminalTime','desc')
					    ->paginate(4);
			    $count=$list->total();//获取总记录数
			    $this->assign('project',$list);//把分页数据赋值分配给模板中,即list,此时list为数组
			    return $this->fetch();//渲染模板输出
	    	 }
			public function add()//添加
			{
				//$upload=new Uploadfile;
				if(request()->isPost())
				{
					$files = request()->file('file');
					foreach($files as $file)//支持多文件上传
					{
						$info = $file->move('static/uploads');
						if($info)
						{
							 $info->getExtension();
							 $info->getSaveName();
							 $info->getFilename();
						}else{
							// 上传失败获取错误信息
							echo $file->getError();die;
						}
							$data=[
							'ProjectName'=> input('pname'),
							'File'=>$info->getSaveName(),
							'ProjectInfo'=> input('pinfo'),
							'StartTime'=> input('stime'),
							'TerminalTime'=> input('etime'),
							'Leader'=>input('pleader'),
							'LeaderContect'=> input('ptel'),
						];
					
						$validate = new Validateuser();
					 	if(!$validate->scene('add')->check($data))
					    {
						$this->error($validate->getError());die;
						}
						if(db('project')->insert($data))
						{
							return redirect('listproject');
						}else{
							return $this->error('添加项目失败');	
						}
				}
		}
				return $this->fetch('add');
	}
		public function del()
		{		
				$id=input('id');//返回的结果为获取的id
				$proj=db('project')->find($id);//获取一条数据	
				$path='../public/static/uploads/'.$proj['File'];
				$unlink= new ProjModel();
				if(file_exists($path))//首先判断文件存在不存在
				{
					if($unlink->unlink($path))
					{
						if(db('project')->delete(input('id')))
						{
							return redirect('listproject');
						}else{
							$this->error('删除该项目失败');
						}
					}else{
						$this->error('删除项目文件失败');
					}
				}else{
					if(db('project')->delete(input('id')))
					{
						return redirect('listproject');
					}else{
						$this->error('删除该项目失败');
					}
				}
				
		 }
		public function update()
		{		
			$id=input('id');
		 	$project=db('project')->find($id);//获取一条数据	
		 	$this->assign('project',$project);
			if(request()->isPost())//request判断是否表单已经提交过来，如果是POST表单提交过来的，就要处理数据，记得要加return
			{
				if(!request()->file('file'))
				{
					$data=[
					'Id'=>input('id'),
					'ProjectName'=> input('pname'),
					'ProjectInfo'=> input('pinfo'),
					'StartTime'=> input('stime'),
					'TerminalTime'=> input('etime'),
					'Leader'=>input('pleader'),
					'LeaderContect'=> input('ptel'),
					];
				}else{
					$path='../public/static/uploads/'.$project['File'];//先删除再更新文件
					$unlink= new ProjModel();
					if($unlink->unlink($path))
					{
						$file = request()->file('file');//删除成功后，加上修改后的文件
						$info = $file->move('static/uploads');
						if($info)
						{
							 $info->getSaveName();
							 $data=[
							'Id'=>input('id'),
							'ProjectName'=> input('pname'),
							'File'=>$info->getSaveName(),
							'ProjectInfo'=> input('pinfo'),
							'StartTime'=> input('stime'),
							'TerminalTime'=> input('etime'),
							'Leader'=>input('pleader'),
							'LeaderContect'=> input('ptel'),
							];
						}else{
							$this->error($file->getError());
						}
					}else{
							$this->error('删除更新前的文件失败');
						}
					}
						$validate = new Validateuser;
					 	if(!$validate->scene('update')->check($data))
					 	 {
							$this->error($validate->getError());die;
						 }	
						if(db('project')->update($data))//此处把Id写到了data数组里，所以此处省略了where
						{
							return redirect('listproject');
						}else{
							$this->error('修改项目信息失败');
						}
						 return ;//加一个return将不再显示下面的语句
			}
		 	return $this->fetch('update');	 
		 }

		 public function delcheck()
		{		
			if(request()->isPost())
			{
				$id=input('id/a');//返回的结果为获取的id
				foreach ($id as $value) 
				{
					$proj=db('project')->find($id);//获取一条数据	
					$path='../public/static/uploads/'.$proj['File'];
					$unlink= new ProjModel();
					if($unlink->unlink($path))
					{
						if(db('project')->delete($id))
						{
							return redirect('listproject');
						}else{
							$this->error('删除该项目失败');
						}
					}else{
						$this->error('删除项目文件失败');
					}
				}
			}
	 	}
		 	 public function changestatus()
			 {		
			 	if(request()->isPost())
				{
					$id=input('id/a');//返回的结果为获取的id
					foreach ($id as $value) 
					{
						$proj=db('project')->find($id);//获取一条数据	
						if(db('project')->update(['Status'=>'1']))
						{
						 	 return redirect('listproject');
						}else{
							$this->error('添加到完成项目失败');
						}
					}
				}
			}
		 	
	 	public function projectmem()
	 	{
	 		// $id=input('id');
	 		// $projname=input('ProjectName');
	 		// $project=db('project')->find($id);
	 		// $projectmem=db('projectmem')->where('$project['ProjectName']','=','')->find();
	 		$member=Db::name('stdinfo')->order( 'Id','desc')->select();
	 		 $this->assign('member',$member);
	 		$id=input('id');
	 		$projectname=input('projectname');
		 	// $project=db('projectmem')->find($projectname);//获取一条数据	
		 	// $this->assign('project',$project);
	 		$list = Db::name('project')
					    ->where('ProjectName','=',$projectname)
					    ->order('Id','desc')
					    ->paginate(4);
			$this->assign('projectmem',$list);
	 	    return $this->fetch('projectmem');
	 	}
}
 