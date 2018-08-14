<?php

namespace app\admin\validate;
use think\Validate;


class Proj extends Validate
{ 
   	protected $rule=[
   		'ProjectName' =>'require',
   		'ProjectInfo' => 'require|min:6',//键为要验证的名字，值为验证规则。require为必填
   		'StartTime' => 'require',
   		'TerminalTime'	=> 'require',
   		'Leader'	=> 'require',
   		'LeaderContect'=> 'require',
   ];
   //可以根据需要自己写错误提示
	 protected $message = [
	'ProjectName.require'=>'项目名称不能为空',
	'ProjectInfo.require' => '项目详细信息不能为空',
	'ProjectInfo.min' => '项目详细信息太少',
	'StartTime.require'=>'开始时间不能为空',
	'TerminalTime.require'=>'截止日期必填',
	'Leader.require'=>'填写项目负责人',
	'LeaderContect.require'=>'负责人联系方式不能为空',
	];

		
		//场景验证，就像验证密码时，密码可以为空，也就是密码保持原有的不变
		protected $scene = [
		'add' => ['ProjectName','ProjectInfo','StartTime','TerminalTime','Leader','LeaderContect'],//add为场景的名称，username为要验证的字段，可以验证多个。一个数组就是一条元素，一条元素就是一个场景，如果'username'=>'require'此时为只验证username的require属性
		'update'=>['ProjectName','ProjectInfo','StartTime','TerminalTime','Leader','LeaderContect'],
		];

}
 