<?php

namespace app\member\model;
use think\Model;
use think\Db;

class Loginm extends Model
{ 
  public function login($data)
  {
   //验证码验证
  	$user=Db::table('stdinfo')->where('UserName','=',$data['username'])->find(); //因为不是主键，所以要用where

  	if($user)
  	{

  		if($user['PassWord']==md5($data['password']))
  		{
        session('username',$user['UserName']);
        session('uid',$user['Id']);
        $member=db('stdinfo')->find(session('uid'));
       if(session('username')==$member.UserName)
       {
        return 3;//信息正确
       }
  			else
        {
          return redirect('member/login/index')
        }
  		}
  		else
  		{
  			return 2;//密码错误 
  		}
  	}
  	else
  	{
  		return 1;//用户不存在
  	}

  }

}
 