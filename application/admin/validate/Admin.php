<?php

namespace app\admin\validate;
use think\Validate;


class Admin extends Validate
{ 
   	protected $rule=[
   		'UserName' => 'require|min:5|unique:admin',//键为要验证的名字，值为验证规则。require为必填,验证唯一性是，后面应跟上该字段所在的表的名称，代表该字段在该表中是否唯一
   		 'PassWord' => 'require|min:5',
   ];
   //可以根据需要自己写错误提示

	 protected $message = [
	'UserName.require' => '名称必填',
	'UserName.min' => '名称最少为5个字符',
	'UserName.unique' => '用户名已存在',
	'PassWord.require' => '密码必须填写',
	'PassWord.min' => '密码不能少于5位',
	];

		//场景验证，就像验证密码时，密码可以为空，也就是密码保持原有的不变
		protected $scene = [
		'add' => ['UserName','PassWord'],//add为场景的名称，UserName为要验证的字段，可以验证多个。一个数组就是一条元素，一条元素就是一个场景，如果'UserName'=>'require'此时为只验证UserName的require属性
		'update'=>['UserName'=>'require','PassWord'=>'min'],
		];

}
 