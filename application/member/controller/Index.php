<?php

namespace app\member\controller;
use think\Controller;
use app\member\controller\Base;
class Index extends Base
{ 
    public function index()
    {
    	
        return $this->fetch();
     }
    

}
