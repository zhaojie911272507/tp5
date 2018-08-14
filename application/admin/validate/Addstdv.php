<?php

namespace app\admin\validate;
use think\Validate;


class Addstdv extends Validate
{ 
   	protected $rule=[
   		'StdId' =>'require|number|unique:stdinfo',
   		'UserName' => 'require|unique:stdinfo',//键为要验证的名字，值为验证规则。require为必填
   		'PassWord' => 'require|min:6',
   		'Name'=> 'require',
   		'Sex'=> 'require',
   		'Grade'=>'require',
   		'Class'=>'require'
   ];
   //可以根据需要自己写错误提示
	 protected $message = [
	'StdId.require'=>'学号必须填写',
	'StdId.number'=>'学号必须为数字',
	'StdId.unique'=>'学号已存在',
	'UserName.require' => '名称必填',
	'UserName.min' => '名称最少为5个字符',
	'UserName.unique'=>'用户名已存在',
	'PassWord.require'=>'密码必须填写',
	'PassWord.min'=>'密码最少为6位',
	'Name.require'=>'姓名必须填写',
	'Sex.require'=>'性别必填',
	'Grade.require'=>'年级必填',
	'Class.require'=>'班级信息必填'
	];

		
		//场景验证，就像验证密码时，密码可以为空，也就是密码保持原有的不变
		protected $scene = [
		'add' => ['StdId','username','password','Name','Sex','Grade','Class'],//add为场景的名称，username为要验证的字段，可以验证多个。一个数组就是一条元素，一条元素就是一个场景，如果'username'=>'require'此时为只验证username的require属性
		'update'=>['StdId','username','password','Name','Sex','Grade','Class'],
		];

}
 