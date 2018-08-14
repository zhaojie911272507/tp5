<?php

namespace app\index\validate;
use think\Validate;


class Contact extends Validate
{ 
   	protected $rule=[
   		'Name' => 'require',//键为要验证的名字，值为验证规则。require为必填,验证唯一性是，后面应跟上该字段所在的表的名称，代表该字段在该表中是否唯一
   		 'Tel' => 'require|mobile',
   		 'Job' =>'require',
   		 'Email'=>'email',
   		 'Content'=>'require|min:5',
   ];
   //可以根据需要自己写错误提示

	 protected $message = [
	'Name.require' => '姓名必填',
	
	'Tel.require' => '电话必填',
	'Tel.mobile' => '亲，您的电话格式有误',
	'Job.require' =>'填上你的工作吧，亲',
	'Email.email'=>'邮箱格式有误',
	'Content.require' => '内容必填',
	'Content.min' => '内容不要少于5个字呦，亲',
	];

		//场景验证，就像验证密码时，密码可以为空，也就是密码保持原有的不变
		protected $scene = [
			'addbook' => ['Name','Tel','Email','Content'],
		//add为场景的名称，UserName为要验证的字段，可以验证多个。一个数组就是一条元素，一条元素就是一个场景，如果'UserName'=>'require'此时为只验证UserName的require属性
	
		];

}
 