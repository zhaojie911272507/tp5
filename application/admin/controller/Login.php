<?php

namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\Loginm;

class Login extends Controller
{ 
    // public function index()
    // {
    //     return $this->fetch('login');
    // }
    public function index()
    {
       $member=new Loginm();

    	if(request()->isPost())
    	{
    		
    		$data=input('post.');//接收所有post提交的数据
            
    		if ($member->login($data)==3) 
    		{
    	       $this->success('登陆成功,正在为您跳转...','index/index');
    		}
    		else
    		{
    			$this->error('密码错误');
    		}
    	}
        return $this->fetch('login');
	
     }
   



}
