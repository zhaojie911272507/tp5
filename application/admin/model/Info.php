<?php

namespace app\admin\model;
use think\Model;

class Info extends Model
{ 
  
	public function unlink($path)
	{
		return  is_file($path) && unlink($path);
	}

}
 