<?php

namespace app\member\controller;
use think\Db;
use think\Controller;
class Base extends Controller
{ 
    public function initialize()
    {    
   		$list = Db::name('stdinfo')->where('Id','=',session('uid'),'UserName','=',session('username'))->find();

      if($list=='NULL' || $list==NULL || !session('username'))
        {
          $this->error('请先登录','Login/index');
        }
    }
}
 