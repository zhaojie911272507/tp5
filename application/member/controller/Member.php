<?php

namespace app\member\controller;
use think\Db;
use app\member\model\Member as ModelMember;
use app\member\validate\Member as Validateuser;
use app\member\controller\Base;//因为公用的控制器，已经继承了controller
class Member extends Base
{ 
     public function index()
     {
    	$list=Db::name('stdinfo')->order('Id','desc')->paginate(6);  // $list=addadmin::where('status',1)->paginate(3);//查询数据并赋值给$list，且每页显示4条数据
	    $count=$list->total();//获取总记录数
	    $this->assign('project',$list);//把分页数据赋值分配给模板中,即list,此时list为数组

      	return $this->fetch('listproject');
	
      }
   
	public function listproject()
    {
    	
	    $list=Db::name('project')->order('Id','desc')->paginate(4);
	    // $list=addadmin::where('status',1)->paginate(3);//查询数据并赋值给$list，且每页显示4条数据
	    $count=$list->total();//获取总记录数
	    $this->assign('project',$list);//把分页数据赋值分配给模板中,即list,此时list为数组

	     return $this->fetch();//渲染模板输出
		
     }
	public function listmember()
    {
    	
	    $list=Db::name('stdinfo')->order('Id','desc')->paginate(6);
	    // $list=addadmin::where('status',1)->paginate(3);//查询数据并赋值给$list，且每页显示4条数据
	    $count=$list->total();//获取总记录数
	    $this->assign('member',$list);//把分页数据赋值分配给模板中,即list,此时list为数组

	     return $this->fetch();//渲染模板输出
		
     }

	

	 public function logout()
	 {
	 	session(null);
	 	$this->success('退出成功..','login/login');
	 }
}
 