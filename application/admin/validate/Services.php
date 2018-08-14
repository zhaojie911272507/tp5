<?php

namespace app\admin\validate;
use think\Validate;


class Services extends Validate
{ 
   	protected $rule=[
   		'Sort' =>'require|unique:services|number',
   		'Title' => 'require|unique:services',
   		'Summary' => 'require',//键为要验证的名字，值为验证规则。require为必填
   		'Content'=> 'require',
   ];
   //可以根据需要自己写错误提示
	 protected $message = [
	'Sort.require'=>'排序不能为空',
	'Sort.unique'=>'排序不能重复',
	'Sort.number'=>'排序只能为整数',
	'Title.require'=>'标题不能为空',
	'Summary.require' => '简单描述一下该服务项目',
	'Content.require'=>'具体描述服务内容，让客户更加明白该业务',
	];

		
		//场景验证，就像验证密码时，密码可以为空，也就是密码保持原有的不变
		protected $scene = [
		'add' => ['Sort','Title','Summary','Content'],//add为场景的名称，username为要验证的字段，可以验证多个。一个数组就是一条元素，一条元素就是一个场景，如果'username'=>'require'此时为只验证username的require属性
		'update'=>['Sort','Title'=> 'require','Summary','Content'],
		'update2'=>['Title'=> 'require','Summary','Content'],
		];

}
 