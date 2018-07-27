<?php

namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\Admin as AdminModel;

class Listadmin extends Controller
{ 
    // public function Listadmin()
    // {
    // 	//return "2323";
    //  return $this->fetch();
	
    //  }  
	public function listadmin()
    {
    
     $list=AdminModel::paginate(4);
    	// $list=Db::table('admin')
    	// ->where('status',1)
    	// ->order('time')
    	// ->limit(10)
    	// ->select();
    // $list=admin::where('status',1)->paginate(3);//查询数据并赋值给$list，且每页显示4条数据
    $count=$list->total();//获取总记录数

    $this->assign('guanliyuan',$list);//把分页数据赋值分配给模板中,即list,此时list为数组

     return $this->fetch();//渲染模板输出
	
     }

}
