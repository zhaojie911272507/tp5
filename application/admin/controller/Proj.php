<?php
namespace app\admin\controller;
use think\Db;
use think\File;
use think\facade\Request;
use think\response\Download;
use app\admin\model\Proj as ProjModel;
use app\admin\validate\Proj as Validateuser;
use app\admin\controller\Baseprojmem;//因为公用的控制器，已经继承了controller
use app\admin\controller\Uploadfile;
class Proj extends Baseprojmem
{ 
			public function listproject()
		    {
			    $list = Db::name('project')
					    ->where('Status','=','0')
					    ->order('StartTime','asc')
					    ->paginate(4);
			    $count=$list->total();//获取总记录数

			    $this->assign('project',$list);//把分页数据赋值分配给模板中,即list,此时list为数组
			    $timestamp = date('Y-m-d H:i:s', time());

			    $this->assign('timestamp',$timestamp);
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
	 	public function projectmem()
	 	{
	 		$id=input('id');
	 		$list=db('project')->find($id);//获取一条数据	
			$this->assign('projectmem',$list);
	 	    return $this->fetch('projectmem');
	 	}
	 	public function shuaxin(){
	 		return redirect('proj/listproject');
	 	}
	 	public function changestatus()
	 	{
	 		if(request()->post()){
		 		$id=input('projid');
		 		$list=db('project')->field('Status')->where('id',$id)->find($id);//获取一条数据,field限定一下,返回一个数组
		 		// $list=$list['Status'],将数组转换为数字
		 		if($list['Status']==0)
		 		{
		 			db('project')->where('Id',$id)->update(['Status'=>1]);
		 			echo 1;//由未完成改为完成
		 		}elseif($list['Status']==1){
		 			db('project')->where('Id',$id)->update(['Status'=>0]);
		 			echo 2;//由完成改为未完成
		 		}
		 	}else{
		 			$this->error('非法操作');
		 	}
		}
		
		public function addleader()
		{
			$id=input('id');
	 		$list=db('project')->find($id);//获取一条数据	
			$this->assign('projectmem',$list);
	 		if(request()->isPost())
			{
				$leader=input('pid');
				if(db('project')->where('Id',$id)->update(['Leader'=>$leader]))
				{
					return redirect('projectmem',['id'=>$id]);
				}else{
					$this->error('修改或添加失败');
				}
			}
			return $this->fetch('addleader');
		}
		public function addmem1()
		{
			$id=input('id');
	 		$list=db('project')->find($id);//获取一条数据	
			$this->assign('projectmem',$list);
	 		if(request()->isPost())
			{	
				$mem1=input('pid');
				if(db('project')->where('Id',$id)->update(['Member1'=>$mem1]))
				{
					return redirect('projectmem',['id'=>$id]);
				}else{
					$this->error('修改或添加失败');
				}
			}
			return $this->fetch('addmem1');
		}

		public function addmem2()
		{
			$id=input('id');
	 		$list=db('project')->find($id);//获取一条数据	
			$this->assign('projectmem',$list);
			if(request()->isPost())
			{
				$mem2=input('pid');
				if(db('project')->where('Id',$id)->update(['Member2'=>$mem2]))
				{
					return redirect('projectmem',['id'=>$id]);
				}else{
					$this->error('修改或添加失败');
				}
			}
			return $this->fetch('addmem2');
		}
		public function addmem3()
		{
			$id=input('id');
	 		$list=db('project')->find($id);//获取一条数据	
			$this->assign('projectmem',$list);
			if(request()->isPost())
			{
				$mem3=input('pid');
				if(db('project')->where('Id',$id)->update(['Member3'=>$mem3]))
				{
					return redirect('projectmem',['id'=>$id]);
				}else{
					$this->error('修改或添加失败');
				}
			}
			return $this->fetch('addmem3');
		}
		public function addmem4()
		{
			$id=input('id');
	 		$list=db('project')->find($id);//获取一条数据	
			$this->assign('projectmem',$list);
			if(request()->isPost())
			{
				$mem4=input('pid');
				if(db('project')->where('Id',$id)->update(['Member4'=>$mem4]))
				{
					return redirect('projectmem',['id'=>$id]);
				}else{
					$this->error('修改或添加失败');
				}
			}
			return $this->fetch('addmem4');
		}
		public function addmem5()
		{
			$id=input('id');
	 		$list=db('project')->find($id);//获取一条数据	
			$this->assign('projectmem',$list);
			if(request()->isPost())
			{
				$mem5=input('pid');
				if(db('project')->where('Id',$id)->update(['Member5'=>$mem5]))
				{
					return redirect('projectmem',['id'=>$id]);
				}else{
					$this->error('修改或添加失败');
				}
			}
			return $this->fetch('addmem5');
		}
		public function addmem6()
		{
			$id=input('id');
	 		$list=db('project')->find($id);//获取一条数据	
			$this->assign('projectmem',$list);
			if(request()->isPost())
			{
				$mem6=input('pid');
				if(db('project')->where('Id',$id)->update(['Member6'=>$mem6]))
				{
					return redirect('projectmem',['id'=>$id]);
				}else{
					$this->error('修改或添加失败');
				}
			}
			return $this->fetch('addmem6');
		}

		public function changefin()
		{
			if(request()->isAJAX())
			{
				  $id=input('pro/a');
				  $count=count($id);
				  $j=1;
		 		  for($i=0;$i<$count;$i++)
		 		  {
		 		 	if(db('project')->where('Id',$id[$i])->update(['Status'=>0]))
		 		 	{
		 		 		$j++;
		 		 	}
		 		  }
		 		  if($count==$j)
		 		  {
		 		  	echo 1;
		 		  }else{
		 		  	echo 2;
		 		  }

			}
		}
		public function pic()
		{
			$id=input('id');
			$proj=db('project')->find($id);//获取一条数据	
			$this->assign('project',$proj);
			if(request()->isPost())
		    {
				$files=request()->file('image');
	 			$i=0;
			  	foreach($files as $file)
			  	{
			  		if($i==0){
			  			$info = $file->validate(['ext'=>'jpg,png,gif'])->move('static/projfile');
			  		}else{
			  			$info = $file->move('static/projfile');
			  		}
				  	if($info){
					  	$arr[$i]=$info->getSaveName();
					  	 $i++;
				  	}else{
				  		echo $file->getError();die;
				  	}
				 }
				 $id=input('id');
				   $data=[
				   		'Id'=>input('id'),
						'Pic'=>	$arr['0'],
						'Alt'=>input('alt'),
						'Finfile'=>	$arr['1']
					 ];
					 if(db('project')->where('Id',$id)->update($data))//此处把Id写到了data数组里，所以此处省略了where
					{
						return redirect('pic',['id'=>$id]);
					}else{
						$this->error('信息完善失败');
					}
					 return ;//加一个return将不再显示下面的语句
			}
			return $this->fetch();
		}
}

 	