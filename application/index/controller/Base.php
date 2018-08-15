<?php

namespace app\index\controller;
use think\Controller;
class Base extends Controller
{ 
 
    public function initialize()//查询数据，更高的代码重用性
    {
    	$webinfo=db('webinfo')->find();
    	$this->assign('webinfo',$webinfo);
     }

	// public function right()//热门点击
	// {
	// 	$clickres=db('article')->order('click desc')->limit(8)->select();

	// 	$tjres=db('article')->where('state','=',1)->order('click desc')->limit(8)->select();
	// 	$this->assign(array ('clickres' =>$clickres,
	// 		'tjres'=>$tjres;
	// ))；
	// }


}
