<?php

namespace app\index\controller;
 use think\Controller;
 use think\Db;
class Index extends Controller
{ 
 
    public function index()
    {
    	$nav=Db::name('column')->order('id asc')->select();
    	$this->assign('nav',$nav);
    	$lbt=Db::name('lunbotu')->order('Sort asc')->limit(6)->select();
    	$this->assign('lbt',$lbt);
     	return $this->fetch();
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
