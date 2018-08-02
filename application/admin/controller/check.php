<?php 
namespace app\admin\controller;
class Captcha extends \think\Controller
{
	//验证码表单
	public function checkcode()
	{
		return $this->fetch();
	}
	//验证检测
	public function check($code='')
	{
		$captcha=new \think\captcha\Captcha();
		
		if(!$captcha->check($code))
		{
			$this->error('验证码错误');
		}
		else
		{
			$this->success('验证码正确');
		}
	}
}

 ?>