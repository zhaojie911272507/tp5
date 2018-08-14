<?php

namespace app\admin\validate;
use think\Validate;


class Pic extends Validate
{ 
   	protected $rule=[
   		'Sort' =>'require|unique:lunbotu|number',
   		'Pic' => 'require',//键为要验证的名字，值为验证规则。require为必填
   		'Alt'=> 'require',
   ];
   //可以根据需要自己写错误提示
	 protected $message = [
	'Sort.require'=>'排序不能为空',
	'Sort.unique'=>'排序不能重复',
	'Sort.number'=>'排序只能为整数',
	'Pic.require' => '选择一个图片上传',
	'Alt.require'=>'描述一下吧',
	];

		
		//场景验证，就像验证密码时，密码可以为空，也就是密码保持原有的不变
		protected $scene = [
		'addimg' => ['Pic'],	
		'add' => ['Sort','Pic','Alt'],//add为场景的名称，username为要验证的字段，可以验证多个。一个数组就是一条元素，一条元素就是一个场景，如果'username'=>'require'此时为只验证username的require属性
		'update'=>['Sort','Alt'],
		];

}
 