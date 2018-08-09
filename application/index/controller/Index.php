<?php

namespace app\index\controller;
 use think\Controller;
 use think\Db;
class Index extends Controller
{ 
 
    public function index()
    {
    	$nav=Db::name('column')->order('id desc')->select();
    	$this->assign('nav',$nav);
     return $this->fetch();
	
     }
   


}
