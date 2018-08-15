<?php

namespace app\index\controller;
use think\Db;
class Services extends Base
{ 
    public function Services()
    {
   		 $list = Db::name('services')->order('Sort','asc')->paginate(9); 
		 $count=$list->total();
		 $this->assign('services',$list);
    	 return $this->fetch('services');
	
     }




}
