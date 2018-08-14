<?php

namespace app\admin\controller;
use think\Db;
use think\Controller;
class Base extends Controller
{ 
    public function initialize()
    {    
      $list = Db::name('admin')->where('Id','=',session('uid'),'UserName','=',session('username'))->find();

      if($list=='NULL' || $list==NULL || !session('username'))
        {
        $this->error('不是管理员，请离开','admin/Login/index');
        }
    }

}
 