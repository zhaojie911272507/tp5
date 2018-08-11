<?php

namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\Loginm;
class Login extends Controller
{ 
    public function index()
    {
      $member=new Loginm();
      $captcha=new \think\captcha\Captcha();
      $value=input('code');
     
    	if(request()->isPost())
    	{
    		if(!$captcha->check($value))
            {
              $this->error('验证码错误');
            }
            else
            {
                $data=input('post.');//接收所有post提交的数据
            
                if ($member->login($data)==3) 
                {
                   return redirect('admin/index/index');
                }
                else
                {
                    $this->error('密码或用户名错误');
                }
          }
    		
    	}
        return $this->fetch('login');
	
     }
   
     public function logout()
     {
        session(null);
        return redirect('admin/login/index');
     }


}
