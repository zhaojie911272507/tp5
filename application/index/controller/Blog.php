<?php

namespace app\index\controller;
 use think\Controller;
class Blog extends Controller
{ 
 
    public function blog()
    {
    
     return $this->fetch('blog');
	
     }




}
