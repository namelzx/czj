<?php

namespace app\common\model;

use think\Model;

class Featured	 extends BaseModel
{

 	// 获取入轮播列表
 	public static function getfeaturedlist()
 	{
 	

 		$oreder	=	['id'=>'desc'];
 		$res	=	self::where('status','neq',-1)->order($oreder)->paginate(10);
 		// echo $this->getlastSql();
 		return $res;

 	}
    
    
    
}
