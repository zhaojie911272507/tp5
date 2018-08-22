<?php

namespace app\index\controller;
 use think\Db;
class Project extends Base
{ 
 
    public function Project()
    {
	    $list = Db::name('project')
			    ->where('Status','=','1')
			    ->order('TerminalTime','desc')
			    ->paginate(9);
	    $count=$list->total();//获取总记录数
	    $this->assign('project',$list);//把分页数据赋值分配给模板中,即list,此时list为数组
	    return $this->fetch();//渲染模板输出
     }
   

	// public function ralat($keywords,$id)
	// {
	// 	$arr=explode(',',$keywords);//获取以,分隔的字符串
	// 	static $ralateres=array();//创建一个静态的空数组，来存放后面得到的数据
	// 	foreach($arr as  $k=$v)//查询当前文章关键字所组成的一个数组
	// 	{
	// 		$map['keywords']=['like','%'.$v.'%'];
	// 		$ralateres=db('article')->where($map)->order('id desc')->limit(6)->select();
	// 		$ralateres=array_merge($ralateres,$artres);//合并数组，最终得到是二位数组
	// 	}	
	// 	return $ralateres;
	// }


}
