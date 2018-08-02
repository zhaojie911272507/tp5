<?php

namespace app\admin\controller;
 use think\Controller;
class Index extends Controller
{ 
 
    public function index()
    {
    	$id=input('id');
        
        $webinfo=db('webinfo')->find($id);//获取一条数据  
        $this->assign('webinfo',$webinfo);
        return $this->fetch();
  
     }
   
     public function info()
     {
     	$id=input('id');
        
        $webinfo=db('webinfo')->find($id);//获取一条数据  
        $this->assign('webinfo',$webinfo);
        return $this->fetch('info');
  
     }


}
