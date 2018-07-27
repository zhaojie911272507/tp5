<?php

namespace app\admin\controller;
use think\Controller;
class Book extends Controller
{ 
    public function index()
    {
    	//return "2323";
     return $this->fetch('book');
	
     }
   



}
