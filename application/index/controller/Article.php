<?php

namespace app\index\controller;
 use think\Controller;
class Article extends Controller
{ 
 
    public function index()
    {
    	//return "2323";
     return $this->fetch('Article');
	
     }



}
