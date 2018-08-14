<?php

namespace app\index\controller;
use think\Db;
use think\Controller;
class Services extends Controller
{ 
 
    public function Services()
    {
   		 $list = Db::name('services')->order('Sort','asc')->paginate(9); 
		 $count=$list->total();
		 $this->assign('services',$list);
    	 return $this->fetch('services');
	
     }




}
