<?php

namespace app\admin\validate;
use think\Validate;


class Links extends Validate
{ 
   	protected $rule=[
   		'Title' => 'require',//键为要验证的名字，值为验证规则。require为必填
   		'Url' => 'require',
   		'Desc' => 'require|min:5',
   ];
   //可以根据需要自己写错误提示

	 protected $message = [
	'Title.require' => '链接标题必须填写',
	'Url.require' => '链接地址必填',
	'Desc.require' => '链接说明必填',
	'Desc.min'=>'链接说明不得少于五个字'
	];

		//场景验证，就像验证密码时，密码可以为空，也就是密码保持原有的不变
		protected $scene = [
		'add' => ['UserName','Desc'],//add为场景的名称，UserName为要验证的字段，可以验证多个。一个数组就是一条元素，一条元素就是一个场景，如果'UserName'=>'require'此时为只验证UserName的require属性
		'update'=>['UserName','Desc'],
		];

}
 