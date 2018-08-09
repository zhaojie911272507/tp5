<?php

namespace app\admin\validate;
use think\Validate;


class Column extends Validate
{ 
   	protected $rule=[
    		'Cname' => 'require|unique:column',//键为要验证的名字，值为验证规则。require为必填,验证唯一性是，后面应跟上该字段所在的表的名称，代表该字段在该表中是否唯一
 //   		 'PassWord' => 'require|min:5',
    		'Status'=>'require|between:0,1'
    ];
 //   //可以根据需要自己写错误提示

	  protected $message = [
	 'Cname.require' => '栏目名称必填',
	 'Cname.unique' => '该栏目已存在',
	 'Status.require' => '显示状态必填',
	 'Status.between' => '根据提示填入正确的显示状态',
	 ];

	// 	//场景验证，就像验证密码时，密码可以为空，也就是密码保持原有的不变
	 	protected $scene = [
	 	'addcol' => ['Cname','Status'],//add为场景的名称，UserName为要验证的字段，可以验证多个。一个数组就是一条元素，一条元素就是一个场景，如果'UserName'=>'require'此时为只验证UserName的require属性
	 	'updatecol'=>['Cname'=>'require','Status'],
	 	];

}
 