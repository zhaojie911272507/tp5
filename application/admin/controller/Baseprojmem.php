<?php

namespace app\admin\controller;
use think\Db;
use app\admin\controller\Base;//因为公用的控制器，已经继承了controller
class Baseprojmem extends Base
{ 
    public function initialize()
    {    
      $member=Db::name('stdinfo')->order( 'Id','desc')->select();
      $this->assign('member',$member);
    }

}
 