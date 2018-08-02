<?php

namespace app\admin\validate;
use think\Validate;


class Login extends Validate
{ 
   	protected $rule=[
   		'$value' => 'require|number',//键为要验证的名字，值为验证规则。require为必填
   ];
   //可以根据需要自己写错误提示
	 protected $message = [
	'$value.require'=>'验证码必须填写',
	'$value.number'=>'验证码必须为数字',
	];

		
		//场景验证，就像验证密码时，密码可以为空，也就是密码保持原有的不变
		protected $scene = [
		'login' => ['$value'],//add为场景的名称，username为要验证的字段，可以验证多个。一个数组就是一条元素，一条元素就是一个场景，如果'username'=>'require'此时为只验证username的require属性
		
		];

}
 