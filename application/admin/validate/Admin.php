<?php

namespace app\admin\validate;
use think\Validate;


class Admin extends Validate
{ 
   	protected $rule=[
   		'username' => 'require|max:25',//键为要验证的名字，值为验证规则。require为必填
   		'password' => 'require'
   ];
   //可以根据需要自己写错误提示

	 protected $msg = [
	'username.require' => '名称必须填写',
	'username.max' => '名称最多不能超过25个字符',
	'password.require'=>'密码必须填写',
	];

		//场景验证 
		//场景验证，就像验证密码时，密码可以为空，也就是密码保持原有的不变
		protected $scene = [
		'add' => ['username'],//add为场景的名称，username为要验证的字段，可以验证多个。一个数组就是一条元素，一条元素就是一个场景
		];

}
 