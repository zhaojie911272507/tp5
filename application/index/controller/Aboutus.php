<?php

namespace app\index\controller;
use think\Controller;
class Aboutus extends Controller
{ 
 
    public function Aboutus()
    {
    	
     return $this->fetch('aboutus');
	
     }



}
