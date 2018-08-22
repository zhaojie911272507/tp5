<?php

namespace app\admin\validate;
use think\Validate;


class Info extends Validate
{ 
   	protected $rule=[
   		'Title' =>'require',
   		'Logo' => 'require',//键为要验证的名字，值为验证规则。require为必填
   		'DomainName' => 'require',
   		'Keywords'=> 'require',
   		'Info'=> 'require',
   		'contacts'=>'require',
   		'PhoneNum'=>'require',
   		'Tel'=> 'require',
   		'Fax'=> 'require',
   		'qq'=>'require',
   		'Email'=>'require',
   		'Adress'=> 'require',
   		'BottomInfo'=>'require'
   ];
   //可以根据需要自己写错误提示
	 protected $message = [
	'Title.require'=>'标题必须填写',
	'Logo.require' => '图片不能为空',
	'DomainName.require'=>'域名',
	'Keywords.require'=>'关键字',
	'Info.require'=>'介绍信息',
	'contacts.require'=>'联系人',
	'PhoneNum.require'=>'手机号',
	'Tel.require'=>'电话',
	'Fax.require'=>'传真',
	'qq.require'=>'QQ',
	'Email.require'=>'邮箱',
	'Adress.require'=>'公司地址',
	'BottomInfo.require'=>'底部信息'
	];

		
		//场景验证，就像验证密码时，密码可以为空，也就是密码保持原有的不变
		protected $scene = [
	//add为场景的名称，username为要验证的字段，可以验证多个。一个数组就是一条元素，一条元素就是一个场景，如果'username'=>'require'此时为只验证username的require属性
		'update'=>['Title','DomainName','Keywords','Info','contacts','PhoneNum','Tel','Fax','qq','Email','Adress','BottomInfo'],
];

}
 