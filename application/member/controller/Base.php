<?php

namespace app\member\controller;
use think\Controller;
class Base extends Controller
{ 
    public function initialize()
    {    

      if(!session('username'))
        {
         $this->error('请先登录系统','Login/index');
        }
    }
}
 